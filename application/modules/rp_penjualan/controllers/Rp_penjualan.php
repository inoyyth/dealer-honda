<?php

class Rp_penjualan extends MX_Controller {

    var $table = "t_penjualan";

    public function __construct() {
        parent::__construct();
        $this->load->model(array('M_rp_penjualan' => 'm_report_penjualan'));
        $this->load->library(array('encrypt', 'Printpdf', 'Auth_log'));
        //set breadcrumb
        $this->breadcrumbs->push('Laporan Penjualan', '/laporan-penjualan');
    }

    public function index() {
        $config['base_url'] = base_url() . 'penjualan-page';
        $config['total_rows'] = $this->main_model->countdata($this->table, $where = array());
        $config['per_page'] = (!empty($data_session['page']) ? $data_session['page'] : 10);
        $config['uri_segment'] = 2;
        $limit = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $this->pagination->initialize($config);
        $data['paging'] = $this->pagination->create_links();
        $data['data'] = $this->m_report_penjualan->getdata($this->table, $limit, $config['per_page'], $like = [], $where = array());
        $data['sr_data'] = $data_session;
        $data['view'] = 'rp_penjualan/main';
        $this->load->view('default', $data);
    }
    
    public function __getSession() {
        if ($_POST) {
            return $data = array(
                'page' => set_session_table_search('page', $this->input->get_post('page', TRUE)),
                't_penjualan' => set_session_table_search('noso', $this->input->get_post('noso', TRUE)),
                'nomsn' => set_session_table_search('nomsn', $this->input->get_post('nomsn', TRUE)),
                'harga_otr' => set_session_table_search('harga_otr', $this->input->get_post('harga_otr', TRUE)),
                'tipe' => set_session_table_search('tipe', $this->input->get_post('tipe', TRUE))
            );
        } else {
            return $data = array(
                'page' => $this->session->userdata('page'),
                'no_so' => $this->session->userdata('noso'),
                'nomsn' => $this->session->userdata('nomsn'),
                'harga_otr' => $this->session->userdata('harga_otr'),
                'tipe' => $this->session->userdata('tipe')
            );
        }
    }

}
