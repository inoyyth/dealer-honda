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
        $data_session = $this->__getSession();
        $config['base_url'] = base_url() . 'penjualan-page';
        $config['total_rows'] = $this->main_model->countdata($this->table, $where = array());
        $config['per_page'] = (!empty($data_session['page']) ? $data_session['page'] : 10);
        $config['uri_segment'] = 2;
        $limit = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $this->pagination->initialize($config);
        $data['paging'] = $this->pagination->create_links();
        $data['data'] = $this->m_report_penjualan->getdata($this->table, $limit, $config['per_page'], $like = $data_session, $where = array());
        $data['sr_data'] = $data_session;
        $data['view'] = 'rp_penjualan/main';
        $this->load->view('default', $data);
    }
    
    public function __getSession() {
        if ($_POST) {
            return $data = array(
                'page' => set_session_table_search('page', $this->input->get_post('page', TRUE)),
                'start' => set_session_table_search('start', $this->input->get_post('start', TRUE)),
                'end' => set_session_table_search('end', $this->input->get_post('end', TRUE)),
                't_penjualan.m_status' => set_session_table_search('proses_transaksi', $this->input->get_post('proses_transaksi', TRUE)),
                'tipe' => set_session_table_search('tipe', $this->input->get_post('tipe', TRUE)),
                'cara_pembelian' => set_session_table_search('cara_pembelian', $this->input->get_post('cara_pembelian', TRUE))
            );
        } else {
            return $data = array(
                'page' => $this->session->userdata('page'),
                'start' => $this->session->userdata('page'),
                'end' => $this->session->userdata('end'),
                't_penjualan.m_status' => $this->session->userdata('proses_transaksi'),
                'tipe' => $this->session->userdata('tipe'),
                'cara_pembelian' => $this->session->userdata('cara_pembelian')
            );
        }
    }
    
    public function print_pdf() {
        $data['template'] = array("template" => "rp_penjualan/" . $_GET['template'], "filename" => $_GET['name']);
        $data['list'] = $this->m_report_penjualan->getdata($this->table, 0, 1000, $like = $this->__getSession(), $where = array());
        $this->printpdf->create_pdf($data);
    }

    public function print_excel() {
        $data['template_excel'] = "rp_penjualan/" . $_GET['template'];
        $data['file_name'] = $_GET['name'];
        $data['list'] = $this->m_report_penjualan->getdata($this->table, 0, 1000, $like = $this->__getSession(), $where = array());
        $this->load->view('template_excel', $data);
    }

}
