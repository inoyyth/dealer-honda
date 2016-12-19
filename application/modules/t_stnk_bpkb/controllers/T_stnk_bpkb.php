<?php
date_default_timezone_get('Asia/Jakarta');
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
class T_stnk_bpkb extends MX_Controller {
    //put your code here
    var $table = "t_stnk_bpkb";
    function __construct() {
        parent::__construct();
        
        $this->load->model(array('M_t_stnk_bpkb' => 't_stnk_bpkb', 'Datatable_model' => 'm_datatable'));
        $this->load->library(array('upload', 'encrypt', 'Printpdf', 'Auth_log'));
        
        //set breadcrumb
        $this->breadcrumbs->push('Transaksi STNK & BPKB', '/stnk-bpkb');
    }
    
    public function add() {
        $this->breadcrumbs->push('Add', '/t_stnk_bpkb');
        $data['codeso'] = $this->main_model->generate_code($this->table, 'SB-' . date('Y') .'-'. date('m') , '-', 6, $date = false, $loop = false);
        $data['view'] = "t_stnk_bpkb/add";
        $this->load->view('default', $data);
    }
    
    public function getSO(){
        $query = $this->input->get('query');
        $data = $this->t_stnk_bpkb->getNOSO($query);
        //echo $this->db->last_query();
        echo json_encode($data);
    }
    
    public function getNOPRO(){
        $hasil = $this->input->get('hasil');
        $data = $this->t_stnk_bpkb->getNOPRO($hasil);
        //echo $this->db->last_query();
        echo json_encode($data);
    }
    
    public function save_proses(){
        //echo "hello";
         if ($_POST) {
            //var_dump($_POST);
            //exit();
            if ($this->t_stnk_bpkb->save_proses()) {
                
                $this->session->set_flashdata('success', 'Data Berhasil Di Simpan !');
            } else {
                $this->session->set_flashdata('error', 'Data Gagal Di Simpan !');
            }
            redirect("stnk");
        } else {
            show_404();
        }
    }
    
    public function save_tt(){
        if ($_POST) {
            //var_dump($_POST);
            //exit();
            if ($this->t_stnk_bpkb->save_tt()) {
                
                $this->session->set_flashdata('success', 'Data Berhasil Di Simpan !');
            } else {
                $this->session->set_flashdata('error', 'Data Gagal Di Simpan !');
            }
            redirect("stnk");
        } else {
            show_404();
        }
    }
    
    public function pro_est_date_stnk(){
        $tgl_proses_stnk = $this->input->post('tgl_proses_stnk');       
   
        //$tgl1 = "2016-12-16";// pendefinisian tanggal awal
        $tgl2 = date('Y-m-d', strtotime('+14 days', strtotime($tgl_proses_stnk))); //operasi penjumlahan tanggal sebanyak 6 hari
        echo $tgl2;
        
        //$tambah_tanggal = mktime(0, 0, 0, date('m'), date('d') + 14, date('Y')); 
        //$tambah = date($tgl_proses_stnk,$tambah_tanggal);

        //echo $tambah;
    }
    
    function terbilang(){
        $nominal = $this->input->post('nominal');
        $terbilang = terbilang($nominal);
        echo $terbilang;
    }
    
   public function pro_est_date_bpkb(){
        $tgl_proses_bpkb = $this->input->post('tgl_proses_bpkb');       
   
        //$tgl1 = "2016-12-16";// pendefinisian tanggal awal
        $tgl2 = date('Y-m-d', strtotime('+90 days', strtotime($tgl_proses_bpkb))); //operasi penjumlahan tanggal sebanyak 6 hari
        echo $tgl2;
        
        //$tambah_tanggal = mktime(0, 0, 0, date('m'), date('d') + 14, date('Y')); 
        //$tambah = date($tgl_proses_stnk,$tambah_tanggal);

        //echo $tambah;
    }
    
}
