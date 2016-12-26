<?php

class Motor_keluar extends MX_Controller {

    var $table = "motor_keluar";

    public function __construct() {
        parent::__construct();
        if(!$this->session->userdata('logged_in_admin')){
            redirect(base_url());
        }
        $this->load->model(array('M_motor_keluar' => 'm_motor_keluar','Datatable_model'=>'m_datatable'));
        $this->load->library('Printpdf', 'Auth_log');
        //set breadcrumb
        $this->breadcrumbs->push('Motor Keluar', '/motor-keluar');
    }

    public function index() {
        $data_session = $this->__getSession();
        $config['base_url'] = base_url() . 'motor-keluar-page';
        $config['total_rows'] = $this->main_model->countdata($this->table, $where = array());
        $config['per_page'] = (!empty($data_session['page']) ? $data_session['page'] : 10);
        $config['uri_segment'] = 2;
        $limit = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $this->pagination->initialize($config);
        $data['paging'] = $this->pagination->create_links();
        $data['data'] = $this->m_motor_keluar->getdata($this->table, $limit, $config['per_page'], $like = $data_session, $where = array('status_motor_keluar!=' => '3'));
        $data['sr_data'] = $data_session;
        $data['view'] = 'motor_keluar/main';
        $this->load->view('default', $data);
    }

    public function add() {
        $this->breadcrumbs->push('Add', '/motor-keluar-tambah');
        //$this->db->delete('detail_motor_keluar_temp',array('id_user'=>$this->sessionGlobal['id']));
        $data['code'] = $this->main_model->generate_code($this->table, 'MKA-SJL/BK/'.date('Y'), '/',5,false,true,'id_motor_keluar');
        $data['gudang'] = $this->main_model->getMaster('m_gudang', $like=array(), $where=array('status_gudang'=>'1'));
        $data['view'] = "motor_keluar/add";
        $this->load->view('default', $data);
    }

    public function edit($id) {
        $this->breadcrumbs->push('Edit', '/motor-keluar-edit');
        $this->db->delete('detail_motor_keluar_temp',array('id_user'=>$this->sessionGlobal['id']));
        $data['detail'] = $this->db->get_where($this->table, array('id_motor_keluar' => $id))->row_array();
        $data['gudang'] = $this->main_model->getMaster('m_gudang', $like=array(), $where=array('status_gudang'=>'1'));
        $data['view'] = 'motor_keluar/edit';
        $this->load->view('default', $data);
    }

    function delete($id) {
        $this->main_model->delete('motor_keluar', array('id_motor_keluar' => $id), array('status_motor_keluar' => '3'));
        redirect("motor-keluar");
    }

    function save() {
        if ($_POST) {
            if ($this->m_motor_keluar->save()) {
                $this->db->delete('detail_motor_keluar_temp',array('id_user'=>$this->sessionGlobal['id']));
                $this->session->set_flashdata('success', 'Data Berhasil Di Simpan !');
            } else {
                $this->session->set_flashdata('error', 'Data Gagal Di Simpan !');
            }
            redirect("motor-keluar");
        } else {
            show_404();
        }
    }

    public function __getSession() {
        if ($_POST) {
            return $data = array(
                'page' => set_session_table_search('page', $this->input->get_post('page', TRUE)),
                'kode_motor_keluar' => set_session_table_search('kode_motor_keluar', $this->input->get_post('kode_motor_keluar', TRUE)),
                'gudang_keluar.gudang' => set_session_table_search('gudang_keluar', $this->input->get_post('gudang_keluar', TRUE)),
                'gudang_masuk.gudang' => set_session_table_search('gudang_masuk', $this->input->get_post('gudang_masuk', TRUE)),
                'kode_po_motor_keluar' => set_session_table_search('kode_po_motor_keluar', $this->input->get_post('kode_po_motor_keluar', TRUE)),
                'kode_do_motor_keluar' => set_session_table_search('kode_do_motor_keluar', $this->input->get_post('kode_do_motor_keluar', TRUE))
            );
        } else {
            return $data = array(
                'page' => $this->session->userdata('page'),
                'kode_motor_keluar' => $this->session->userdata('kode_motor_keluar'),
                'gudang_keluar.gudang' => $this->session->userdata('gudang_keluar'),
                'gudang_masuk.gudang' => $this->session->userdata('gudang_masuk'),
                'kode_po_motor_keluar' => $this->session->userdata('kode_po_motor_keluar'),
                'kode_do_motor_keluar' => $this->session->userdata('kode_do_motor_keluar')
            );
        }
    }

    public function print_pdf() {
        $data['template'] = array("template" => "motor_keluar/" . $_GET['template'], "filename" => $_GET['name']);
        $data['list'] = $this->db->get($this->table)->result_array();
        $this->printpdf->create_pdf($data);
    }

