<?php

class Rekap_tagihan extends MX_Controller {

    //put your code here

    var $table = "t_rekap_tagihan";

    public function __construct() {
        parent::__construct();
        $this->load->model('M_t_leasing');
        $this->load->model(array('M_t_rekap_tagihan' => 't_rekap', 'Datatable_model' => 'm_datatable'));
        $this->load->library(array('upload', 'encrypt', 'Printpdf', 'Auth_log'));

        //set breadcrumb
        $this->breadcrumbs->push('Rekap Kwitansi', '/rekap-tagihan');
    }

    public function index() {
        $data_session = $this->__getSession();

        $config['base_url'] = base_url() . 'rekap-tagihan';
        $config['total_rows'] = $this->main_model->countdata($this->table, $where = array());
        $config['per_page'] = (!empty($data_session['page']) ? $data_session['page'] : 10);
        $config['uri_segment'] = 2;
        $limit = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $this->pagination->initialize($config);
        $data['paging'] = $this->pagination->create_links();
        $data['data'] = $this->t_rekap->getdata($this->table, $limit, $config['per_page'], $like = $data_session, $where = array());
        $data['sr_data'] = $data_session;

        $data['view'] = "leasing/rekap_tagihan/main";
        $this->load->view('default', $data);
    }

    function form() {
        $data['notagihan'] = $this->main_model->generate_code($this->table, 'TGH/MKA-REK/' . date('Y'), '/', 6, $date = false, $loop = false,'id','no_tagihan');
        $this->breadcrumbs->push('Add', '/rekap-tagihan-tambah');
        $data['dtleasing'] = $this->main_model->getMaster('m_leasing', $like = array(), $where = array('status_leasing' => '1'));
        $data['view'] = "leasing/rekap_tagihan/print-form";
        $this->load->view('default', $data);
    }

    public function add() {
        $this->breadcrumbs->push('Add', '/kwitansi-fee');
        $data['codeso'] = $this->main_model->generate_code($this->table, 'KWT/KF-' . date('Y') . '-' . romanic_number(date('m')), '-', 6, $date = false, $loop = true);
        //var_dump($data['codeso']);
        $data['view'] = "t_kwitansi/kwitansi_fee/add";
        $this->load->view('default', $data);
    }

