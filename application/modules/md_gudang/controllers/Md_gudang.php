<?php

class Md_gudang extends MX_Controller {

    var $table = "m_gudang";

    public function __construct() {
        parent::__construct();
        $this->load->model(array('M_md_gudang' => 'm_gudang'));
        $this->load->library(array('upload', 'encrypt', 'Printpdf', 'Auth_log'));
        //set breadcrumb
        $this->breadcrumbs->push('Master Gudang', '/master-gudang');
    }

    public function index() {
        $data_session = $this->__getSession();
        $config['base_url'] = base_url() . 'master-gudang-page';
        $config['total_rows'] = $this->main_model->countdata($this->table, $where = array());
        $config['per_page'] = (!empty($data_session['page']) ? $data_session['page'] : 10);
        $config['uri_segment'] = 2;
        $limit = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $this->pagination->initialize($config);
        $data['paging'] = $this->pagination->create_links();
        $data['data'] = $this->m_gudang->getdata($this->table, $limit, $config['per_page'], $like = $data_session, $where = array('status_gudang!=' => '3'));
        $data['sr_data'] = $data_session;
        $data['view'] = 'md_gudang/main';
        $this->load->view('default', $data);
    }

    public function add() {
        $this->breadcrumbs->push('Add', '/master-gudang-tambah');
        $data['code'] = $this->main_model->generate_code($this->table, 'WRH', '-', 4, false, false, 'id', 'kd_gudang');
        $data['view'] = "md_gudang/add";
        $this->load->view('default', $data);
    }

    public function edit($id) {
        $this->breadcrumbs->push('Edit', '/master-gudang-edit');
        $data['detail'] = $this->db->get_where($this->table, array('id' => $id))->row_array();
        $data['view'] = 'md_gudang/edit';
        $this->load->view('default', $data);
    }

    function delete($id) {
        $this->main_model->delete('m_gudang', array('id' => $id), array('status_gudang' => '3'));
        redirect("master-gudang");
    }

    function save() {
        if ($_POST) {
            if ($this->m_gudang->save()) {
                $this->session->set_flashdata('success', 'Data Berhasil Di Simpan !');
            } else {
                $this->session->set_flashdata('error', 'Data Gagal Di Simpan !');
            }
            redirect("master-gudang");
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
        $data['template'] = array("template" => "md_gudang/" . $_GET['template'], "filename" => $_GET['name']);
        $data['list'] = $this->m_gudang->getdata($this->table, 0, 1000, $like = array(), $where = array('status_gudang!=' => '3'));
        $this->printpdf->create_pdf($data);
    }

    public function print_excel() {
        $data['template_excel'] = "md_gudang/" . $_GET['template'];
        $data['file_name'] = $_GET['name'];
        $data['list'] = $this->m_gudang->getdata($this->table, 0, 1000, $like = array(), $where = array('status_gudang!=' => '3'));
        $this->load->view('template_excel', $data);
    }

}
