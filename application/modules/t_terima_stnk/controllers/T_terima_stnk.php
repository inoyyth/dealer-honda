<?php

class T_terima_stnk extends MX_Controller {
    
    var $table = "t_terima_stnk";

    function __construct() {
        parent::__construct();
        $this->load->model(array('M_t_terima_stnk' => 't_terima_stnk'));
        $this->load->library(array('encrypt', 'Printpdf', 'Auth_log'));
        //set breadcrumb
        $this->breadcrumbs->push('Tanda Terima STNK & BPKB', '/t_terima_stnk');
    }
    
    public function index() {
        $data_session = $this->__getSession();
        $config['base_url'] = base_url() . 'terima-stnk-page';
        $config['total_rows'] = $this->main_model->countdata($this->table, $where = array());
        $config['per_page'] = (!empty($data_session['page']) ? $data_session['page'] : 10);
        $config['uri_segment'] = 2;
        $limit = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $this->pagination->initialize($config);
        $data['paging'] = $this->pagination->create_links();
        $data['data'] = $this->t_terima_stnk->getdata($this->table, $limit, $config['per_page'], $like = $data_session, $where = array('t_terima_status!=' => '3'));
        $data['sr_data'] = $data_session;
        $data['view'] = 't_terima_stnk/main';
        $this->load->view('default', $data);
    }
    
    public function __getSession() {
        if ($_POST) {
            return $data = array(
                'page' => set_session_table_search('page', $this->input->get_post('page', TRUE)),
                'no_process' => set_session_table_search('no_process', $this->input->get_post('no_process', TRUE)),
                'nama_birojasa' => set_session_table_search('nama_birojasa', $this->input->get_post('nama_birojasa', TRUE)),
                't_terima_no_stnk' => set_session_table_search('t_terima_no_stnk', $this->input->get_post('t_terima_no_stnk', TRUE)),
                't_terima_no_polisi' => set_session_table_search('t_terima_no_polisi', $this->input->get_post('t_terima_no_polisi', TRUE)),
                't_terima_no_bpkb' => set_session_table_search('t_terima_no_bpkb', $this->input->get_post('t_terima_no_bpkb', TRUE))
            );
        } else {
            return $data = array(
                'page' => $this->session->userdata('page'),
                'no_process' => $this->session->userdata('no_process'),
                'nama_birojasa' => $this->session->userdata('nama_birojasa'),
                't_terima_no_stnk' => $this->session->userdata('t_terima_no_stnk'),
                't_terima_no_polisi' => $this->session->userdata('t_terima_no_polisi'),
                't_terima_no_bpkb' => $this->session->userdata('t_terima_no_bpkb')
            );
        }
    }
    
    public function add() {
        $this->breadcrumbs->push('Add', '/t_terima_stnk');
        $data['birojasa'] = $this->main_model->getMaster('m_biro_jasa', $like = array(), $where = array('status_birojasa' => '1'));
        $data['view'] = "t_terima_stnk/add";
        $this->load->view('default', $data);
    }
    
    public function edit($id) {
        $this->breadcrumbs->push('Edit', '/t_terima_stnk');
        $data['detail'] = $this->db->get_where($this->table, array('id' => $id))->row_array();
        $data['birojasa'] = $this->main_model->getMaster('m_biro_jasa', $like = array(), $where = array('status_birojasa' => '1'));
        $data['view'] = "t_terima_stnk/edit";
        $this->load->view('default', $data);
    }
    
    public function save() {
        if ($_POST) {
            if ($this->t_terima_stnk->save_proses()) {
                $this->session->set_flashdata('success', 'Data Berhasil Di Simpan !');
            } else {
                $this->session->set_flashdata('error', 'Data Gagal Di Simpan !');
            }
            redirect("terima-stnk");
        } else {
            show_404();
        }
    }
    
    function delete($id) {
        $this->main_model->delete($this->table, array('id' => $id), array('t_terima_status' => '3'));
        redirect("terima-stnk");
    }
    
    public function get_no_process(){
        $query = $this->input->get('query');
        $so_exist = $this->main_model->getMaster($this->table, $like = array(), $where = array('t_terima_status' => '1'));
        $where_not_in = array();
        foreach ($so_exist as $k => $v) {
            $where_not_in[] = $v['t_stnk_id'];
        }
        $so_implode = "'" . implode("', '", $where_not_in) . "'";
        $data = $this->db->query("SELECT * FROM t_stnk WHERE no_process LIKE '%$query%' AND stnk_status='1' AND id NOT IN ($so_implode)")->result_array();
        echo json_encode($data);
    }
    
    public function get_detail_so($id=null) {
        if($id == null){
            $id = $this->input->post('id');
        }
        $data['stnk'] = $this->main_model->getMaster('t_stnk', $like = array(), $where = array('id' => $id));
        $data['penjualan'] = $this->main_model->getMaster('t_penjualan', $like = array(), $where = array('noso' => $data['stnk'][0]['no_so']));
        $data['customer'] = $this->main_model->getMaster('m_customer', $like = array(), $where = array('no_ktp' => $data['penjualan'][0]['ktp']));
        $data['terima_motor'] = $this->main_model->getMaster('penerimaan_motor', $like = array(), $where = array('nomesin' => $data['penjualan'][0]['nomsn']));
        $data['master_motor'] = $this->main_model->getMaster('m_motor', $like = array(), $where = array('tipe_motor' => $data['terima_motor'][0]['tipe']));
        $data['master_harga_motor'] = $this->main_model->getMaster('t_harga_motor', $like = array(), $where = array('noso' => $data['penjualan'][0]['noso']));
        echo json_encode($data);
    }
}