    public function print_excel() {
        $data['template_excel'] = "motor_keluar/" . $_GET['template'];
        $data['file_name'] = $_GET['name'];
        $data['list'] = $this->db->get($this->table)->result_array();
        $this->load->view('template_excel', $data);
    }
    
    public function get_list_temp(){
        $table = 'detail_motor_keluar_temp';
        $join = array(
                    array('table'=>'penerimaan_motor','where'=>'penerimaan_motor.nomesin=detail_motor_keluar_temp.no_mesin','join'=>'left')
                );
        $column_order = array(null, 'id_detail_motor_keluar', 'nomesin', 'norangka', 'tipe','warna','tahun');
        $column_search = array('id_detail_motor_keluar', 'nomesin', 'norangka', 'tipe','warna','tahun');
        $list = $this->m_datatable->get_datatables($table, $column_order, $column_search, $order = array('id_detail_motor_keluar' => 'asc'),$where=array('id_user'=>$this->sessionGlobal['id']),$join);
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $result) {
            $no++;
            $row = array();
            $row[] = "<input type='checkbox'  class='deleteRow' value='".$result->id_detail_motor_keluar."'  /> ".$no ;
            $row[] = $result->id_detail_motor_keluar;
            $row[] = $result->nomesin;
            $row[] = $result->norangka;
            $row[] = $result->tipe;
            $row[] = $result->warna;
            $row[] = $result->tahun;
 
            $data[] = $row;
        }
    
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->m_datatable->count_all($table),
            "recordsFiltered" => $this->m_datatable->count_filtered($table, $column_order, $column_search, $order = array('id' => 'asc'),$where=array('id_user'=>$this->sessionGlobal['id']),$join),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }
    
    public function get_list_motor_keluar(){
        $table = 'detail_motor_keluar';
        $join = array(
                    array('table'=>'penerimaan_motor','where'=>'penerimaan_motor.nomesin=detail_motor_keluar.no_mesin','join'=>'left')
                );
        $column_order = array(null, 'id_motor_keluar', 'nomesin', 'norangka', 'tipe','warna','tahun');
        $column_search = array('id_motor_keluar', 'nomesin', 'norangka', 'tipe','warna','tahun');
        $list = $this->m_datatable->get_datatables($table, $column_order, $column_search, $order = array('id_detail_motor_keluar' => 'asc'),$where=array('id_detail_motor_keluar'=>$this->input->post('id_motor_keluar')),$join);
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $result) {
            $no++;
            $row = array();
            $row[] = "<input type='checkbox'  class='deleteRow' value='".$result->id_motor_keluar."'  /> ".$no ;
            $row[] = $result->id_motor_keluar;
            $row[] = $result->nomesin;
            $row[] = $result->norangka;
            $row[] = $result->tipe;
            $row[] = $result->warna;
            $row[] = $result->tahun;
 
            $data[] = $row;
        }
    
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->m_datatable->count_all($table),
            "recordsFiltered" => $this->m_datatable->count_filtered($table, $column_order, $column_search, $order = array('id' => 'asc'),$where=array('id_detail_motor_keluar'=>$this->input->post('id_motor_keluar')),$join),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }
    
    public function getMotor(){
        $query = $this->input->get('query');
        $data = $this->main_model->getMaster('penerimaan_motor', $like=array('nomesin'=>$query), $where=array('m_status'=>'1','status_jual'=>'1'));
        echo json_encode($data);
    }
    
    public function inputTemp(){
        if ($_POST) {
            if ($this->m_motor_keluar->saveTemp()) {
                $this->session->set_flashdata('success', 'Data Berhasil Di Tambah !');
            } else {
                $this->session->set_flashdata('error', 'Data Gagal Di Tambah !');
            }
            redirect("motor-keluar");
        } else {
            show_404();
        }
    }
    
    public function inputMotorList(){
        if ($_POST) {
            if ($this->m_motor_keluar->saveInputMotorList()) {
                $this->session->set_flashdata('success', 'Data Berhasil Di Tambah !');
            } else {
                $this->session->set_flashdata('error', 'Data Gagal Di Tambah !');
            }
            redirect("motor-keluar");
        } else {
            show_404();
        }
    }
    
    public function datatable_bulk_delete(){
       $id_array = $this->input->post('data_ids'); 
       $this->db->where_in('id_detail_motor_keluar', $id_array);
       $this->db->delete('detail_motor_keluar_temp');
        return true;
    }
    
    public function datatable_bulk_deletelistmotor(){
       $id_array = $this->input->post('data_ids'); 
       $this->db->where_in('id_motor_keluar', $id_array);
       $this->db->delete('detail_motor_keluar');
        return true;
    }
    
    public function get_gudang_to(){
        $id = $this->input->post('id');
        $gudang = $this->main_model->getMaster('m_gudang', $like=array(), $where=array('status_gudang'=>'1','id !='=>$id));
        foreach($gudang as $k=>$v){
            echo "<option value='".$v['id']."'>".$v['gudang']."</option>";
        }
    }

}
