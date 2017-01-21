<?php

class Md_birojasa extends MX_Controller {

    var $table = "m_biro_jasa";

    public function __construct() {
        parent::__construct();
        $this->load->model(array('M_md_birojasa' => 'm_biro_jasa'));
        $this->load->library(array('upload', 'encrypt', 'Printpdf', 'Auth_log'));
        //set breadcrumb
        $this->breadcrumbs->push('Master Biro Jasa', '/master-biro-jasa');
    }

    public function index() {
        $data_session = $this->__getSession();
        $config['base_url'] = base_url() . 'master-biro-jasa-page';
        $config['total_rows'] = $this->main_model->countdata($this->table, $where = array());
        $config['per_page'] = (!empty($data_session['page']) ? $data_session['page'] : 10);
        $config['uri_segment'] = 2;
        $limit = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $this->pagination->initialize($config);
        $data['paging'] = $this->pagination->create_links();
        $data['data'] = $this->m_biro_jasa->getdata($this->table, $limit, $config['per_page'], $like = $data_session, $where = array('status_birojasa!=' => '3'));
        $data['sr_data'] = $data_session;
        $data['view'] = 'md_birojasa/main';
        $this->load->view('default', $data);
    }

    public function add() {
        $this->breadcrumbs->push('Add', '/master-biro-jasa-tambah');
        $data['code'] = $this->main_model->generate_code($this->table, 'WRH', '-');
        $data['view'] = "md_birojasa/add";
        $this->load->view('default', $data);
    }

    public function edit($id) {
        $this->breadcrumbs->push('Edit', '/master-biro-jasa-edit');
        $data['detail'] = $this->db->get_where($this->table, array('id' => $id))->row_array();
        $data['view'] = 'md_birojasa/edit';
        $this->load->view('default', $data);
    }

    function delete($id) {
        $this->main_model->delete('m_biro_jasa', array('id' => $id), array('status_birojasa' => '3'));
        redirect("master-biro-jasa");
    }

    function save() {
        if ($_POST) {
            if ($this->m_biro_jasa->save()) {
                $this->session->set_flashdata('success', 'Data Berhasil Di Simpan !');
            } else {
                $this->session->set_flashdata('error', 'Data Gagal Di Simpan !');
            }
            redirect("master-biro-jasa");
        } else {
            show_404();
        }
    }

    public function __getSession() {
        if ($_POST) {
            return $data = array(
                'page' => set_session_table_search('page', $this->input->get_post('page', TRUE)),
                'nama_birojasa' => set_session_table_search('nama_birojasa', $this->input->get_post('nama_birojasa', TRUE)),
                'telepon_birojasa' => set_session_table_search('telepon_birojasa', $this->input->get_post('telepon_birojasa', TRUE)),
                'pic_birojasa' => set_session_table_search('pic_birojasa', $this->input->get_post('pic_birojasa', TRUE)),
                'status_birojasa' => set_session_table_search('status_birojasa', $this->input->get_post('status_birojasa', TRUE))
            );
        } else {
            return $data = array(
                'page' => $this->session->userdata('page'),
                'nama_birojasa' => $this->session->userdata('nama_birojasa'),
                'telepon_birojasa' => $this->session->userdata('telepon_birojasa'),
                'pic_birojasa' => $this->session->userdata('pic_birojasa'),
                'status_birojasa' => $this->session->userdata('status_birojasa')
            );
        }
    }

    public function print_pdf() {
        $data['template'] = array("template" => "md_birojasa/" . $_GET['template'], "filename" => $_GET['name']);
        $data['list'] = $this->m_biro_jasa->getdata($this->table, 0, 1000, $like = array(), $where = array('status_birojasa!=' => '3'));
        $this->printpdf->create_pdf($data);
    }

    public function print_excel() {
        $data['template_excel'] = "md_birojasa/" . $_GET['template'];
        $data['file_name'] = $_GET['name'];
        $data['list'] = $this->m_biro_jasa->getdata($this->table, 0, 1000, $like = array(), $where = array('status_birojasa!=' => '3'));
        $this->load->view('template_excel', $data);
    }

}
