<?php

class Rekap_tagihan extends MX_Controller {
    //put your code here
    
    var $table = "rekap_tagihan";

    public function __construct() {
        parent::__construct();
        $this->load->model('M_t_leasing');
        $this->load->model(array('M_t_leasing' => 't_kwitansi', 'Datatable_model' => 'm_datatable'));
        $this->load->library(array('upload', 'encrypt', 'Printpdf', 'Auth_log'));
        
        //set breadcrumb
        $this->breadcrumbs->push('Transaksi Kwitansi', '/kwitansi-fee');
    }
    
    public function getSO(){
        $query = $this->input->get('query');
        $data = $this->t_kwitansi->getNOSO($query);
        //echo $this->db->last_query();
        echo json_encode($data);
    }
    
     public function detail($id) {
        $this->breadcrumbs->push('Detail', '/kwitansi-fee-detail');
        $data['detail'] = $this->t_kwitansi->get_detail_fee($id);
        $data['view'] = 't_kwitansi/kwitansi_fee/detail';
        $this->load->view('default', $data);
    }
    
    public function index() {
         //$data['nokwitansi'] = $this->main_model->generate_code($this->table, 'KWT/MKA/FIF/' . romanic_number(date('m')), '/', 6, $date = false, $loop = false);
        //$data['codeso'] = $this->main_model->generate_code($this->table, 'KWT/KDS-' . date('Y') . '-' . romanic_number(date('m')), '-', 6, $date = false, $loop = false);
        $this->breadcrumbs->push('Leasing', '/cetak-kwitansi-diskon');
         $data['dtleasing'] = $this->main_model->getMaster('m_leasing', $like = array(), $where = array('status_leasing' => '1'));
        $data['view'] = "leasing/rekap_tagihan/main";
        $this->load->view('default', $data);
    }

    public function add() {
        $this->breadcrumbs->push('Add', '/kwitansi-fee');
        //$data['codesj'] = $this->main_model->generate_code($this->table, 'SJ/MKA-' . date('Y') . '/' . romanic_number(date('m')), '/', 6, $date = false, $loop = true);
        $data['codeso'] = $this->main_model->generate_code($this->table, 'KWT/KF-' . date('Y') . '-' . romanic_number(date('m')), '-', 6, $date = false, $loop = true);
        //var_dump($data['codeso']);
        $data['view'] = "t_kwitansi/kwitansi_fee/add";
        $this->load->view('default', $data);
    }
    
    public function printout() {
        //var_dump($_POST);
        
        $id = $this->uri->segment(2);
        $cek = str_replace("_","/",$id);
        $data['list'] = $this->t_kwitansi->get_data_print_fee($cek);
        //var_dump($data['list']);
        $data['template'] = array("template" => "t_kwitansi/kwitansi_fee/" . $_GET['template'], "filename" => $_GET['name']);
        //$data['list'] = $this->M_t_kwitansi->getdata($this->table, 0, 1000, $like = array());
         $this->load->view('t_kwitansi/kwitansi_fee/table_html', $data);
        //$this->printpdf->create_pdf($data);
    }

    public function edit($id) {
        $this->breadcrumbs->push('Edit', '/penjualan-edit');
        $data['detail'] = $this->db->get_where($this->table, array('id' => $id))->row_array();
        $data['view'] = 'rekap_tagihan/edit';
        $this->load->view('default', $data);
    }

    function delete($id) {
        $this->main_model->delete('rekap_tagihan', array('id' => $id), array('status_gudang' => '3'));
        redirect("penjualan");
    }

    function save() {
        if ($_POST) {
            //var_dump($_POST);
            //exit();
            if ($this->M_t_kwitansi->save()) {
                
                $this->session->set_flashdata('success', 'Data Berhasil Di Simpan !');
            } else {
                $this->session->set_flashdata('error', 'Data Gagal Di Simpan !');
            }
            redirect("kwitansi-fee");
        } else {
            show_404();
        }
    }

