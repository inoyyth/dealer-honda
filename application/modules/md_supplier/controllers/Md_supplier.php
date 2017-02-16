<?php

class Md_supplier extends MX_Controller {
    //put your code here
    
    var $table = "m_supplier";

    public function __construct() {
        parent::__construct();
        $this->load->model(array('M_md_supplier' => 'm_supplier'));
        $this->load->library(array('upload', 'encrypt', 'Printpdf', 'Auth_log'));
        //set breadcrumb
        $this->breadcrumbs->push('Master Supplier', '/master-supplier');
    }
    
    public function index() {       
        $data_session = $this->__getSession();
        $config['base_url'] = base_url() . 'master-supplier-page';
        $config['total_rows'] = $this->main_model->countdata($this->table, $where = array());
        $config['per_page'] = (!empty($data_session['page']) ? $data_session['page'] : 10);
        $config['uri_segment'] = 2;
        $limit = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $this->pagination->initialize($config);
        $data['paging'] = $this->pagination->create_links();
        $data['data'] = $this->m_supplier->getdata($this->table, $limit, $config['per_page'], $like = $data_session, $where = array('m_status!=' => '3'));
        $data['sr_data'] = $data_session;
        $data['view'] = 'md_supplier/main';
        $this->load->view('default', $data);
    }
    
    public function __getSession() {
        if ($_POST) {
            return $data = array(
                'page' => set_session_table_search('page', $this->input->get_post('page', TRUE)),
                'kdsupplier' => set_session_table_search('kdsupplier', $this->input->get_post('kdsupplier', TRUE)),
                'supplier' => set_session_table_search('supplier', $this->input->get_post('supplier', TRUE)),
                'alamat' => set_session_table_search('alamat', $this->input->get_post('alamat', TRUE)),
                'telp' => set_session_table_search('telp', $this->input->get_post('telp', TRUE)),
                'pic' => set_session_table_search('pic', $this->input->get_post('pic', TRUE)),
                'hp' => set_session_table_search('hp', $this->input->get_post('hp', TRUE)),
                'm_status' => set_session_table_search('m_status', $this->input->get_post('m_status', TRUE))
            );
        } else {
            return $data = array(
                'page' => $this->session->userdata('page'),
                'kdsupplier' => $this->session->userdata('kdsupplier'),
                'supplier' => $this->session->userdata('supplier'),
                'alamat' => $this->session->userdata('alamat'),
                'telp' => $this->session->userdata('telp'),
                'pic' => $this->session->userdata('pic'),
                'hp' => $this->session->userdata('hp'),
                'm_status' => $this->session->userdata('m_status')
            );
        }
    }
    
    public function add() {
        $this->breadcrumbs->push('Add', '/master-supplier-add');
        
        $data['view'] = "md_supplier/add";
        $this->load->view('default', $data);
    }
    
    public function edit($id) {
        $this->breadcrumbs->push('Edit', '/master-supplier-edit');
        $data['detail'] = $this->db->get_where($this->table, array('id' => $id))->row_array();
        $data['view'] = 'md_supplier/edit';
        $this->load->view('default', $data);
    }
    
    function save() {
        if ($_POST) {
            if ($this->m_supplier->save()) {
                $this->session->set_flashdata('success', 'Data Berhasil Di Simpan !');
            } else {
                $this->session->set_flashdata('error', 'Data Gagal Di Simpan !');
            }
            redirect("master-supplier");
        } else {
            show_404();
        }
    }
    
    function delete($id) {
        $this->main_model->delete('m_supplier', array('id' => $id), array('m_status' => '3'));
        redirect("master-supplier");
    }
    
    public function print_pdf() {
        $data['template'] = array("template" => "md_supplier/" . $_GET['template'], "filename" => $_GET['name']);
        $data['list'] = $this->m_supplier->getdata($this->table, 0, 1000, $like = array(), $where = array('m_status!=' => '3'));
        $this->printpdf->create_pdf($data);
    }

    public function print_excel() {
        $data['template_excel'] = "md_supplier/" . $_GET['template'];
        $data['file_name'] = $_GET['name'];
        $data['list'] = $this->m_supplier->getdata($this->table, 0, 1000, $like = array(), $where = array('m_status!=' => '3'));
        $this->load->view('template_excel', $data);
    }
    
}
