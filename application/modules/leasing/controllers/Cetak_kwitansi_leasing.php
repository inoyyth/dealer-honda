<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of T_kwitansi_diskon
 *
 * @author Langit-Biru
 */
class Cetak_kwitansi_leasing extends MX_Controller {

    //put your code here

    var $table = "t_kwitansi_leasing";

    function __construct() {
        parent::__construct();

        $this->load->model(array('M_t_leasing' => 'leasing_m', 'Datatable_model' => 'm_datatable'));
        $this->load->library(array('upload', 'encrypt', 'Printpdf', 'Auth_log'));

        //set breadcrumb
        $this->breadcrumbs->push('Leasing Cetak Kwitansi', '/cetak-kwitansi-leasing');
    }

    public function index() {
        $data_session = $this->__getSession();

        $config['base_url'] = base_url() . 'cetak-kwitansi-leasing';
        $config['total_rows'] = $this->main_model->countdata($this->table, $where = array());
        $config['per_page'] = (!empty($data_session['page']) ? $data_session['page'] : 10);
        $config['uri_segment'] = 2;
        $limit = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $this->pagination->initialize($config);
        $data['paging'] = $this->pagination->create_links();
        $data['data'] = $this->leasing_m->getdata($this->table, $limit, $config['per_page'], $like = $data_session, $where = array());
        $data['sr_data'] = $data_session;

        //print_r($data_session);
        //die();

        $data['view'] = 'leasing/kwitansi_leasing/main';
        $this->load->view('default', $data);
    }

    public function form() {
        $data['nokwitansi'] = $this->main_model->generate_code($this->table, 'KWT/MKA/FIF/' . romanic_number(date('m')), '/', 6, $date = false, $loop = false,'id','nokwitansi');
        $data['codeso'] = $this->main_model->generate_code($this->table, 'KWT/KDS-' . date('Y') . '-' . romanic_number(date('m')), '-', 6, $date = false, $loop = false,'id','noso');
        $this->breadcrumbs->push('Leasing Cetak Kwitansi', '/cetak-kwitansi-leasing');
        $this->breadcrumbs->push('Add', '/cetak-kwitansi-leasing-tambah');
        $data['view'] = "leasing/kwitansi_leasing/print-form";
        $this->load->view('default', $data);
    }

    public function editform($id) {
        $this->breadcrumbs->push('Leasing Cetak Kwitansi', '/cetak-kwitansi-leasing');
        $this->breadcrumbs->push('Edit', '/cetak-kwitansi-leasing-edit');

        $data['kleasing'] = $this->db->get_where($this->table, array('id' => $id))->row_array();
        $data['so'] = $this->leasing_m->get_data_penjualan($data['kleasing']['noso']);

        $data['view'] = "leasing/kwitansi_leasing/print-form";
        $this->load->view('default', $data);
    }

    public function proses_ka() {
        $id = $this->uri->segment(2);
        $extract = str_replace("_", "/", $id);

        $data['list'] = $this->leasing_m->kwitansi_a($extract);

        $this->load->view('leasing/kwitansi_leasing/print_ka', $data);
    }

    public function proses_kb() {
        $id = $this->uri->segment(2);
        $extract = str_replace("_", "/", $id);

        $data['list'] = $this->leasing_m->kwitansi_b($extract);
        $this->load->view('leasing/kwitansi_leasing/print_kb', $data);
    }

    public function proses_kc() {
        $id = $this->uri->segment(2);
        $extract = str_replace("_", "/", $id);
        $data['list'] = $this->leasing_m->kwitansi_c($extract);
        $this->load->view('leasing/kwitansi_leasing/print_kc', $data);
    }

    public function proses_kc2() {
        $id = $this->uri->segment(2);
        $extract = str_replace("_", "/", $id);

        $data['list'] = $this->leasing_m->kwitansi_c2($extract);
        $this->load->view('leasing/kwitansi_leasing/print_kc2', $data);
    }

    public function add() {
        $this->breadcrumbs->push('Add', '/kwitansi-diskon');
        $data['codeso'] = $this->main_model->generate_code($this->table, 'KWT/KDS-' . date('Y') . '-' . romanic_number(date('m')), '-', 6, $date = false, $loop = false);
        $data['view'] = "t_kwitansi/kwitansi_diskon/add";
        $this->load->view('default', $data);
    }

