<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of T_kwitansi_diskon
 *
 * @author Langit-Biru
 */
class T_kwitansi_diskon extends MX_Controller {
    //put your code here
    function __construct() {
        parent::__construct();
        
        $this->load->model(array('M_t_kwitansi' => 't_kwitansi', 'Datatable_model' => 'm_datatable'));
        $this->load->library(array('upload', 'encrypt', 'Printpdf', 'Auth_log'));
        
        //set breadcrumb
        $this->breadcrumbs->push('Transaksi Kwitansi', '/kwitansi-diskon');
    }
    
    public function add() {
        $this->breadcrumbs->push('Add', '/kwitansi-diskon');
        
        $data['view'] = "t_kwitansi/kwitansi_diskon/add";
        $this->load->view('default', $data);
    }
}
