<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of t_pdi
 *
 * @author Langit-Biru
 */
class t_pdi extends MX_Controller {
    //put your code here
    var $table = "t_pdi";
    function __construct() {
        parent::__construct();
        
        $this->load->model(array('M_t_pdi' => 't_pdi', 'Datatable_model' => 'm_datatable'));
        $this->load->library(array('upload', 'encrypt', 'Printpdf', 'Auth_log'));
        
        //set breadcrumb
        $this->breadcrumbs->push('Transaksi PDI', '/pdi');
    }
    
    public function add() {
        $this->breadcrumbs->push('Add', '/pdi');
        //$data['acs_aki'] = $this->t_pdi->get_master_aksesoris('aki');
        $data['gudang'] = $this->main_model->getMaster('m_gudang', $like=array(), $where=array('status_gudang'=>'1'));
        $data['codepdi'] = $this->main_model->generate_code($this->table, 'PDI-' . date('Y') . '/' . romanic_number(date('m')), '/', 6, $date = false, $loop = false);
        $data['view'] = "t_pdi/add";
        $this->load->view('default', $data);
    }
    
    function save() {
        if ($_POST) {
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
    
    public function get_sales_order(){
        $query = $this->input->get('query');
        $so_exist = $this->main_model->getMaster('t_pdi', $like=array(), $where=array('m_status'=>'1'));
        $where_not_in = array();
        foreach($so_exist as $k=>$v){
            $where_not_in[] = $v['noso'];
        }
        $so_implode = "'" . implode("', '", $where_not_in) . "'";
        $data = $this->db->query("SELECT * FROM t_penjualan WHERE noso LIKE '%$query%' AND m_status='1' AND noso NOT IN ($so_implode)")->result_array();
        echo json_encode($data);
    }
    
    public function get_detail_so(){
        $id = $this->input->post('id');
        $data['penjualan'] = $this->main_model->getMaster('t_penjualan', $like=array(), $where=array('id'=>$id));
        $data['customer'] = $this->main_model->getMaster('m_customer', $like=array(), $where=array('no_ktp'=>$data['penjualan'][0]['ktp']));
        $data['terima_motor'] = $this->main_model->getMaster('penerimaan_motor', $like=array(), $where=array('nomesin'=>$data['penjualan'][0]['nomsn']));
        $data['master_motor'] = $this->main_model->getMaster('m_motor', $like=array(), $where=array('tipe_motor'=>$data['terima_motor'][0]['tipe']));
        echo json_encode($data);
    }
    
    public function get_aki(){
        $gudang = $this->input->post('gudang');
        $result = $this->t_pdi->get_master_aksesoris(1,$gudang);
        echo "<option value='0'>Not Available</option>";
        foreach($result as $k=>$v){
            if ( $v['total'] > 0 ){
                echo "<option value='" . $v['aksesoris_id'] . "'>" . $v['aksesoris'] ." (" . $v['total'] . " pcs)</option>";
            }
        }
    }
    
    public function get_spion(){
        $gudang = $this->input->post('gudang');
        $result = $this->t_pdi->get_master_aksesoris(2,$gudang);
        echo "<option value='0'>Not Available</option>";
        foreach($result as $k=>$v){
            if ( $v['total'] > 0 ){
                echo "<option value='" . $v['aksesoris_id'] . "'>" . $v['aksesoris'] ." (" . $v['total'] . " pcs)</option>";
            }
        }
    }
    
    public function get_helm(){
        $gudang = $this->input->post('gudang');
        $result = $this->t_pdi->get_master_aksesoris(3,$gudang);
        echo "<option value='0'>Not Available</option>";
        foreach($result as $k=>$v){
            if ( $v['total'] > 0 ){
                echo "<option value='" . $v['aksesoris_id'] . "'>" . $v['aksesoris'] ." (" . $v['total'] . " pcs)</option>";
            }
        }
    }
    
    public function get_toolkit(){
        $gudang = $this->input->post('gudang');
        $result = $this->t_pdi->get_master_aksesoris(6,$gudang);
        echo "<option value='0'>Not Available</option>";
        foreach($result as $k=>$v){
            if ( $v['total'] > 0 ){
                echo "<option value='" . $v['aksesoris_id'] . "'>" . $v['aksesoris'] ." (" . $v['total'] . " pcs)</option>";
            }
        }
    }
    
    public function get_rumah_plat(){
        $gudang = $this->input->post('gudang');
        $result = $this->t_pdi->get_master_aksesoris(7,$gudang);
        echo "<option value='0'>Not Available</option>";
        foreach($result as $k=>$v){
            if ( $v['total'] > 0 ){
                echo "<option value='" . $v['aksesoris_id'] . "'>" . $v['aksesoris'] ." (" . $v['total'] . " pcs)</option>";
            }
        }
    }
    
    public function get_jacket(){
        $gudang = $this->input->post('gudang');
        $result = $this->t_pdi->get_master_aksesoris(8,$gudang);
        echo "<option value='0'>Not Available</option>";
        foreach($result as $k=>$v){
            if ( $v['total'] > 0 ){
                echo "<option value='" . $v['aksesoris_id'] . "'>" . $v['aksesoris'] ." (" . $v['total'] . " pcs)</option>";
            }
        }
    }
    
    public function get_jas_hujan(){
        $gudang = $this->input->post('gudang');
        $result = $this->t_pdi->get_master_aksesoris(9,$gudang);
        echo "<option value='0'>Not Available</option>";
        foreach($result as $k=>$v){
            if ( $v['total'] > 0 ){
                echo "<option value='" . $v['aksesoris_id'] . "'>" . $v['aksesoris'] ." (" . $v['total'] . " pcs)</option>";
            }
        }
    }   
}

