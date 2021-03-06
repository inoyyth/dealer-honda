<?php

class Md_jabatan extends MX_Controller {

    var $table = "m_jabatan";

    public function __construct() {
        parent::__construct();
        if(!$this->session->userdata('logged_in_admin')){
            redirect(base_url());
        }
        $this->load->model(array('M_md_jabatan' => 'm_jabatan'));
        $this->load->library('Printpdf', 'Auth_log');
        //set breadcrumb
        $this->breadcrumbs->push('Master Jabatan', '/master-jabatan');
    }

    public function index() {
        $data_session = $this->__getSession();
        $config['base_url'] = base_url() . 'master-jabatan-page';
        $config['total_rows'] = $this->main_model->countdata($this->table, $where = array());
        $config['per_page'] = (!empty($data_session['page']) ? $data_session['page'] : 10);
        $config['uri_segment'] = 2;
        $limit = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $this->pagination->initialize($config);
        $data['paging'] = $this->pagination->create_links();
        $data['data'] = $this->m_jabatan->getdata($this->table, $limit, $config['per_page'], $like = $data_session, $where = array('status_jabatan!=' => '3'));
        $data['sr_data'] = $data_session;
        $data['view'] = 'md_jabatan/main';
        $this->load->view('default', $data);
    }

    public function add() {
        $this->breadcrumbs->push('Add', '/master-jabatan-tambah');
        $data['view'] = "md_jabatan/add";
        $this->load->view('default', $data);
    }

    public function edit($id) {
        $this->breadcrumbs->push('Edit', '/master-jabatan-edit');
        $data['detail'] = $this->db->get_where($this->table, array('id' => $id))->row_array();
        $data['view'] = 'md_jabatan/edit';
        $this->load->view('default', $data);
    }

    function delete($id) {
        $this->main_model->delete('m_jabatan', array('id' => $id), array('status_jabatan' => '3'));
        redirect("master-jabatan");
    }

    function save() {
        if ($_POST) {
            if ($this->m_jabatan->save()) {
                $this->session->set_flashdata('success', 'Data Berhasil Di Simpan !');
            } else {
                $this->session->set_flashdata('error', 'Data Gagal Di Simpan !');
            }
            redirect("master-jabatan");
        } else {
            show_404();
        }
    }

    public function __getSession() {
        if ($_POST) {
            return $data = array(
                'page' => set_session_table_search('page', $this->input->get_post('page', TRUE)),
                'jabatan' => set_session_table_search('jabatan', $this->input->get_post('jabatan', TRUE)),
                'keterangan' => set_session_table_search('keterangan', $this->input->get_post('keterangan', TRUE)),
                'status_jabatan' => set_session_table_search('status_jabatan', $this->input->get_post('status_jabatan', TRUE))
            );
        } else {
            return $data = array(
                'page' => $this->session->userdata('page'),
                'jabatan' => $this->session->userdata('jabatan'),
                'keterangan' => $this->session->userdata('keterangan'),
                'status_jabatan' => $this->session->userdata('status_jabatan')
            );
        }
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

}
