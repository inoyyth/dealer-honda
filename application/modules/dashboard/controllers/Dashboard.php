<?php

class Dashboard extends MX_Controller {
    /*  $autoload = array(
      'helper'    => array('url', 'form'),
      'libraries' => array('email'),
      ); */

    public function __construct() {
        parent::__construct();
        //set breadcrumb
        $this->load->library('Auth_log');
        $this->breadcrumbs->push('Dashboard', '/home');
    }

    public function index() {
        $data = array();
        $data['view'] = 'dashboard/main';
        $this->load->view('default', $data);
    }

}
