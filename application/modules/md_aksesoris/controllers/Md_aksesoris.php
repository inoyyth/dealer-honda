<?php

class Md_aksesoris extends MX_Controller {

    var $table = "m_aksesoris";

    public function __construct() {
        parent::__construct();
        $this->load->model(array('M_md_aksesoris' => 'm_aksesoris'));
        $this->load->library(array('upload', 'encrypt', 'Printpdf','Auth_log'));
        //set breadcrumb
        $this->breadcrumbs->push('Master Karyawan', '/master-aksesoris');
    }

    public function index() {
        $data_session = $this->__getSession();
        $config['base_url'] = base_url() . 'master-aksesoris-page';
        $config['total_rows'] = $this->main_model->countdata($this->table, $where = array());
        $config['per_page'] = (!empty($data_session['page']) ? $data_session['page'] : 10);
        $config['uri_segment'] = 2;
        $limit = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $this->pagination->initialize($config);
        $data['paging'] = $this->pagination->create_links();
        $data['data'] = $this->m_aksesoris->getdata($this->table, $limit, $config['per_page'], $like = $data_session, $where = array('m_status!=' => '3'));
        $data['sr_data'] = $data_session;
        $data['view'] = 'md_aksesoris/main';
        $this->load->view('default', $data);
    }

    public function add() {
        $this->breadcrumbs->push('Add', '/master-aksesoris-tambah');
        $data['code'] = $this->main_model->generate_code($this->table, 'AKS', '-');
        $data['global_data'] = $this->main_model->getMaster('global_data', $like = array(), $where = array('global_data_status' => '1','group_data'=>'aksesoris'));
        $data['view'] = "md_aksesoris/add";
        $this->load->view('default', $data);
    }

    public function edit($id) {
        $this->breadcrumbs->push('Edit', '/master-aksesoris-edit');
        $data['code'] = $this->main_model->generate_code($this->table, 'AKS', '-',4,true);
        $data['detail'] = $this->db->get_where($this->table, array('id' => $id))->row_array();
        $data['global_data'] = $this->main_model->getMaster('global_data', $like = array(), $where = array('global_data_status' => '1','group_data'=>'aksesoris'));
        $data['view'] = 'md_aksesoris/edit';
        $this->load->view('default', $data);
    }

    function delete($id) {
        $this->main_model->delete('m_aksesoris', array('id' => $id), array('m_status' => '3'));
        redirect("master-aksesoris");
    }

    function save() {
        if ($_POST) {
            if ($this->m_aksesoris->save()) {
                $this->session->set_flashdata('success', 'Data Berhasil Di Simpan !');
            } else {
                $this->session->set_flashdata('error', 'Data Gagal Di Simpan !');
            }
            redirect("master-aksesoris");
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
            );
        } else {
            return $data = array(
                'page' => $this->session->userdata('page'),
                'kd_aksesoris' => $this->session->userdata('kd_aksesoris'),
                'aksesoris' => $this->session->userdata('aksesoris')
            );
        }
    }

    public function print_pdf() {
        $data['template'] = array("template" => "md_aksesoris/" . $_GET['template'], "filename" => $_GET['name']);
        $data['list'] = $this->m_aksesoris->getdata($this->table, 0, 1000, $like = array(), $where = array('m_status!=' => '3'));
        $this->printpdf->create_pdf($data);
    }

    public function print_excel() {
        $data['template_excel'] = "md_aksesoris/" . $_GET['template'];
        $data['file_name'] = $_GET['name'];
        $data['list'] = $this->m_aksesoris->getdata($this->table, 0, 1000, $like = array(), $where = array('m_status!=' => '3'));
        $this->load->view('template_excel', $data);
    }

}
