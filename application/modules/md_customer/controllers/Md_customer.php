<?php

class Md_customer extends MX_Controller {

    var $table = "m_customer";

    public function __construct() {
        parent::__construct();
        $this->load->model(array('M_md_customer' => 'm_customer'));
        $this->load->library(array('upload', 'encrypt', 'Printpdf', 'Auth_log'));
        //set breadcrumb
        $this->breadcrumbs->push('Master Customer', '/master-customer');
    }

    public function index() {
        $data_session = $this->__getSession();
        $config['base_url'] = base_url() . 'master-customer-page';
        $config['total_rows'] = $this->main_model->countdata($this->table, $where = array());
        $config['per_page'] = (!empty($data_session['page']) ? $data_session['page'] : 10);
        $config['uri_segment'] = 2;
        $limit = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $this->pagination->initialize($config);
        $data['paging'] = $this->pagination->create_links();
        $data['data'] = $this->m_customer->getdata($this->table, $limit, $config['per_page'], $like = $data_session, $where = array('m_status!=' => '3'));
        $data['sr_data'] = $data_session;
        $data['view'] = 'md_customer/main';
        $this->load->view('default', $data);
    }

    public function edit($id) {
        $this->breadcrumbs->push('Edit', '/master-customer-edit');
        $data['detail'] = $this->db->get_where($this->table, array('id' => $id))->row_array();
        $data['view'] = 'md_customer/edit';
        $this->load->view('default', $data);
    }
    
    public function detail($id) {
        $this->breadcrumbs->push('Detail', '/master-customer-detail');
        $data['detail'] = $this->db->get_where($this->table, array('id' => $id))->row_array();
        $data['view'] = 'md_customer/detail';
        $this->load->view('default', $data);
    }

    function delete($id) {
        $this->main_model->delete('m_customer', array('id' => $id), array('m_status' => '3'));
        redirect("master-customer");
    }

    function save() {
        if ($_POST) {
            if ($this->m_customer->save()) {
                $this->session->set_flashdata('success', 'Data Berhasil Di Simpan !');
            } else {
                $this->session->set_flashdata('error', 'Data Gagal Di Simpan !');
            }
            redirect("master-customer");
        } else {
            show_404();
        }
    }

    public function __getSession() {
        if ($_POST) {
            return $data = array(
                'page' => set_session_table_search('page', $this->input->get_post('page', TRUE)),
                'no_ktp' => set_session_table_search('no_ktp', $this->input->get_post('no_ktp', TRUE)),
                'nama_customer' => set_session_table_search('nama_customer', $this->input->get_post('nama_customer', TRUE)),
                'alamat_customer' => set_session_table_search('alamat_customer', $this->input->get_post('alamat_customer', TRUE)),
                'handphone_customer' => set_session_table_search('handphone_customer', $this->input->get_post('handphone_customer', TRUE))
            );
        } else {
            return $data = array(
                'page' => $this->session->userdata('page'),
                'no_ktp' => $this->session->userdata('no_ktp'),
                'nama_customer' => $this->session->userdata('nama_customer'),
                'alamat_customer' => $this->session->userdata('alamat_customer'),
                'handphone_customer' => $this->session->userdata('handphone_customer')
            );
        }
    }

    public function print_pdf() {
        $data['template'] = array("template" => "md_customer/" . $_GET['template'], "filename" => $_GET['name']);
        $data['list'] = $this->m_customer->getdata($this->table, 0, 1000, $like = array(), $where = array('m_status!=' => '3'));
        $this->printpdf->create_pdf($data);
    }

    public function print_excel() {
        $data['template_excel'] = "md_customer/" . $_GET['template'];
        $data['file_name'] = $_GET['name'];
        $data['list'] = $this->m_customer->getdata($this->table, 0, 1000, $like = array(), $where = array('m_status!=' => '3'));
        $this->load->view('template_excel', $data);
    }

}
