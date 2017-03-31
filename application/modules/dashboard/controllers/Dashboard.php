<?php

class Dashboard extends MX_Controller {
    /*  $autoload = array(
      'helper'    => array('url', 'form'),
      'libraries' => array('email'),
      ); */

    // var $table = "t_stnk";

    public function __construct() {
        parent::__construct();
        //set breadcrumb
        $this->load->library('Auth_log');
        $this->breadcrumbs->push('Dashboard', '/home');

        $this->load->model('m_dashboard');
    }

    public function index() {
        // $stnk_selesai = $this->m_dashboard->stnk_selesai();
        $data = array(
            'count_all'             => $this->m_dashboard->count_all(),
            'stnk_selesai'          => $this->m_dashboard->stnk_selesai(),
            'bpkb_selesai'          => $this->m_dashboard->bpkb_selesai(),
            'pembayaran_konsumen'   => $this->m_dashboard->pembayaran_konsumen(),
            'tagihan_leasing'       => $this->m_dashboard->tagihan_leasing()
            );
        $data['view'] = 'dashboard/main';
        $this->load->view('default', $data);
    }

}
