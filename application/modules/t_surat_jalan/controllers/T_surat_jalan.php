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
    
    var $table = "t_surat_jalan";
    
    function __construct() {
        parent::__construct();
        
        $this->load->model(array('M_t_surat_jalan' => 'mt_surat_jalan', 'Datatable_model' => 'm_datatable'));
        $this->load->library(array('upload', 'encrypt', 'Printpdf', 'Auth_log'));
        
        //set breadcrumb
        $this->breadcrumbs->push('Transaksi Surat Jalan', '/Surat-Jalan');
    }
    
    public function add() {
        
        $this->breadcrumbs->push('Add', '/surat-jalan');
        //$data['codeso'] = $this->main_model->generate_code($this->table, 'SJ' . date('dmY') , '-', 6, $date = false, $loop = false);
        $data['codeso'] = "SJL000118017";
        //var_dump($data['codeso']);
        //exit();
        $data['view'] = "t_surat_jalan/add";
        $this->load->view('default', $data);
        
        
    }
    
      public function getSO(){
        $query = $this->input->get('query');
        $data = $this->mt_surat_jalan->getNOSO($query);
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
            if ($this->t_pdi->save()) {
                $this->session->set_flashdata('success', 'Data Berhasil Di Simpan !');
            } else {
                $this->session->set_flashdata('error', 'Data Gagal Di Simpan !');
            }
            redirect("pdi");
        } else {
            show_404();
        }
        
    }
    
    
     public function printout() {
        //var_dump($_POST);
        
        $id = $this->uri->segment(2);
        $cek = str_replace("_","/",$id);
        $data['list'] = $this->mt_surat_jalan->get_data_print($cek);
        //var_dump($data['list']);
        $data['template'] = array("template" => "t_surat_jalan/" . $_GET['template'], "filename" => $_GET['name']);
        //$data['list'] = $this->M_t_kwitansi->getdata($this->table, 0, 1000, $like = array());
        $this->load->view('t_surat_jalan/table_html', $data);
        //$this->printpdf->create_pdf($data);
    }
    
     
}
