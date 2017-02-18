<?php

class T_surat_jalan extends MX_Controller {
    //put your code here
    
    var $table = "t_surat_jalan";
    var $table_pdi = "t_pdi";
    
    function __construct() {
        parent::__construct();
        
        $this->load->model(array('M_t_surat_jalan' => 'm_surat_jalan','t_pdi/M_t_pdi' => 't_pdi', 'Datatable_model' => 'm_datatable'));
        $this->load->library(array('encrypt','Printpdf', 'Auth_log'));
        //$this->encrypt->set_cipher(MCRYPT_BLOWFISH);
        
        //set breadcrumb
        $this->breadcrumbs->push('Transaksi Surat Jalan', '/surat-Jalan');
    }
    
    public function index() {
        $data_session = $this->__getSession();
        $config['base_url'] = base_url() . 'surat-jalan-page';
        $config['total_rows'] = $this->main_model->countdata($this->table_pdi, $where = array());
        $config['per_page'] = (!empty($data_session['page']) ? $data_session['page'] : 10);
        $config['uri_segment'] = 2;
        $limit = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $this->pagination->initialize($config);
        $data['paging'] = $this->pagination->create_links();
        $data['data'] = $this->t_pdi->getdata($this->table_pdi, $limit, $config['per_page'], $like = $data_session, $where = array('t_pdi.m_status' => '1'));
        $data['sr_data'] = $data_session;
        $data['view'] = 't_surat_jalan/main';
        $this->load->view('default', $data);
    }
    
    public function __getSession() {
        if ($_POST) {
            return $data = array(
                'page' => set_session_table_search('page', $this->input->get_post('page', TRUE)),
                't_pdi.nosj' => set_session_table_search('nosj', $this->input->get_post('nosj', TRUE)),
                'kdpdi' => set_session_table_search('kdpdi', $this->input->get_post('kdpdi', TRUE)),
                't_pdi.noso' => set_session_table_search('noso', $this->input->get_post('noso', TRUE)),
                'tgl_pdi' => set_session_table_search('tgl_pdi', $this->input->get_post('tgl_pdi', TRUE))
            );
        } else {
            return $data = array(
                'page' => $this->session->userdata('page'),
                'kdpdi' => $this->session->userdata('kdpdi'),
                't_pdi.noso' => $this->session->userdata('noso'),
                'tgl_pdi' => $this->session->userdata('tgl_pdi'),
                't_pdi.nosj' => $this->session->userdata('nosj')
            );
        }
    }
    
    public function print_suratjalan($id){
        $id = decode_url($id);
        $data['cpembelian'] = $this->main_model->get_global_data('cpembelian');
        $data['detail_stnk'] = $this->m_surat_jalan->getStnk($id);
        $data['detail_penjualan'] = $this->db->get_where('t_penjualan', array('noso' => $id))->row_array();
        $data['detail_pdi'] = $this->db->get_where('t_pdi',array('noso'=>$data['detail_penjualan']['noso']))->row_array();
        $data['list_aksesoris'] = $this->m_surat_jalan->getAksesoris($data['detail_pdi']['id']);
        $data['detail_harga'] = $this->db->get_where('t_harga_motor',array('noso'=>$data['detail_penjualan']['noso']))->row_array();
        $data['detail_penerimaan_motor'] = $this->db->get_where('penerimaan_motor',array('nomesin'=>$data['detail_penjualan']['nomsn']))->row_array();
        $data['detail_motor'] = $this->db->get_where('m_motor',array('tipe_motor'=>$data['detail_penerimaan_motor']['tipe']))->row_array();
        $data['detail_customer'] = $this->db->get_where('m_customer',array('no_ktp'=>$data['detail_penjualan']['ktp']))->row_array();
        $data['detail_leasing'] = $this->db->get_where('m_leasing',array('kd_leasing'=>$data['detail_harga']['leasing']))->row_array();

        $this->load->view('t_surat_jalan/print_sj',$data);
    }
    
    public function print_pdf() {
        $data['template'] = array("template" => "t_surat_jalan/" . $_GET['template'], "filename" => $_GET['name']);
        $data['list'] = $this->m_motor->getdata($this->table_pdi, 0, 1000, $like = array(), $where = array('m_status!=' => '3'));
        $this->printpdf->create_pdf($data);
    }

    public function print_excel() {
        $data['template_excel'] = "t_surat_jalan/" . $_GET['template'];
        $data['file_name'] = $_GET['name'];
        $data['list'] = $this->m_motor->getdata($this->table_pdi, 0, 1000, $like = array(), $where = array('m_status!=' => '3'));
        $this->load->view('template_excel', $data);
    }
    
    public function update_status_print(){
        $session = $this->session->userdata('logged_in_admin');
        $noso = $this->input->post('noso');
        $data = array(
            'sj_print_user_id' => $session['id'],
            'sj_print_status' => "2",
            'sj_print_date' => date('Y-m-d')
        );
        $this->db->update('t_pdi',$data,array('noso'=>$noso));
        return true;
    }
}
