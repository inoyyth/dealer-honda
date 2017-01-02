<?php

class T_kwitansidp extends MX_Controller {
    //put your code here
    
    var $table = "t_pembayaran";

    public function __construct() {
        parent::__construct();
        
        $this->load->model(array('M_t_kwitansi' => 'mt_kwitansi', 'Datatable_model' => 'm_datatable'));
        $this->load->library(array('upload', 'encrypt', 'Printpdf', 'Auth_log'));
        
        //set breadcrumb
        $this->breadcrumbs->push('Transaksi Kwitansi', '/kwitansi-dp');
    }
    
    public function index() {
        $data_session = $this->__getSession();
        
        $config['base_url'] = base_url() . 'kwitansi-dp';
        $config['total_rows'] = $this->mt_kwitansi->count_dp();
        $config['per_page'] = (!empty($data_session['page']) ? $data_session['page'] : 10);
        $config['uri_segment'] = 2;
        $limit = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $this->pagination->initialize($config);
        $data['paging'] = $this->pagination->create_links();
        $data['data'] = $this->mt_kwitansi->getdata_dp();
        $data['sr_data'] = $data_session;
        $data['view'] = 't_kwitansi/kwitansi_dp/main';
        $this->load->view('default', $data);
    }
    
    public function getSO(){
        $query = $this->input->get('query');
        $data = $this->mt_kwitansi->getNOSO($query);
        //echo $this->db->last_query();
        echo json_encode($data);
    }
    
    public function print_pdf($id){
        //echo $id;
        //die();
        
        $data['template'] = array("template" => "t_kwitansi/kwitansi_dp/print_out_dp", "filename" => "Kwitansi PDF");
        $data['parsing'] = $this->mt_kwitansi->get_print_dp($id);
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
    

    public function add() {
        $this->breadcrumbs->push('Add', '/kwitansi-dp');
        
        $data['nokwitansi'] = $this->main_model->generate_code($this->table, 'KWT/KD/' . date('Y') . '/' . romanic_number(date('m')), '/', 6, $date = false, $loop = true);
        $data['tpembayaran'] = $this->main_model->get_global_data("tpembayaran");
        
        $data['view'] = "t_kwitansi/kwitansi_dp/add";
        $this->load->view('default', $data);
    }

    public function edit($id) {
        $this->breadcrumbs->push('Edit', '/penjualan-edit');
        $data['detail'] = $this->db->get_where($this->table, array('id' => $id))->row_array();
         $data['view'] = 't_kwitansi/kwitansi_dp/edit';
        $this->load->view('default', $data);
    }
    
     public function detail($id) {
        $this->breadcrumbs->push('Edit', '/penjualan-detail');
        $data['detail'] = $this->mt_kwitansi->get_detail_dp($id);
        $data['view'] = 't_kwitansi/kwitansi_dp/detail';
        $this->load->view('default', $data);
    }

    function delete($id) {
        $this->main_model->delete('t_penjualan', array('id' => $id), array('status_gudang' => '3'));
        redirect("penjualan");
    }
    
    
    
    function save() {
        //print_r($_POST);die();
        if ($_POST) {
            //var_dump($_POST);
            //exit();
            if ($this->mt_kwitansi->save_dp()) {
                $this->session->set_flashdata('success', 'Data Berhasil Di Simpan !');
            } else {
                $this->session->set_flashdata('error', 'Data Gagal Di Simpan !');
            }
            redirect("kwitansi-dp-tambah");
        } else {
            show_404();
        }
        
    }
    
    public function __getSession() {
        if ($_POST) {
            return $data = array(
                'page' => set_session_table_search('page', $this->input->get_post('page', TRUE)),
                'kd_gudang' => set_session_table_search('kd_gudang', $this->input->get_post('kd_gudang', TRUE)),
                'gudang' => set_session_table_search('gudang', $this->input->get_post('gudang', TRUE)),
                'alamat' => set_session_table_search('alamat', $this->input->get_post('alamat', TRUE)),
                'telepon' => set_session_table_search('telepon', $this->input->get_post('telepon', TRUE)),
                'status_gudang' => set_session_table_search('status_gudang', $this->input->get_post('status_gudang', TRUE))
            );
        } else {
            return $data = array(
                'page' => $this->session->userdata('page'),
                'kd_gudang' => $this->session->userdata('kd_gudang'),
                'gudang' => $this->session->userdata('gudang'),
                'alamat' => $this->session->userdata('alamat'),
                'telepon' => $this->session->userdata('telepon'),
                'status_gudang' => $this->session->userdata('status_gudang')
            );
        }
    }

     
    public function print_excel() {
        $data['template_excel'] = "t_penjualan/" . $_GET['template'];
        $data['file_name'] = $_GET['name'];
        $data['list'] = $this->t_penjualan->getdata($this->table, 0, 1000, $like = array(), $where = array('status_gudang!=' => '3'));
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
                $this->load->view('t_penjualan/pembelian_cash');
                break;
            case "Kredit":
                $data['dtleasing'] = $this->t_penjualan->getdata('m_leasing', 0, 1000, $like = array(), $where = array('status_leasing!=' => '3'));
                $this->load->view('t_penjualan/pembelian_kredit', $data);
                break;
            default:
                $this->load->view('t_penjualan/pembelian_cash');
                break;
        }
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
        $result = $this->mt_kwitansi->getdata_transaction_by_noso($noso);
        
        echo json_encode($result);
    }
    
    function terbilang(){
        $nominal = $this->input->post('nominal');
        $terbilang = terbilang($nominal);
        echo $terbilang;
    }
    
    
}
