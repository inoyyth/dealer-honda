<?php

class Md_owner_info extends MX_Controller {

    var $table = "m_owner";

    public function __construct() {
        parent::__construct();
        $this->load->model(array('M_md_owner_info' => 'm_owner'));
        $this->load->library(array('upload', 'encrypt', 'Printpdf', 'Auth_log'));
        //set breadcrumb
        $this->breadcrumbs->push('Owner Settings', '/owner');
    }

    public function index() {
        $data['detail'] = $this->db->get_where($this->table,array('id'=>1))->row_array();
        $data['view'] = 'md_owner_info/edit';
        $this->load->view('default', $data);
    }

    function save() {
        if ($_POST) {
            if ($this->m_owner->save()) {
                $this->session->set_flashdata('success', 'Data Berhasil Di Simpan !');
            } else {
                $this->session->set_flashdata('error', 'Data Gagal Di Simpan !');
            }
            redirect("owner");
        } else {
            show_404();
        }
    }

}