    public function getSO() {
        $query = $this->input->get('query');
        $data = $this->leasing_m->getSO($query);
        echo json_encode($data);
    }

    public function save() {
        if ($_POST) {

            $check = $this->db->get_where($this->table, array('nokwitansi' => $this->input->post('nokwitansi')))->row();
            if (count($check) > 0) {
                if ($this->leasing_m->update_kw_leasing()) {
                    //$this->session->set_flashdata('success', 'Data Berhasil Di Simpan !');
                    if ($check->noso <> $this->input->post('noso')) {
                        $this->leasing_m->update_so_penjualan($this->input->post('noso'), 1);
                        $this->leasing_m->update_so_penjualan($check->noso, 0);
                    }
                    echo json_encode(array('success' => true, 'data' => $check));
                } else {
                    //$this->session->set_flashdata('error', 'Data Gagal Di Simpan !');
                    echo json_encode("success:false");
                }
            } else {
                if ($this->leasing_m->save_kw_leasing()) {
                    //$this->session->set_flashdata('success', 'Data Berhasil Di Simpan !');
                    $this->leasing_m->update_so_penjualan($this->input->post('noso'), 1);
                    echo json_encode(array('success' => true, 'data' => $check));
                } else {
                    //$this->session->set_flashdata('error', 'Data Gagal Di Simpan !');
                    echo json_encode("success:false");
                }
            }
        } else {
            show_404();
        }
    }

    function detail($id) {
        $this->breadcrumbs->push('Leasing Cetak Kwitansi', '/cetak-kwitansi-leasing');
        $this->breadcrumbs->push('Detail', '/cetak-kwitansi-leasing-detail');

        $data['kleasing'] = $this->db->get_where($this->table, array('id' => $id))->row_array();
        $data['so'] = $this->leasing_m->get_data_penjualan($data['kleasing']['noso']);

        $data['btnedit'] = "disabled";

        $data['view'] = "leasing/kwitansi_leasing/print-form";
        $this->load->view('default', $data);
    }

    public function printout() {
        //var_dump($_POST);

        $id = $this->uri->segment(2);
        $cek = str_replace("_", "/", $id);
        $data['list'] = $this->t_kwitansi->get_data_print($cek);
        //var_dump($data['list']);
        $data['template'] = array("template" => "t_kwitansi/kwitansi_diskon/" . $_GET['template'], "filename" => $_GET['name']);
        //$data['list'] = $this->M_t_kwitansi->getdata($this->table, 0, 1000, $like = array());
        $this->load->view('t_kwitansi/kwitansi_diskon/table_html', $data);
        //$this->printpdf->create_pdf($data);
    }

    function load_transaction_by_noso() {
        $noso = $this->input->post('noso');

        $result = $this->leasing_m->getdata_transaction_by_noso($noso);

        echo json_encode($result);
    }

    public function __getSession() {
        if ($_POST) {
            return $data = array(
                'page' => set_session_table_search('page', $this->input->get_post('page', TRUE)),
                'nokwitansi' => set_session_table_search('page', $this->input->get_post('nokwitansi', TRUE)),
                'noso' => set_session_table_search('noso', $this->input->get_post('noso', TRUE)),
                'dp_system' => set_session_table_search('nomsn', $this->input->get_post('nomsn', TRUE))
            );
        } else {
            return $data = array(
                'page' => $this->session->userdata('page'),
                'nokwitansi' => $this->session->userdata('nokwitansi'),
                'noso' => $this->session->userdata('noso'),
                'dp_system' => $this->session->userdata('dp_system')
            );
        }
    }
    
    public function print_pdf() {
        $data['template'] = array("template" => "leasing/kwitansi_leasing/" . $_GET['template'], "filename" => $_GET['name']);
        $data['list'] = $this->leasing_m->getdata($this->table, 0, 1000, $like = array(), $where = array('m_status!=' => '3'));
        $this->printpdf->create_pdf($data);
    }

    public function print_excel() {
        $data['template_excel'] = "leasing/kwitansi_leasing/" . $_GET['template'];
        $data['file_name'] = $_GET['name'];
        $data['list'] = $this->leasing_m->getdata($this->table, 0, 1000, $like = array(), $where = array('m_status!=' => '3'));
        $this->load->view('template_excel', $data);
    }

}
