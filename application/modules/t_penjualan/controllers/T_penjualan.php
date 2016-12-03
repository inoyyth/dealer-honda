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
        $data['data'] = $this->t_penjualan->getdata($this->table, $limit, $config['per_page'], $like = $data_session, $where = array('status_gudang!=' => '3'));
        $data['sr_data'] = $data_session;
        $data['view'] = 't_penjualan/main';
        $this->load->view('default', $data);
    }

    public function add() {
        $this->breadcrumbs->push('Add', '/penjualan-tambah');
        $data['codesj'] = $this->main_model->generate_code($this->table, 'SJ/MKA-' . date('Y') . '/' . romanic_number(date('m')), '/', 6, $date = false, $loop = true);
        $data['codeso'] = $this->main_model->generate_code($this->table, 'SO/MKA-' . date('Y') . '/' . romanic_number(date('m')), '/', 6, $date = false, $loop = true);
        
        $data['cpembelian'] = $this->main_model->get_global_data('cpembelian');
        
        $data['view'] = "t_penjualan/add";
        $this->load->view('default', $data);
    }

    public function edit($id) {
        $this->breadcrumbs->push('Edit', '/penjualan-edit');
        $data['detail'] = $this->db->get_where($this->table, array('id' => $id))->row_array();
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

    function load_customer_by_ktp() {
        $ktp = $this->input->post('no_ktp');
        $dtcustomer = $this->t_penjualan->getdata('m_customer', 0, 1, $like = array(), $where = array('no_ktp' => $ktp));
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

}