    public function getSO() {
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

    public function printout() {
        //var_dump($_POST);

        $id = $this->uri->segment(2);
        $cek = str_replace("_", "/", $id);
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

    function dt_leasing_json() {
        $post = $this->input->post();
        $nmleasing = $this->t_rekap->get_leasing($post['kdleasing']);

        echo json_encode(array('leasing' => $nmleasing));
    }

    function get_list_kwitansi() {
        $tanggal_start = $this->input->get('tanggal_start');
        $tanggal_end = $this->input->get('tanggal_end');
        $kdleasing = $this->input->get('kdleasing');

        $table = 't_kwitansi_leasing';
        $join = array(
            array('table' => 't_penjualan', 'where' => 't_kwitansi_leasing.noso = t_penjualan.noso', 'join' => 'left'),
            array('table' => 'penerimaan_motor', 'where' => 't_penjualan.nomsn = penerimaan_motor.nomesin', 'join' => 'left'),
            array('table' => 't_harga_motor', 'where' => 't_kwitansi_leasing.noso = t_harga_motor.noso', 'join' => 'left'),
            array('table' => 'm_customer', 'where' => 't_penjualan.ktp = m_customer.no_ktp', 'join' => 'left'),
            array('table' => 'm_motor', 'where' => 'penerimaan_motor.tipe = m_motor.tipe_motor', 'join' => 'left')
        );
        //echo json_encode($_GET);die();
        //echo print_r($join[0]['table']);die();


        $column_search = array('t_kwitansi_leasing.id', 't_kwitansi_leasing.nokwitansi', 't_kwitansi_leasing.noso', 't_kwitansi_leasing.dp_system', 't_kwitansi_leasing.tagih', 't_kwitansi_leasing.subsidi1', 't_kwitansi_leasing.subsidi2', 't_kwitansi_leasing.m_status', 't_kwitansi_leasing.sys_create_user', 't_kwitansi_leasing.sys_create_date', 't_kwitansi_leasing.status_rekap', 't_penjualan.nosj', 't_penjualan.nokonsumen', 't_penjualan.ktp', 't_penjualan.tanggal', 't_penjualan.nomsn', 't_penjualan.warna_motor', 't_penjualan.harga_otr', 'penerimaan_motor.norangka', 'penerimaan_motor.tipe', 'penerimaan_motor.warna', 'penerimaan_motor.tahun', 'penerimaan_motor.kdgudang', 'penerimaan_motor.tglupload', 't_harga_motor.cara_pembelian', 't_harga_motor.marketing', 't_harga_motor.leasing', 't_harga_motor.dp_system', 't_harga_motor.diskon', 't_harga_motor.tagih', 't_harga_motor.dp', 't_harga_motor.sisa_hutang', 't_harga_motor.dp_lunas', 't_harga_motor.fee', 'm_customer.nama_customer', 'm_customer.tempat_lahir_customer', 'm_customer.tanggal_lahir_customer', 'm_customer.kelamin_customer', 'm_customer.alamat_customer', 'm_customer.telepon_customer', 'm_customer.handphone_customer', 'm_customer.rt', 'm_customer.rw', 'm_customer.wilayah', 'm_customer.kelurahan', 'm_customer.kecamatan', 'm_motor.nama_motor', 'm_motor.varian', 'm_motor.merk', 'm_motor.url_foto');
        $column_order = array(null, 't_kwitansi_leasing.id', 't_kwitansi_leasing.nokwitansi', 't_kwitansi_leasing.noso');

        @$list = $this->m_datatable->get_datatables($table, $column_order, $column_search, $order = array('t_kwitansi_leasing.id' => 'asc'), $where = array($table . '.sys_create_user' => $this->sessionGlobal['id'],
            $join[0]['table'] . ".tanggal >= " => $tanggal_start,
            $join[0]['table'] . ".tanggal <= " => $tanggal_end,
            $join[2]['table'] . ".leasing" => $kdleasing,
            $table . '.sys_create_user' => $this->sessionGlobal['id']), $join);

        $no = isset($_POST['start']) ? $_POST['start'] : 0;
        $data = array();
        foreach ($list as $result) {
            $no++;
            $row = array();

            $row[] = "<span align='center'><input type='checkbox'  class='idkwitansileasing' value='" . $result->id . "'  /></span>";
            $row[] = $no;
            $row[] = date("d F Y", strtotime($result->sys_create_date));
            $row[] = $result->nokwitansi;
            $row[] = $result->nama_customer;
            $row[] = $result->tipe;
            $row[] = $result->nomsn;
            $row[] = $result->norangka;
            $row[] = formatrp($result->harga_otr);
            $row[] = formatrp($result->dp);
            $row[] = formatrp($result->subsidi1 + $result->subsidi2);
            $row[] = formatrp(($result->harga_otr - $result->dp) + ($result->subsidi1 + $result->subsidi2));
            $row[] = $result->varian;

            $data[] = $row;
        }

        $output = array(
            "draw" => isset($_POST['draw']) ? $_POST['draw'] : 0,
            "recordsTotal" => $this->m_datatable->count_all($table, $where = array($table . '.sys_create_user' => $this->sessionGlobal['id'])),
            "recordsFiltered" => $this->m_datatable->count_filtered($table, $column_order, $column_search, $order = array('id' => 'asc'), $where = array($table . '.sys_create_user' => $this->sessionGlobal['id']), $join),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    function get_rekap_tagihan() {
        $idkwitansi_leasing = $this->input->get('dt');
        
        $table = 't_kwitansi_leasing';
        $join = array(
            array('table' => 't_penjualan', 'where' => 't_kwitansi_leasing.noso = t_penjualan.noso', 'join' => 'left'),
            array('table' => 'penerimaan_motor', 'where' => 't_penjualan.nomsn = penerimaan_motor.nomesin', 'join' => 'left'),
            array('table' => 't_harga_motor', 'where' => 't_kwitansi_leasing.noso = t_harga_motor.noso', 'join' => 'left'),
            array('table' => 'm_customer', 'where' => 't_penjualan.ktp = m_customer.no_ktp', 'join' => 'left'),
            array('table' => 'm_motor', 'where' => 'penerimaan_motor.tipe = m_motor.tipe_motor', 'join' => 'left')
        );

        $column_search = array('t_kwitansi_leasing.id', 't_kwitansi_leasing.nokwitansi', 't_kwitansi_leasing.noso', 't_kwitansi_leasing.dp_system', 't_kwitansi_leasing.tagih', 't_kwitansi_leasing.subsidi1', 't_kwitansi_leasing.subsidi2', 't_kwitansi_leasing.m_status', 't_kwitansi_leasing.sys_create_user', 't_kwitansi_leasing.sys_create_date', 't_kwitansi_leasing.status_rekap', 't_penjualan.nosj', 't_penjualan.nokonsumen', 't_penjualan.ktp', 't_penjualan.tanggal', 't_penjualan.nomsn', 't_penjualan.warna_motor', 't_penjualan.harga_otr', 'penerimaan_motor.norangka', 'penerimaan_motor.tipe', 'penerimaan_motor.warna', 'penerimaan_motor.tahun', 'penerimaan_motor.kdgudang', 'penerimaan_motor.tglupload', 't_harga_motor.cara_pembelian', 't_harga_motor.marketing', 't_harga_motor.leasing', 't_harga_motor.dp_system', 't_harga_motor.diskon', 't_harga_motor.tagih', 't_harga_motor.dp', 't_harga_motor.sisa_hutang', 't_harga_motor.dp_lunas', 't_harga_motor.fee', 'm_customer.nama_customer', 'm_customer.tempat_lahir_customer', 'm_customer.tanggal_lahir_customer', 'm_customer.kelamin_customer', 'm_customer.alamat_customer', 'm_customer.telepon_customer', 'm_customer.handphone_customer', 'm_customer.rt', 'm_customer.rw', 'm_customer.wilayah', 'm_customer.kelurahan', 'm_customer.kecamatan', 'm_motor.nama_motor', 'm_motor.varian', 'm_motor.merk', 'm_motor.url_foto');
        $column_order = array(null, 't_kwitansi_leasing.id', 't_kwitansi_leasing.nokwitansi', 't_kwitansi_leasing.noso');

        @$list = $this->m_datatable->get_datatables($table, $column_order, $column_search, $order = array('t_kwitansi_leasing.id' => 'asc'), $where = array($table . '.sys_create_user' => $this->sessionGlobal['id'],
            $table . '.id in ' => $idkwitansi_leasing,
            $table . '.sys_create_user' => $this->sessionGlobal['id']), $join);

        $no = isset($_POST['start']) ? $_POST['start'] : 0;
        $data = array();
        foreach ($list as $result) {
            $no++;
            $row = array();

            $row[] = "<span align='center'><input type='checkbox'  class='idkwitansileasing' value='" . $result->id . "'  /></span>";
            $row[] = $no;
            $row[] = date("d F Y", strtotime($result->sys_create_date));
            $row[] = $result->nokwitansi;
            $row[] = $result->nama_customer;
            $row[] = $result->tipe;
            $row[] = $result->nomsn;
            $row[] = $result->norangka;
            $row[] = formatrp($result->harga_otr);
            $row[] = formatrp($result->dp);
            $row[] = formatrp($result->subsidi1 + $result->subsidi2);
            $row[] = formatrp(($result->harga_otr - $result->dp) + ($result->subsidi1 + $result->subsidi2));
            $row[] = $result->varian;

            $data[] = $row;
        }

        $output = array(
            "draw" => isset($_POST['draw']) ? $_POST['draw'] : 0,
            "recordsTotal" => $this->m_datatable->count_all($table, $where = array($table . '.sys_create_user' => $this->sessionGlobal['id'])),
            "recordsFiltered" => $this->m_datatable->count_filtered($table, $column_order, $column_search, $order = array('id' => 'asc'), $where = array($table . '.sys_create_user' => $this->sessionGlobal['id']), $join),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    public function __getSession() {
        if ($_POST) {
            return $data = array(
                'page' => set_session_table_search('page', $this->input->get_post('page', TRUE)),
                'no_tagihan' => set_session_table_search('page', $this->input->get_post('no_tagihan', TRUE)),
                'tgl_tagihan' => set_session_table_search('noso', $this->input->get_post('tgl_tagihan', TRUE)),
                'total_tagihan' => set_session_table_search('nomsn', $this->input->get_post('total_tagihan', TRUE)),
                'kd_leasing' => set_session_table_search('nomsn', $this->input->get_post('kd_leasing', TRUE))
            );
        } else {
            return $data = array(
                'page' => $this->session->userdata('page'),
                'no_tagihan' => $this->session->userdata('no_tagihan'),
                'tgl_tagihan' => $this->session->userdata('tgl_tagihan'),
                'total_tagihan' => $this->session->userdata('total_tagihan'),
                'kd_leasing' => $this->session->userdata('kd_leasing')
            );
        }
    }

    public function print_pdf($id) {
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

    function load_transaction_by_noso() {
        $noso = $this->input->post('noso');
        $result = $this->t_penjualan->getdata_transaction_by_noso($noso);
        echo json_encode($result);
    }

}