    public function __getSession() {
        if ($_POST) {
            return $data = array(
                'page' => set_session_table_search('page', $this->input->get_post('page', TRUE)),
                'nokwitansi' => set_session_table_search('nokwitansi', $this->input->get_post('nokwitansi', TRUE)),
                'a.noso' => set_session_table_search('noso', $this->input->get_post('noso', TRUE)),
                'c.nama_customer' => set_session_table_search('nama_customer', $this->input->get_post('nama_customer', TRUE)),
                'fee' => set_session_table_search('fee', $this->input->get_post('fee', TRUE)) 
            );
        } else {
            return $data = array(
                'page' => $this->session->userdata('page'),
                'nokwitansi' => $this->session->userdata('nokwitansi'),
                'a.noso' => $this->session->userdata('noso'),
                'c.nama_customer' => $this->session->userdata('nama_customer'),
                'fee' => $this->session->userdata('fee') 
            );
        }
    }

    public function print_pdf($id){
        //echo $id;
        //die();
        
        $data['template'] = array("template" => "t_kwitansi/kwitansi_fee/print_out_fee", "filename" => "Kwitansi PDF");
        $data['parsing'] = $this->t_kwitansi->get_print_fee($id);
        //var_dump($data['parsing']);
        //die();
        //$data['cpembelian'] = $this->main_model->get_global_data('cpembelian');
        //$data['detail_penjualan'] = $this->db->get_where($this->table, array('id' => $id))->row_array();
        //$data['detail_harga'] = $this->db->get_where('t_harga_motor',array('noso'=>$data['detail_penjualan']['noso']))->row_array();
        //$data['detail_penerimaan_motor'] = $this->db->get_where('penerimaan_motor',array('nomesin'=>$data['detail_penjualan']['nomsn']))->row_array();
        //$data['detail_motor'] = $this->db->get_where('m_motor',array('tipe_motor'=>$data['detail_penerimaan_motor']['tipe']))->row_array();
        //$data['detail_customer'] = $this->db->get_where('m_customer',array('no_ktp'=>$data['detail_penjualan']['ktp']))->row_array();
        //$data['detail_leasing'] = $this->db->get_where('m_leasing',array('kd_leasing'=>$data['detail_harga']['leasing']))->row_array();
        $this->printpdf->create_pdf($data);
         
    }
    
   

    public function print_excel() {
        $data['template_excel'] = "rekap_tagihan/" . $_GET['template'];
        $data['file_name'] = $_GET['name'];
        $data['list'] = $this->rekap_tagihan->getdata($this->table, 0, 1000, $like = array(), $where = array('status_gudang!=' => '3'));
        $this->load->view('template_excel', $data);
    }

    public function get_list_motor() {
        $table = 'm_motor';
        $column_order = array(null, 'id', 'nomsn', 'norangka', 'nama_motor', 'warna', 'tahun', 'varian', 'harga_otr');
        $column_search = array('id', 'nomsn', 'norangka', 'nama_motor', 'warna', 'tahun', 'varian', 'harga_otr');
        $list = $this->m_datatable->get_datatables($table, $column_order, $column_search, $order = array('id' => 'asc'));
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $result) {
            $no++;
            $row = array();
            $row[] = '';
            $row[] = $result->id;
            $row[] = $result->nomsn;
            $row[] = $result->norangka;
            $row[] = $result->nama_motor;
            $row[] = $result->warna;
            $row[] = $result->tahun;
            $row[] = $result->varian;
            $row[] = formatrp($result->harga_otr);

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->m_datatable->count_all($table),
            "recordsFiltered" => $this->m_datatable->count_filtered($table, $column_order, $column_search, $order = array('id' => 'asc')),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    function load_cpembelian($cpembelian = "") {
        switch ($cpembelian) {
            case "Cash":
                $this->load->view('rekap_tagihan/pembelian_cash');
                break;
            case "Kredit":
                $data['dtleasing'] = $this->rekap_tagihan->getdata('m_leasing', 0, 1000, $like = array(), $where = array('status_leasing!=' => '3'));
                $this->load->view('rekap_tagihan/pembelian_kredit', $data);
                break;
            default:
                $this->load->view('rekap_tagihan/pembelian_cash');
                break;
        }
    }
    
    
        function load_transaction_by_noso(){
        $noso = $this->input->post('noso');
        $result = $this->t_penjualan->getdata_transaction_by_noso($noso);
        echo json_encode($result);
    }
    
}
