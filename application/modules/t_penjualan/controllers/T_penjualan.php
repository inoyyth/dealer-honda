<?php

class T_penjualan extends MX_Controller {

    var $table = "t_penjualan";

    public function __construct() {
        parent::__construct();
        
        $this->load->model(array('M_t_penjualan' => 't_penjualan', 'Datatable_model' => 'm_datatable'));
        $this->load->library(array('upload', 'encrypt', 'Printpdf', 'Auth_log'));
        //set breadcrumb
        $this->breadcrumbs->push('Transaksi Penjualan', '/penjualan');
    }

    public function index() {
        $data_session = $this->__getSession();
        $config['base_url'] = base_url() . 'penjualan-page';
        $config['total_rows'] = $this->main_model->countdata($this->table, $where = array());
        $config['per_page'] = (!empty($data_session['page']) ? $data_session['page'] : 10);
        $config['uri_segment'] = 2;
        $limit = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $this->pagination->initialize($config);
        $data['paging'] = $this->pagination->create_links();
        $data['data'] = $this->t_penjualan->getdata($this->table, $limit, $config['per_page'], $like = $data_session, $where = array());
        $data['sr_data'] = $data_session;
        $data['view'] = 't_penjualan/main';
        $this->load->view('default', $data);
    }

    public function add() {
        $this->breadcrumbs->push('Add', '/penjualan-tambah');
        $data['codesj'] = $this->main_model->generate_code($this->table, 'SJ/MKA-' . date('Y') . '/' . romanic_number(date('m')), '/', 6, $date = false, $loop = true);
        $data['codeso'] = $this->main_model->generate_code($this->table, 'SO/MKA-' . date('Y') . '/' . romanic_number(date('m')), '/', 6, $date = false, $loop = false);
        
        
        $data['cpembelian'] = $this->main_model->get_global_data('cpembelian');
        
        $data['view'] = "t_penjualan/add";
        $this->load->view('default', $data);
    }

    public function edit($id) {
        $this->breadcrumbs->push('Edit', '/penjualan-edit');
        $data['cpembelian'] = $this->main_model->get_global_data('cpembelian');
        $data['detail_penjualan'] = $this->db->get_where($this->table, array('id' => $id))->row_array();
        $data['detail_harga'] = $this->db->get_where('t_harga_motor',array('noso'=>$data['detail_penjualan']['noso']))->row_array();
        $data['detail_penerimaan_motor'] = $this->db->get_where('penerimaan_motor',array('nomesin'=>$data['detail_penjualan']['nomsn']))->row_array();
        $data['detail_motor'] = $this->db->get_where('m_motor',array('tipe_motor'=>$data['detail_penerimaan_motor']['tipe']))->row_array();
        $data['detail_customer'] = $this->db->get_where('m_customer',array('no_ktp'=>$data['detail_penjualan']['ktp']))->row_array();
        //dump($data,true);
        $data['view'] = 't_penjualan/edit';
        $this->load->view('default', $data);
    }

    function delete($id) {
        $this->main_model->delete('t_penjualan', array('id' => $id), array('status_gudang' => '3'));
        redirect("penjualan");
    }

    function save() {
        if ($_POST) {
            if ($this->t_penjualan->save()) {
                $this->session->set_flashdata('success', 'Data Berhasil Di Simpan !');
            } else {
                $this->session->set_flashdata('error', 'Data Gagal Di Simpan !');
            }
            redirect("penjualan");
        } else {
            show_404();
        }
    }

    public function __getSession() {
        if ($_POST) {
            return $data = array(
                'page' => set_session_table_search('page', $this->input->get_post('page', TRUE)),
                'noso' => set_session_table_search('noso', $this->input->get_post('noso', TRUE)),
                'nomsn' => set_session_table_search('nomsn', $this->input->get_post('nomsn', TRUE)),
                'harga_otr' => set_session_table_search('harga_otr', $this->input->get_post('harga_otr', TRUE)),
                'tipe' => set_session_table_search('tipe', $this->input->get_post('tipe', TRUE))
            );
        } else {
            return $data = array(
                'page' => $this->session->userdata('page'),
                'no_so' => $this->session->userdata('noso'),
                'nomsn' => $this->session->userdata('nomsn'),
                'harga_otr' => $this->session->userdata('harga_otr'),
                'tipe' => $this->session->userdata('tipe')
            );
        }
    }

