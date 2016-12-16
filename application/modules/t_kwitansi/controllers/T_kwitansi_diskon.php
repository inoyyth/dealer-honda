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
    
    var $table = "t_kwitansi_diskon";
    
    function __construct() {
        parent::__construct();
        
        $this->load->model(array('M_t_kwitansi' => 't_kwitansi', 'Datatable_model' => 'm_datatable'));
        $this->load->library(array('upload', 'encrypt', 'Printpdf', 'Auth_log'));
        
        //set breadcrumb
        $this->breadcrumbs->push('Transaksi Kwitansi', '/kwitansi-diskon');
    }
    
    public function add() {
        $this->breadcrumbs->push('Add', '/kwitansi-diskon');
        $data['codeso'] = $this->main_model->generate_code($this->table, 'KWT/KDS-' . date('Y') . '-' . romanic_number(date('m')), '-', 6, $date = false, $loop = false);
        $data['view'] = "t_kwitansi/kwitansi_diskon/add";
        $this->load->view('default', $data);
    }
    
    public function getSO(){
        $query = $this->input->get('query');
        $data = $this->t_kwitansi->getNOSO($query);
        //echo $this->db->last_query();
        echo json_encode($data);
    }
    
    public function save() {
        //print_r($_POST);die();
       
        //var_dump($_POST);
       // exit();
        if ($_POST) {
            //var_dump($_POST);
            //exit();
            if ($this->t_kwitansi->save_diskon()) {
                $this->session->set_flashdata('success', 'Data Berhasil Di Simpan !');
            } else {
                $this->session->set_flashdata('error', 'Data Gagal Di Simpan !');
            }
            redirect("kwitansi-diskon-tambah");
        } else {
            show_404();
        }
        
    }
    
     public function printout() {
        //var_dump($_POST);
        
        $id = $this->uri->segment(2);
        $cek = str_replace("_","/",$id);
        $data['list'] = $this->t_kwitansi->get_data_print($cek);
        //var_dump($data['list']);
        $data['template'] = array("template" => "t_kwitansi/kwitansi_diskon/" . $_GET['template'], "filename" => $_GET['name']);
        //$data['list'] = $this->M_t_kwitansi->getdata($this->table, 0, 1000, $like = array());
         $this->load->view('t_kwitansi/kwitansi_diskon/table_html', $data);
        //$this->printpdf->create_pdf($data);
    }
    
    
}
