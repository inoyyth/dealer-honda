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
class Cetak_kwitansi_leasing extends MX_Controller {
    //put your code here
    
    var $table = "t_kwitansi_leasing";
    
    function __construct() {
        parent::__construct();
        
        $this->load->model(array('M_t_leasing' => 'leasing_m', 'Datatable_model' => 'm_datatable'));
        //$this->load->library(array('upload', 'encrypt', 'Printpdf', 'Auth_log'));
        
        //set breadcrumb
        $this->breadcrumbs->push('Leasing', '/cetak-kwitansi-leasing');
    }
    
    
    
    public function index(){
        $data['nokwitansi'] = $this->main_model->generate_code($this->table, 'KWT/MKA/FIF/' . romanic_number(date('m')), '/', 6, $date = false, $loop = false);
        $data['codeso'] = $this->main_model->generate_code($this->table, 'KWT/KDS-' . date('Y') . '-' . romanic_number(date('m')), '-', 6, $date = false, $loop = false);
        $this->breadcrumbs->push('Leasing', '/cetak-kwitansi-diskon');
        $data['view'] = "leasing/kwitansi_leasing/print-form";
        $this->load->view('default', $data);
    }
    public function proses_ka(){
        $id = $this->uri->segment(2);
        $extract = str_replace("_","/",$id);
        $isi = $this->db->query('select a.nokwitansi,a.noso,b.harga_otr,b.tanggal,c.nama_customer,d.nomesin,d.norangka,d.tipe,d.warna,d.tahun,f.leasing,f.dp_system,f.diskon,(b.harga_otr - f.dp_system) as tagihan from t_kwitansi_leasing a 
        left join t_penjualan b on b.noso = a.noso
        left join m_customer c on c.no_ktp = b.ktp
        left join penerimaan_motor d on d.nomesin = b.nomsn
        left join m_motor e on e.tipe_motor = d.tipe
        left join t_harga_motor f on f.noso = b.noso
        where a.nokwitansi = "'.$extract.'" AND a.m_status = "1"')->row();

        $data['list'] = $isi;
        $this->load->view('leasing/kwitansi_leasing/print_ka', $data);
        
    }
    
    public function proses_kb(){
        $id = $this->uri->segment(2);
        $extract = str_replace("_","/",$id);
        /*
        echo $extract;
        */
        $isi = $this->db->query('select a.nokwitansi,a.noso,b.harga_otr,b.tanggal,c.nama_customer,d.nomesin,d.norangka,d.tipe,d.warna,d.tahun,f.leasing,f.dp_system,f.diskon,(b.harga_otr - f.dp_system) as tagihan from t_kwitansi_leasing a 
        left join t_penjualan b on b.noso = a.noso
        left join m_customer c on c.no_ktp = b.ktp
        left join penerimaan_motor d on d.nomesin = b.nomsn
        left join m_motor e on e.tipe_motor = d.tipe
        left join t_harga_motor f on f.noso = b.noso
        where a.nokwitansi = "'.$extract.'" AND a.m_status = "1"')->row();
        //var_dump($isi);
        
        $data['list'] = $isi;
        $this->load->view('leasing/kwitansi_leasing/print_kb', $data);
        
    }
    
    public function proses_kc(){
        $id = $this->uri->segment(2);
        $extract = str_replace("_","/",$id);
        /*
        echo $extract;
        */
        $isi = $this->db->query('select a.nokwitansi,a.noso,a.subsidi1,a.subsidi2,g.kalimat_kw_1,g.kalimat_kw_2,b.harga_otr,b.tanggal,c.nama_customer,d.nomesin,d.norangka,d.tipe,d.warna,d.tahun,f.leasing,f.dp_system,f.diskon,(b.harga_otr - f.dp_system) as tagihan from t_kwitansi_leasing a 
        left join t_penjualan b on b.noso = a.noso
        left join m_customer c on c.no_ktp = b.ktp
        left join penerimaan_motor d on d.nomesin = b.nomsn
        left join m_motor e on e.tipe_motor = d.tipe
        left join t_harga_motor f on f.noso = b.noso
        left join m_leasing g on g.kd_leasing = f.leasing
        where a.nokwitansi = "'.$extract.'" AND a.m_status = "1"')->row();
        //var_dump($isi);
        
        $data['list'] = $isi;
        $this->load->view('leasing/kwitansi_leasing/print_kc', $data);
        
    }
    
    public function proses_kc2(){
        $id = $this->uri->segment(2);
        $extract = str_replace("_","/",$id);
        /*
        echo $extract;
        */
        $isi = $this->db->query('select a.nokwitansi,a.noso,a.subsidi1,a.subsidi2,g.kalimat_kw_1,g.kalimat_kw_2,b.harga_otr,b.tanggal,c.nama_customer,d.nomesin,d.norangka,d.tipe,d.warna,d.tahun,f.leasing,f.dp_system,f.diskon,(b.harga_otr - f.dp_system) as tagihan from t_kwitansi_leasing a 
        left join t_penjualan b on b.noso = a.noso
        left join m_customer c on c.no_ktp = b.ktp
        left join penerimaan_motor d on d.nomesin = b.nomsn
        left join m_motor e on e.tipe_motor = d.tipe
        left join t_harga_motor f on f.noso = b.noso
        left join m_leasing g on g.kd_leasing = f.leasing
        where a.nokwitansi = "'.$extract.'" AND a.m_status = "1"')->row();
        //var_dump($isi);
        
        $data['list'] = $isi;
        $this->load->view('leasing/kwitansi_leasing/print_kc2', $data);
        
    }
    
    public function add() {
        $this->breadcrumbs->push('Add', '/kwitansi-diskon');
        $data['codeso'] = $this->main_model->generate_code($this->table, 'KWT/KDS-' . date('Y') . '-' . romanic_number(date('m')), '-', 6, $date = false, $loop = false);
        $data['view'] = "t_kwitansi/kwitansi_diskon/add";
        $this->load->view('default', $data);
    }
    
    public function getSO(){
        $query = $this->input->get('query');
        $data = $this->leasing_m->getNOSO($query);
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
            if ($this->leasing_m->save_kw_leasing()) {
                //$this->session->set_flashdata('success', 'Data Berhasil Di Simpan !');
                echo json_encode("success:true");
            } else {
                //$this->session->set_flashdata('error', 'Data Gagal Di Simpan !');
                echo json_encode("success:false");
            }
            //redirect("cetak-kwitansi-leasing");
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
    
    function load_transaction_by_noso(){
        $noso = $this->input->post('noso');
        
        /*
        $check_noso = $this->mt_kwitansi->getdata_transaction_price_by_noso($noso);
        if($check_noso){
            $result = $check_noso;
        }else{
            $result = $this->mt_kwitansi->getdata_transaction_by_noso($noso);
        }
        */
        $result = $this->leasing_m->getdata_transaction_by_noso($noso);
        
        echo json_encode($result);
    }
    
    
}
