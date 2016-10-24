<?php

class Account extends MX_Controller {

    var $table = "account";

    public function __construct() {
        parent::__construct();
        $this->load->model(array('M_account' => 'm_account'));
        $this->load->library(array('upload', 'encrypt','Auth_log'));
        //set breadcrumb
        $this->breadcrumbs->push('User Management', '/user-management');
    }

    public function index() {
        $data_session = $this->__getSession();
        $config['base_url'] = base_url() . 'user-management-page';
        $config['total_rows'] = $this->main_model->countdata($this->table, $where = array());
        $config['per_page'] = (!empty($data_session['page']) ? $data_session['page'] : 10);
        $config['uri_segment'] = 2;
        $limit = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $this->pagination->initialize($config);
        $data['paging'] = $this->pagination->create_links();
        $data['data'] = $this->m_account->getdata($this->table, $limit, $config['per_page'], $like = $data_session);
        $data['sr_data'] = $data_session;
        $data['view'] = 'account/main';
        $this->load->view('default', $data);
    }

    public function add() {
        $data['list_menu'] = $this->m_account->get_active_menu();
        $data['view'] = "account/add";
        $this->load->view('default', $data);
    }

    public function edit($id) {
        //var_dump($id);die;
        $data['detail'] = $this->db->get_where($this->table, array('id' => $id))->row_array();
        $data['list_menu'] = $this->m_account->get_active_menu();
        $data['view'] = 'account/edit';
        $this->load->view('default', $data);
    }

    function delete($id) {
        if ($this->db->delete($this->table, array('id' => $id))) {
            $this->session->set_flashdata('success', 'Data Berhasil Di Hapus !');
        } else {
            $this->session->set_flashdata('error', 'Data Gagal Di Hapus !');
        }
        redirect("user-management");
    }

    function save() {
        //var_dump(serialize($_POST['menu']));die;
        if ($_POST) {
            if ($this->m_account->save()) {
                $this->session->set_flashdata('success', 'Data Berhasil Di Simpan !');
            } else {
                $this->session->set_flashdata('error', 'Data Gagal Di Simpan !');
            }
            redirect("user-management");
        } else {
            show_404();
        }
    }

    public function __getSession() {
        if ($_POST) {
            return $data = array(
                'page' => set_session_table_search('page', $this->input->get_post('page', TRUE)),
                'nama_lengkap' => set_session_table_search('nama_lengkap', $this->input->get_post('nama_lengkap', TRUE)),
                'no_telp' => set_session_table_search('no_telp', $this->input->get_post('no_telp', TRUE)),
                'email' => set_session_table_search('email', $this->input->get_post('email', TRUE)),
                'status' => set_session_table_search('status', $this->input->get_post('status', TRUE))
            );
        } else {
            return $data = array(
                'page' => $this->session->userdata('page'),
                'nama_lengkap' => $this->session->userdata('nama_lengkap'),
                'no_telp' => $this->session->userdata('no_telp'),
                'email' => $this->session->userdata('email'),
                'status' => $this->session->userdata('status')
            );
        }
    }

    public function print_pdf() {
        $data['template'] = array("template" => "account/" . $_GET['template'], "filename" => $_GET['name']);
        $data['list'] = $this->db->get($this->table)->result_array();
        $this->printpdf->create_pdf($data);
    }

    public function print_excel() {
        $data['template_excel'] = "account/" . $_GET['template'];
        $data['file_name'] = $_GET['name'];
        $data['list'] = $this->db->get($this->table)->result_array();
        $this->load->view('template_excel', $data);
    }

}
