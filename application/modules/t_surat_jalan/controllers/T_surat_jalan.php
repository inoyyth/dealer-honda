<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of T_surat_jalan
 *
 * @author Langit-Biru
 */
class T_surat_jalan extends MX_Controller {
    //put your code here
    function __construct() {
        parent::__construct();
        
        $this->load->model(array('M_t_surat_jalan' => 'mt_surat_jalan', 'Datatable_model' => 'm_datatable'));
        $this->load->library(array('upload', 'encrypt', 'Printpdf', 'Auth_log'));
        
        //set breadcrumb
        $this->breadcrumbs->push('Transaksi Surat Jalan', '/Surat-Jalan');
    }
    
    public function add() {
        $this->breadcrumbs->push('Add', '/Surat-Jalan');
        
        $data['view'] = "t_surat_jalan/add";
        $this->load->view('default', $data);
    }
}