    public function print_pdf() {
        $data['template'] = array("template" => "t_penjualan/" . $_GET['template'], "filename" => $_GET['name']);
        $data['list'] = $this->t_penjualan->getdata($this->table, 0, 1000, $like = array(), $where = array('status_gudang!=' => '3'));
        $this->printpdf->create_pdf($data);
    }

    public function print_excel() {
        $data['template_excel'] = "t_penjualan/" . $_GET['template'];
        $data['file_name'] = $_GET['name'];
        $data['list'] = $this->t_penjualan->getdata($this->table, 0, 1000, $like = array(), $where = array('status_gudang!=' => '3'));
        $this->load->view('template_excel', $data);
    }

    public function get_list_motor() {
        $table = 'penerimaan_motor';
        $where = array('penerimaan_motor.status_jual'=>'1');
        $join = array(
            array('table' => 'm_motor', 'where' => 'm_motor.tipe_motor=penerimaan_motor.tipe', 'join' => 'INNER')
        );
        $column_order = array(null, 'penerimaan_motor.id as idx','no_sj','tgl_sj','nomesin','penerimaan_motor.norangka as no_rangka','tipe','penerimaan_motor.warna as warnax','penerimaan_motor.tahun','varian','harga_otr');
        $column_search = array('penerimaan_motor.id as idx','no_sj','tgl_sj','nomesin','penerimaan_motor.norangka as no_rangka','tipe','penerimaan_motor.warna as warnax','penerimaan_motor.tahun','varian','harga_otr');
        $list = $this->m_datatable->get_datatables($table, $column_order, $column_search, $order = array('idx'=>'ASC'), $where, $join, $group=array());
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $result) {
            $no++;
            $row = array();
            $row[] = '';
            $row[] = $result->idx;
            $row[] = $result->nomesin;
            $row[] = $result->no_rangka;
            $row[] = $result->tipe;
            $row[] = $result->warnax;
            $row[] = $result->tahun;
            $row[] = formatrp($result->harga_otr);

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->m_datatable->count_all($table),
            "recordsFiltered" => $this->m_datatable->count_filtered($table, $column_order, $column_search, $order = array('idx'=>'ASC'), $where, $join, $group=array()),
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
                $data['dtleasing'] = $this->main_model->getMaster('m_leasing', $like = array(), $where = array('status_leasing' => '1'));
                $this->load->view('t_penjualan/pembelian_kredit', $data);
                break;
            default:
                $this->load->view('t_penjualan/pembelian_cash');
                break;
        }
    }
    
    function load_cpembelian_edit($cpembelian = "",$kode_so) {
        $data['price_list'] = $this->db->get_where('t_harga_motor',array('noso'=>decode_url($kode_so)))->row_array();
        switch ($cpembelian) {
            case "Cash":
                $this->load->view('t_penjualan/pembelian_cash',$data);
                break;
            case "Kredit":
                $data['dtleasing'] = $this->main_model->getMaster('m_leasing', $like = array(), $where = array('status_leasing' => '1'));
                $this->load->view('t_penjualan/pembelian_kredit', $data);
                break;
            default:
                $this->load->view('t_penjualan/pembelian_cash',$data);
                break;
        }
    }

    function load_customer_by_ktp() {
        $ktp = $this->input->post('no_ktp');
        $dtcustomer = $this->main_model->getMaster('m_customer', $like = array(), $where = array('no_ktp' => $ktp));
        foreach($dtcustomer as $row){
            $data = $row;
        }
        echo json_encode($data);
    }
    
    function load_transaction_by_noso(){
        $noso = $this->input->post('noso');
        $result = $this->t_penjualan->getdata_transaction_by_noso($noso);
        echo json_encode($result);
    }
    
    function load_transaction_price_by_noso()
    {
        $noso = $this->input->post('noso');
        $result = $this->t_penjualan->getdata_transaction_price_by_noso($noso);
        echo json_encode($result);
    }
    
    public function load_modal_confirm(){
        $this->load->view('t_penjualan/modal_confirm');
    }

}
