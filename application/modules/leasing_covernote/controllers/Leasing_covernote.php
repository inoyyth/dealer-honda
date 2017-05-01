<?php

class Leasing_covernote extends MX_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array('M_leasing_covernote' => 'm_leasing_covernote','Datatable_model' => 'm_datatable','t_void/M_t_void' => 't_void'));
        $this->load->library(array('upload', 'encrypt', 'Printpdf', 'Auth_log'));
        //set breadcrumb
        $this->breadcrumbs->push('Surat Pernyataan', '/leasing_covernote');
    }

    public function index() {
        $data['view'] = 'leasing_covernote/edit';
        $this->load->view('default', $data);
    }

    function save() {
        if ($_POST) {
            if ($this->m_leasing_covernote->save()) {
                $this->session->set_flashdata('success', 'Data Berhasil Di Simpan !');
            } else {
                $this->session->set_flashdata('error', 'Data Gagal Di Simpan !');
            }
            redirect("owner");
        } else {
            show_404();
        }
    }
    
    public function get_so_list() {
        $table = 't_penjualan';

        $join = array(
            array('table' => 't_pdi', 'where' => 't_penjualan.noso=t_pdi.noso', 'join' => 'left'),
            array('table' => 'penerimaan_motor', 'where' => 't_penjualan.nomsn=penerimaan_motor.nomesin', 'join' => 'left'),
            array('table' => 't_harga_motor', 'where' => 't_penjualan.noso=t_harga_motor.noso', 'join' => 'left')
        );

        $where = array('t_penjualan.m_status' => '1');

        $column_search = array(null, 't_penjualan.id', 't_penjualan.noso', 't_pdi.kdpdi', 't_pdi.nosj', 't_penjualan.nomsn', 'penerimaan_motor.norangka');
        $column_order = array('id', 'noso', 'kdpdi', 'nosj', 'nomsn', 'norangka');
        $list = $this->m_datatable->get_datatables($table, $column_order, $column_search, $order = array('id' => 'asc'), $where, $join);
        $data = array();
        $no = $_POST['start'];

        foreach ($list as $result) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $result->noso;
            $row[] = ($result->kdpdi != null ? $result->kdpdi : "");
            $row[] = ($result->nosj != null ? $result->nosj : "");
            $row[] = $result->nomsn;
            $row[] = $result->norangka;
            $row[] = "<button class='btn btn-sm btn-warning text-center' onclick=selectList(" . $result->id . ",'$result->noso')>Select</button>";

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->m_datatable->count_all($table),
            "recordsFiltered" => $this->m_datatable->count_filtered($table, $column_order, $column_search, $order = array('id' => 'asc'), $where, $join),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }
    
    public function load_transaksi_detail($id) {
        $data['detail_penjualan'] = $this->db->get_where('t_penjualan', array('id' => $id))->row_array();
        $data['detail_penerimaan_motor'] = $this->t_void->getPenerimaanMotor($data['detail_penjualan']['nomsn'])->row_array();
        $data['detail_motor'] = $this->db->get_where('m_motor', array('tipe_motor' => $data['detail_penerimaan_motor']['tipe']))->row_array();
        $data['detail_harga'] = $this->db->get_where('t_harga_motor', array('noso' => $data['detail_penjualan']['noso']))->row_array();
        $data['detail_customer'] = $this->db->get_where('m_customer', array('no_ktp' => $data['detail_penjualan']['ktp']))->row_array();
        $data['detail_leasing'] = $this->db->get_where('m_leasing', array('kd_leasing' => $data['detail_harga']['leasing']))->row_array();
        $data['stnk_bpkb'] = $this->db->get_where('t_stnk', array('no_so' => $data['detail_penjualan']['noso']))->row_array();
        $data['stnk_bpkb_customer'] = $this->db->get_where('t_stnk_customer', array('t_stnk_id' => $data['stnk_bpkb']['id']))->row_array();
        //log_message('debug',print_r($data['detail_penjualan'],TRUE));
        $this->load->view('leasing_covernote/detail_transaksi', $data);
    }
    
    public function print_covernotex($type,$so){
        $data['detail_penjualan'] = $this->db->get_where('t_penjualan', array('noso' => decode_url($so)))->row_array();
        $data['detail_penerimaan_motor'] = $this->t_void->getPenerimaanMotor($data['detail_penjualan']['nomsn'])->row_array();
        $data['detail_motor'] = $this->db->get_where('m_motor', array('tipe_motor' => $data['detail_penerimaan_motor']['tipe']))->row_array();
        $data['detail_owner'] = $this->db->get_where('m_owner', array('id' => 1))->row_array();
        $data['stnk_bpkb'] = $this->db->get_where('t_stnk', array('no_so' => decode_url($so)))->row_array();
        $data['stnk_bpkb_customer'] = $this->db->get_where('t_stnk_customer', array('t_stnk_id' => $data['stnk_bpkb']['id']))->row_array();
        //log_message('debug',print_r($data['detail_penjualan'],TRUE));
        $this->load->view('leasing_covernote/covernote_print_'.$type,$data);
    }

}
