<?php

class Aksesoris_terima extends MX_Controller {

    var $table = "penerimaan_aksesoris";

    public function __construct() {
        parent::__construct();
        $this->load->model(array('M_aksesoris_terima' => 'm_aksesoris_terima', 'Datatable_model' => 'm_datatable'));
        $this->load->library(array('upload', 'encrypt', 'Printpdf','Auth_log'));
        //set breadcrumb
        $this->breadcrumbs->push('Input Aksesoris', '/input-penerimaan-aksesoris');
    }

    public function index() {
        $data_session = $this->__getSession();
        $config['base_url'] = base_url() . 'input-penerimaan-aksesoris-page';
        $config['total_rows'] = $this->main_model->countdata($this->table, $where = array());
        $config['per_page'] = (!empty($data_session['page']) ? $data_session['page'] : 10);
        $config['uri_segment'] = 2;
        $limit = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $this->pagination->initialize($config);
        $data['paging'] = $this->pagination->create_links();
        $data['data'] = $this->m_aksesoris_terima->getdata($this->table, $limit, $config['per_page'], $like = $data_session, $where = array('aksesoris_status!=' => '3'));
        $data['sr_data'] = $data_session;
        
        $data['gudang'] = $this->main_model->getMaster('m_gudang', $like = array(), $where = array('status_gudang' => '1'));
        
        $data['view'] = 'aksesoris_terima/main';
        $this->load->view('default', $data);
    }

    public function add() {
        $this->breadcrumbs->push('Add', '/input-penerimaan-aksesoris-tambah');
        //$data['code'] = $this->main_model->generate_code($this->table, 'AKS', '-');
        $data['gudang'] = $this->main_model->getMaster('m_gudang', $like = array(), $where = array('status_gudang' => '1'));
        $data['view'] = "aksesoris_terima/add";
        $this->load->view('default', $data);
    }

    public function edit() {
        $id = $this->input->post('id');
        $data = $this->m_aksesoris_terima->getEdit($id)->row_array();
        echo json_encode($data,true);
    }

    function delete($id) {
        $this->main_model->delete($this->table, array('id' => $id), array('aksesoris_status' => '3'));
        redirect("input-penerimaan-aksesoris");
    }

    function save() {
        if ($_POST) {
            if ($this->m_aksesoris_terima->save()) {
                $this->session->set_flashdata('success', 'Data Berhasil Di Simpan !');
            } else {
                $this->session->set_flashdata('error', 'Data Gagal Di Simpan !');
            }
            redirect("input-penerimaan-aksesoris");
        } else {
            show_404();
        }
    }

    public function __getSession() {
        if ($_POST) {
            return $data = array(
                'page' => set_session_table_search('page', $this->input->get_post('page', TRUE)),
                'kd_aksesoris' => set_session_table_search('kd_aksesoris', $this->input->get_post('kd_aksesoris', TRUE)),
                'aksesoris' => set_session_table_search('aksesoris', $this->input->get_post('aksesoris', TRUE)),
                'gudang' => set_session_table_search('gudang', $this->input->get_post('gudang', TRUE)),
            );
        } else {
            return $data = array(
                'page' => $this->session->userdata('page'),
                'kd_aksesoris' => $this->session->userdata('kd_aksesoris'),
                'aksesoris' => $this->session->userdata('aksesoris'),
                'gudang' => $this->session->userdata('gudang')
            );
        }
    }

    public function print_pdf() {
        $data['template'] = array("template" => "aksesoris_terima/" . $_GET['template'], "filename" => $_GET['name']);
        $data['list'] = $this->m_aksesoris_terima->getdata($this->table, 0, 1000, $like = array(), $where = array('aksesoris_status!=' => '3'));
        $this->printpdf->create_pdf($data);
    }

    public function print_excel() {
        $data['template_excel'] = "aksesoris_terima/" . $_GET['template'];
        $data['file_name'] = $_GET['name'];
        $data['list'] = $this->m_aksesoris_terima->getdata($this->table, 0, 1000, $like = array(), $where = array('aksesoris_status!=' => '3'));
        $this->load->view('template_excel', $data);
    }
    
    public function get_list_aksesoris() {
        $table = 'm_aksesoris';
        $join = array();
        $column_order = array(null, 'id', 'url_foto', 'kd_aksesoris', 'aksesoris');
        $column_search = array('id', 'url_foto', 'kd_aksesoris', 'aksesoris');
        $list = $this->m_datatable->get_datatables($table, $column_order, $column_search, $order = array('id' => 'asc'),$where=array(),$join);
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $result) {
            $no++;
            $row = array();
            $row[] = '';
            $row[] = $result->id;
            $row[] = $result->url_foto;
            $row[] = $result->kd_aksesoris;
            $row[] = $result->aksesoris;

            $data[] = $row;
        }
    
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->m_datatable->count_all($table),
            "recordsFiltered" => $this->m_datatable->count_filtered($table, $column_order, $column_search, $order = array('id' => 'asc'),$where=array(),$join),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }
    
    public function get_list_aksesoris_detail() {
        $table = 'penerimaan_aksesoris';
        $join = array(
            array('table' => 'm_aksesoris', 'where' => 'penerimaan_aksesoris.aksesoris_id=m_aksesoris.id', 'join' => 'left'),
        );
        $where = array('aksesoris_id'=>$this->input->post('kode'));
        $column_order = array(null, 'kd_aksesoris', 'jumlah', 'tanggal_terima', 'status_add_or_min', 'keterangan');
        $column_search = array('kd_aksesoris', 'jumlah', 'tanggal_terima', 'status_add_or_min', 'keterangan');
        $list = $this->m_datatable->get_datatables($table, $column_order, $column_search, $order = array('penerimaan_aksesoris.id'=>'asc'),$where,$join);
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $result) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $result->kd_aksesoris;
            $row[] = $result->jumlah;
            $row[] = $result->tanggal_terima;
            $row[] = ($result->status_add_or_min=="1"?"Tambah":"Kurang");
            $row[] = $result->keterangan;

            $data[] = $row;
        }
    
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->m_datatable->count_all($table),
            "recordsFiltered" => $this->m_datatable->count_filtered($table, $column_order, $column_search, $order = array('penerimaan_aksesoris.id'=>'asc'),$where,$join),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }
}