<?php

class T_stnk_bpkb extends MX_Controller {

    //put your code here
    var $table = "t_stnk";

    function __construct() {
        parent::__construct();
        $this->load->model(array('M_t_stnk_bpkb' => 't_stnk_bpkb', 'Datatable_model' => 'm_datatable'));
        $this->load->library(array('upload', 'encrypt', 'Printpdf', 'Auth_log'));
        //set breadcrumb
        $this->breadcrumbs->push('Transaksi STNK & BPKB', '/stnk-bpkb');
    }
    
    public function index() {
        $data_session = $this->__getSession();
        $config['base_url'] = base_url() . 'stnk-page';
        $config['total_rows'] = $this->main_model->countdata($this->table, $where = array());
        $config['per_page'] = (!empty($data_session['page']) ? $data_session['page'] : 10);
        $config['uri_segment'] = 2;
        $limit = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $this->pagination->initialize($config);
        $data['paging'] = $this->pagination->create_links();
        $data['data'] = $this->t_stnk_bpkb->getdata($this->table, $limit, $config['per_page'], $like = $data_session, $where = array('stnk_status!=' => '3'));
        $data['sr_data'] = $data_session;
        $data['view'] = 't_stnk_bpkb/main';
        $this->load->view('default', $data);
    }
    
    public function __getSession() {
        if ($_POST) {
            return $data = array(
                'page' => set_session_table_search('page', $this->input->get_post('page', TRUE)),
                'no_so' => set_session_table_search('no_so', $this->input->get_post('no_so', TRUE)),
                'stnk_estimate_date' => set_session_table_search('stnk_estimate_date', $this->input->get_post('stnk_estimate_date', TRUE)),
                'bpkb_estimate_date' => set_session_table_search('bpkb_estimate_date', $this->input->get_post('bpkb_estimate_date', TRUE)),
                't_stnk_nama' => set_session_table_search('t_stnk_nama', $this->input->get_post('t_stnk_nama', TRUE))
            );
        } else {
            return $data = array(
                'page' => $this->session->userdata('page'),
                'no_so' => $this->session->userdata('no_so'),
                'stnk_estimate_date' => $this->session->userdata('stnk_estimate_date'),
                'bpkb_estimate_date' => $this->session->userdata('bpkb_estimate_date'),
                't_stnk_nama' => $this->session->userdata('t_stnk_nama')
            );
        }
    }
    
    public function add() {
        $this->breadcrumbs->push('Add', '/t_stnk_bpkb');
        $data['codeso'] = $this->main_model->generate_code($this->table, 'SB-' . date('Y') . '-' . date('m'), '-', 6, $date = false, $loop = false, 'id', 'no_process');
        $data['view'] = "t_stnk_bpkb/add";
        $this->load->view('default', $data);
    }
    
    public function edit($id) {
        $this->breadcrumbs->push('Edit', '/t_stnk_bpkb');
        $data['detail'] = $this->db->get_where($this->table, array('id' => $id))->row_array();
        $data['t_penjualan_id'] = $this->t_stnk_bpkb->getTpenjualan($data['detail']['no_so']);
        $data['detail_customer'] = $this->db->get_where('t_stnk_customer', array('t_stnk_id' => $id))->row_array();
        $data['view'] = "t_stnk_bpkb/edit";
        $this->load->view('default', $data);
    }

    public function save() {
        if ($_POST) {
            if ($this->t_stnk_bpkb->save_proses()) {
                $this->session->set_flashdata('success', 'Data Berhasil Di Simpan !');
            } else {
                $this->session->set_flashdata('error', 'Data Gagal Di Simpan !');
            }
            redirect("stnk");
        } else {
            show_404();
        }
    }
    
    function delete($id) {
        $this->main_model->delete($this->table, array('id' => $id), array('stnk_status' => '3'));
        redirect("stnk");
    }

    public function pro_est_date_stnk() {
        $tgl_proses_stnk = $this->input->post('tgl_proses_stnk');
        $tgl2 = date('Y-m-d', strtotime('+14 days', strtotime($tgl_proses_stnk))); //operasi penjumlahan tanggal sebanyak 6 hari
        echo $tgl2;
    }

    public function pro_est_date_bpkb() {
        $tgl_proses_bpkb = $this->input->post('tgl_proses_bpkb');
        $tgl2 = date('Y-m-d', strtotime('+90 days', strtotime($tgl_proses_bpkb))); //operasi penjumlahan tanggal sebanyak 6 hari
        echo $tgl2;
    }

    public function get_sales_order() {
        $query = $this->input->get('query');
        $so_exist = $this->main_model->getMaster('t_stnk', $like = array(), $where = array('stnk_status' => '1'));
        $where_not_in = array();
        foreach ($so_exist as $k => $v) {
            $where_not_in[] = $v['no_so'];
        }
        $last  = array_slice($where_not_in, -1);
        $first = join(', ', array_slice($where_not_in, 0, -1));
        $so_implode  = array_filter(array_merge(array($first), $last), 'strlen');
        
        $data = $this->t_stnk_bpkb->getSO($query,$so_implode)->result_array();
        echo json_encode($data);
    }

    public function get_detail_so($id=null) {
        if($id == null){
            $id = $this->input->post('id');
        }
        $data['penjualan'] = $this->main_model->getMaster('t_penjualan', $like = array(), $where = array('id' => $id));
        $data['customer'] = $this->main_model->getMaster('m_customer', $like = array(), $where = array('no_ktp' => $data['penjualan'][0]['ktp']));
        $data['terima_motor'] = $this->main_model->getMaster('penerimaan_motor', $like = array(), $where = array('nomesin' => $data['penjualan'][0]['nomsn']));
        $data['master_motor'] = $this->main_model->getMaster('m_motor', $like = array(), $where = array('tipe_motor' => $data['terima_motor'][0]['tipe']));
        $data['master_harga_motor'] = $this->main_model->getMaster('t_harga_motor', $like = array(), $where = array('noso' => $data['penjualan'][0]['noso']));
        echo json_encode($data);
    }
    
    public function print_pdf() {
        $data['template'] = array("template" => "t_stnk_bpkb/" . $_GET['template'], "filename" => $_GET['name']);
        $data['list'] = $this->t_stnk_bpkb->getdata($this->table, 0, 1000, $like = array(), $where = array('stnk_status!=' => '3'));
        $this->printpdf->create_pdf($data);
    }

    public function print_excel() {
        $data['template_excel'] = "t_stnk_bpkb/" . $_GET['template'];
        $data['file_name'] = $_GET['name'];
        $data['list'] = $this->t_stnk_bpkb->getdata($this->table, 0, 1000, $like = array(), $where = array('stnk_status!=' => '3'));
        $this->load->view('template_excel', $data);
    }
}
