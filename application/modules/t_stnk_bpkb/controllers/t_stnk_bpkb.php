<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of t_stnk_bpkb
 *
 * @author Langit-Biru
 */
class t_stnk_bpkb extends MX_Controller {
    //put your code here
    
    function __construct() {
        parent::__construct();
        
        $this->load->model(array('M_t_stnk_bpkb' => 't_stnk_bpkb', 'Datatable_model' => 'm_datatable'));
        $this->load->library(array('upload', 'encrypt', 'Printpdf', 'Auth_log'));
        
        //set breadcrumb
        $this->breadcrumbs->push('Transaksi STNK & BPKB', '/stnk-bpkb');
    }
    
    public function add() {
        $this->breadcrumbs->push('Add', '/t_stnk_bpkb');
        
        $data['view'] = "t_stnk_bpkb/add";
        $this->load->view('default', $data);
    }
}
