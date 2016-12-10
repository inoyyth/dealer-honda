<?php

class Stock extends MX_Controller {

    //var $table = "m_jabatan";

    public function __construct() {
        parent::__construct();
        if(!$this->session->userdata('logged_in_admin')){
            redirect(base_url());
        }
        $this->load->model(array('Datatable_model' => 'm_datatable'));
        $this->load->library('Printpdf', 'Auth_log');
        //set breadcrumb
        $this->breadcrumbs->push('Stock', '/stock');
    }

    public function index() {
        $data['gudang'] = $this->main_model->getMaster('m_gudang', $like=array(), $where=array('status_gudang'=>'1'));
        $data['view'] = 'stock/main';
        $this->load->view('default', $data);
    }

    public function print_pdf() {
        $data['template'] = array("template" => "md_jabatan/" . $_GET['template'], "filename" => $_GET['name']);
        $data['list'] = $this->db->get($this->table)->result_array();
        $this->printpdf->create_pdf($data);
    }

    public function print_excel() {
        $data['template_excel'] = "md_jabatan/" . $_GET['template'];
        $data['file_name'] = $_GET['name'];
        $data['list'] = $this->db->get($this->table)->result_array();
        $this->load->view('template_excel', $data);
    }
    
    public function getMotorType(){
        $query = $this->input->get('query');
        $data = $this->main_model->getMaster('m_motor', $like=array('tipe_motor'=>$query), $where=array('m_status'=>'1'));
        echo json_encode($data);
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

}
