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
    
    public function index() {
        $data_session = $this->__getSession();
        $config['base_url'] = base_url() . 'pdi-page';
        $config['total_rows'] = $this->main_model->countdata($this->table, $where = array());
        $config['per_page'] = (!empty($data_session['page']) ? $data_session['page'] : 10);
        $config['uri_segment'] = 2;
        $limit = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $this->pagination->initialize($config);
        $data['paging'] = $this->pagination->create_links();
        $data['data'] = $this->t_pdi->getdata($this->table, $limit, $config['per_page'], $like = $data_session, $where = array('t_pdi.m_status' => '1'));
        $data['sr_data'] = $data_session;
        $data['view'] = 't_pdi/main';
        $this->load->view('default', $data);
    }
    
    public function __getSession() {
        if ($_POST) {
            return $data = array(
                'page' => set_session_table_search('page', $this->input->get_post('page', TRUE)),
                'kdpdi' => set_session_table_search('kdpdi', $this->input->get_post('kdpdi', TRUE)),
                't_pdi.noso' => set_session_table_search('noso', $this->input->get_post('noso', TRUE)),
                'tgl_pdi' => set_session_table_search('tgl_pdi', $this->input->get_post('tgl_pdi', TRUE)),
                'pic' => set_session_table_search('pic', $this->input->get_post('pic', TRUE))
            );
        } else {
            return $data = array(
                'page' => $this->session->userdata('page'),
                'kdpdi' => $this->session->userdata('kdpdi'),
                't_pdi.noso' => $this->session->userdata('noso'),
                'tgl_pdi' => $this->session->userdata('tgl_pdi'),
                'pic' => $this->session->userdata('pic')
            );
        }
    }
    
    public function add() {
        $this->breadcrumbs->push('Add', '/pdi');
        $data['gudang'] = $this->main_model->getMaster('m_gudang', $like=array(), $where=array('status_gudang'=>'1'));
        $data['codepdi'] = $this->main_model->generate_code($this->table, 'PDI-' . date('Y') . '/' . romanic_number(date('m')), '/', 6, $date = false, $loop = false, 'id', 'kdpdi');
        $data['codesj'] = $this->main_model->generate_code($this->table, 'SJ-' . date('Y') . '/' . romanic_number(date('m')), '/', 6, $date = false, $loop = false, 'id', 'nosj');
        $data['view'] = "t_pdi/add";
        $this->load->view('default', $data);
    }
    
    public function edit($id) {
        $this->breadcrumbs->push('Add', '/pdi');
        $data['detail'] = $this->db->get_where($this->table, array('id' => $id))->row_array();
        $data['sales_order'] = $this->db->query("SELECT t_penjualan.noso,t_penjualan.tanggal,m_customer.nama_customer,penerimaan_motor.nomesin,penerimaan_motor.norangka,penerimaan_motor.tipe,penerimaan_motor.warna FROM t_penjualan LEFT JOIN m_customer ON t_penjualan.ktp=m_customer.no_ktp LEFT JOIN penerimaan_motor ON penerimaan_motor.nomesin=t_penjualan.nomsn WHERE t_penjualan.noso='".$data['detail']['noso']."'")->row_array();
        $data['gudang'] = $this->main_model->getMaster('m_gudang', $like=array(), $where=array('status_gudang'=>'1'));
        $data['aki'] = $this->__getAksesoris(1,$data['detail']['gudang_id']);
        $data['spion'] = $this->__getAksesoris(2,$data['detail']['gudang_id']);
        $data['helm'] = $this->__getAksesoris(3,$data['detail']['gudang_id']);
        $data['toolkit'] = $this->__getAksesoris(6,$data['detail']['gudang_id']);
        $data['rumah_plat'] = $this->__getAksesoris(7,$data['detail']['gudang_id']);
        $data['jacket'] = $this->__getAksesoris(8,$data['detail']['gudang_id']);
        $data['jas_hujan'] = $this->__getAksesoris(9,$data['detail']['gudang_id']);
        $data['pdi_detail'] = $this->db->query("SELECT aksesoris_id FROM t_pdi_detail WHERE pdi_id='".$id."' ORDER BY id ASC")->result_array();
        $data['view'] = "t_pdi/edit";
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
        
        $last  = array_slice($where_not_in, -1);
        $first = join(', ', array_slice($where_not_in, 0, -1));
        $so_implode  = array_filter(array_merge(array($first), $last), 'strlen');

        $data = $this->t_pdi->getSO($query,$so_implode)->result_array();
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
    
    public function __getAksesoris($aksesoris,$gudang){
        return $this->t_pdi->get_master_aksesoris($aksesoris,$gudang);
    }
}

