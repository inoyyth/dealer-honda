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
        $data_session_where = $this->__getSessionWhere();
        $config['base_url'] = base_url() . 'penjualan-page';
        $config['total_rows'] = $this->main_model->countdata($this->table, $where = $data_session_where);
        $config['per_page'] = (!empty($data_session['page']) ? $data_session['page'] : 10);
        $config['uri_segment'] = 2;
        $limit = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $this->pagination->initialize($config);
        $data['paging'] = $this->pagination->create_links();
        $data['data'] = $this->m_report_penjualan->getdata($this->table, $limit, $config['per_page'], $like = $data_session, $where = $data_session_where);
        $data['leasing'] = $this->db->get_where('m_leasing',array('status_leasing'=>'1'))->result_array();
        $data['sr_data'] = array_merge($data_session,$data_session_where);
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
    
    private function __getSessionWhere() {
        if($_POST) {
            return $data = array(
               't_harga_motor.leasing' => set_session_table_search('leasing', $this->input->get_post('leasing', TRUE))
            );
        } else {
            return $data = array(
                't_harga_motor.leasing' => $this->session->userdata('leasing')
            );
        }
    }

    public function transaksi_detail($noso) {
        $data['detail_penjualan'] = $this->db->get_where('t_penjualan', array('noso' => decode_url($noso)))->row_array();
        $data['detail_penerimaan_motor'] = $this->m_report_penjualan->getPenerimaanMotor($data['detail_penjualan']['nomsn'])->row_array();
        $data['detail_motor'] = $this->db->get_where('m_motor', array('tipe_motor' => $data['detail_penerimaan_motor']['tipe']))->row_array();
        $data['detail_pdi'] = $this->db->get_where('t_pdi', array('noso' => $data['detail_penjualan']['noso']))->row_array();
        $data['list_aksesoris'] = $this->m_report_penjualan->getAksesoris($data['detail_pdi']['id']);
        $data['detail_harga'] = $this->db->get_where('t_harga_motor', array('noso' => $data['detail_penjualan']['noso']))->row_array();
        $data['detail_customer'] = $this->db->get_where('m_customer', array('no_ktp' => $data['detail_penjualan']['ktp']))->row_array();
        $data['detail_leasing'] = $this->db->get_where('m_leasing', array('kd_leasing' => $data['detail_harga']['leasing']))->row_array();
        $data['list_dp'] = $this->db->get_where('t_pembayaran', array('noso' => $data['detail_penjualan']['noso']))->result_array();
        $data['view'] = 'rp_penjualan/transaksi_detail';
        $this->load->view('default', $data);
    }

    public function print_transaksi_detail($noso) {
        
        $data['detail_penjualan'] = $this->db->get_where('t_penjualan', array('noso' => decode_url($noso)))->row_array();
        $data['detail_penerimaan_motor'] = $this->m_report_penjualan->getPenerimaanMotor($data['detail_penjualan']['nomsn'])->row_array();
        $data['detail_motor'] = $this->db->get_where('m_motor', array('tipe_motor' => $data['detail_penerimaan_motor']['tipe']))->row_array();
        $data['detail_pdi'] = $this->db->get_where('t_pdi', array('noso' => $data['detail_penjualan']['noso']))->row_array();
        $data['list_aksesoris'] = $this->m_report_penjualan->getAksesoris($data['detail_pdi']['id']);
        $data['detail_harga'] = $this->db->get_where('t_harga_motor', array('noso' => $data['detail_penjualan']['noso']))->row_array();
        $data['detail_customer'] = $this->db->get_where('m_customer', array('no_ktp' => $data['detail_penjualan']['ktp']))->row_array();
        $data['detail_leasing'] = $this->db->get_where('m_leasing', array('kd_leasing' => $data['detail_harga']['leasing']))->row_array();
        $data['list_dp'] = $this->db->get_where('t_pembayaran', array('noso' => $data['detail_penjualan']['noso']))->result_array();
        $this->load->view('rp_penjualan/print_transaksi_detail', $data);
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
