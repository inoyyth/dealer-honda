<?php

class t_void extends MX_Controller {

    var $table = 't_void';

    function __construct() {
        parent::__construct();

        $this->load->model(
                array(
                    'M_t_void' => 't_void',
                    'Datatable_model' => 'm_datatable',
                    't_surat_jalan/M_t_surat_jalan' => 'm_surat_jalan'
                )
        );
        $this->load->library(array('Printpdf', 'Auth_log','encrypt'));

        //set breadcrumb
        $this->breadcrumbs->push('Void Transaction', '/void');
    }

    public function index() {
        $data_session = $this->__getSession();
        $config['base_url'] = base_url() . 'void-page';
        $config['total_rows'] = $this->main_model->countdata($this->table, $where = array());
        $config['per_page'] = (!empty($data_session['page']) ? $data_session['page'] : 10);
        $config['uri_segment'] = 2;
        $limit = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $this->pagination->initialize($config);
        $data['paging'] = $this->pagination->create_links();
        $data['data'] = $this->t_void->getdata($this->table, $limit, $config['per_page'], $like = $data_session, $where = array());
        $data['sr_data'] = $data_session;
        $data['view'] = 't_void/main';
        $this->load->view('default', $data);
    }

    public function __getSession() {
        if ($_POST) {
            return $data = array(
                'page' => set_session_table_search('page', $this->input->get_post('page', TRUE)),
                'noso' => set_session_table_search('noso', $this->input->get_post('noso', TRUE)),
                'nama_lengkap' => set_session_table_search('nama_lengkap', $this->input->get_post('nama_lengkap', TRUE)),
                'void_date' => set_session_table_search('void_date', $this->input->get_post('void_date', TRUE))
            );
        } else {
            return $data = array(
                'page' => $this->session->userdata('page'),
                'noso' => $this->session->userdata('noso'),
                'nama_lengkap' => $this->session->userdata('nama_lengkap'),
                'void_date' => $this->session->userdata('void_date')
            );
        }
    }

    private function save() {
        if ($_POST) {
            if ($this->t_void->save()) {
                $this->session->set_flashdata('success', 'Data Berhasil Di Simpan !');
            } else {
                $this->session->set_flashdata('error', 'Data Gagal Di Simpan !');
            }
            redirect("master-motor");
        } else {
            show_404();
        }
    }

    public function add() {
        $this->breadcrumbs->push('Add', '/void');
        $data['view'] = "t_void/add";
        $this->load->view('default', $data);
    }

    public function detail($id) {
        $this->breadcrumbs->push('Detail', '/void');
        $data['id'] = $id;
        $data['view'] = "t_void/detail";
        $this->load->view('default', $data);
    }

    public function get_so_list() {
        $table = 't_penjualan';

        $join = array(
            array('table' => 't_pdi', 'where' => 't_penjualan.noso=t_pdi.noso', 'join' => 'left'),
            array('table' => 'penerimaan_motor', 'where' => 't_penjualan.nomsn=penerimaan_motor.nomesin', 'join' => 'left'),
            array('table' => 't_harga_motor', 'where' => 't_penjualan.noso=t_harga_motor.noso', 'join' => 'left')
        );

        $where = array('t_penjualan.m_status' => '5', 't_harga_motor.dp_lunas' => '2');

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
            $row[] = "<button class='btn btn-sm btn-warning text-center' onclick='selectList(" . $result->id . ")'>Select</button>";

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
        $data['detail_pdi'] = $this->db->get_where('t_pdi', array('noso' => $data['detail_penjualan']['noso']))->row_array();
        $data['list_aksesoris'] = $this->t_void->getAksesoris($data['detail_pdi']['id']);
        $data['detail_harga'] = $this->db->get_where('t_harga_motor', array('noso' => $data['detail_penjualan']['noso']))->row_array();
        $data['detail_customer'] = $this->db->get_where('m_customer', array('no_ktp' => $data['detail_penjualan']['ktp']))->row_array();
        $data['detail_leasing'] = $this->db->get_where('m_leasing', array('kd_leasing' => $data['detail_harga']['leasing']))->row_array();
        $data['list_dp'] = $this->db->get_where('t_pembayaran', array('noso' => $data['detail_penjualan']['noso']))->result_array();
        $this->load->view('t_void/detail_transaksi', $data);
    }

    public function load_transaksi_detail_detail($id) {
        $id = $this->db->get_where($this->table, array('id' => $id))->row_array();
        $data['detail_penjualan'] = $this->db->get_where('t_penjualan', array('noso' => $id['noso']))->row_array();
        $data['detail_penerimaan_motor'] = $this->t_void->getPenerimaanMotor($data['detail_penjualan']['nomsn'])->row_array();
        $data['detail_motor'] = $this->db->get_where('m_motor', array('tipe_motor' => $data['detail_penerimaan_motor']['tipe']))->row_array();
        $data['detail_pdi'] = $this->db->get_where('t_pdi', array('noso' => $data['detail_penjualan']['noso']))->row_array();
        $data['list_aksesoris'] = $this->t_void->getAksesoris($data['detail_pdi']['id']);
        $data['detail_harga'] = $this->db->get_where('t_harga_motor', array('noso' => $data['detail_penjualan']['noso']))->row_array();
        $data['detail_customer'] = $this->db->get_where('m_customer', array('no_ktp' => $data['detail_penjualan']['ktp']))->row_array();
        $data['detail_leasing'] = $this->db->get_where('m_leasing', array('kd_leasing' => $data['detail_harga']['leasing']))->row_array();
        $data['list_dp'] = $this->db->get_where('t_pembayaran', array('noso' => $data['detail_penjualan']['noso']))->result_array();
        $this->load->view('t_void/detail_transaksi_detail', $data);
    }

    public function void_transaction() {
        $noso = $this->input->post('noso');
        try {
            $updateTpenjualan = $this->db->update('t_penjualan', array('m_status' => 4), array('noso' => $noso));
            $getTpenjualan = $this->db->get_where('t_penjualan', array('noso' => $noso))->row_array();
            $updatePenerimaanMotor = $this->db->update('penerimaan_motor', array('status_jual' => 1), array('nomesin' => $getTpenjualan['nomsn']));
            $this->save();
        } catch (Exception $ex) {
            //echo 'Caught exception: ',  $ex->getMessage(), "\n";
            var_dump($ex->getMessage());
        }
    }
    
    public function print_pdf() {
        $data['template'] = array("template" => "t_void/" . $_GET['template'], "filename" => $_GET['name']);
        $data['list'] = $this->t_void->getdata($this->table, 0, 1000, $like = array(), $where = array());
        $this->printpdf->create_pdf($data);
    }

    public function print_excel() {
        $data['template_excel'] = "t_void/" . $_GET['template'];
        $data['file_name'] = $_GET['name'];
        $data['list'] = $this->t_void->getdata($this->table, 0, 1000, $like = array(), $where = array());
        $this->load->view('template_excel', $data);
    }

}
