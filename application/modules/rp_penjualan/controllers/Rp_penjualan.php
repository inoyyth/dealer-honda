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
        $data = array();
        $data['view'] = 'rp_penjualan/main';
        $this->load->view('default', $data);
    }

}
