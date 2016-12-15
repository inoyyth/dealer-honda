<?php

class Stock extends MX_Controller {

    var $table = "m_jabatan";

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_in_admin')) {
            redirect(base_url());
        }
        $this->load->model(array('Datatable_model' => 'm_datatable','M_stock'=>'m_stock'));
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
        $data['gudang'] = $this->main_model->getMaster('m_gudang', $like = array(), $where = array('status_gudang' => '1'));
        $data['view'] = 'stock/main';
        $this->load->view('default', $data);
    }

    public function getMotorType() {
        $query = $this->input->get('query');
        $data = $this->main_model->getMaster('m_motor', $like = array('tipe_motor' => $query), $where = array('m_status' => '1'));
        echo json_encode($data);
    }

    public function get_list_motor() {
        $table = 'penerimaan_motor';
        $where = array();
        if (!empty($_POST['tipe']) && !empty($_POST['gudang'])) {
            $where = array('tipe' => $_POST['tipe'],'kdgudang' => $_POST['gudang']);
        } else if (!empty($_POST['gudang'])) {
            $where = array('kdgudang' => $_POST['gudang']);
        } else if (!empty($_POST['tipe'])) {
            $where = array('tipe' => $_POST['tipe']);
        }

       //dump($where);
        $join = array(
            array('table' => 'm_gudang', 'where' => 'penerimaan_motor.kdgudang=m_gudang.id', 'join' => 'INNER')
        );
        $column_order = array(null, 'gudang', 'tipe', 'warna');
        $column_search = array('penerimaan_motor.id AS idx', 'gudang', 'kdgudang', 'tipe', 'warna', 'count(*) as stok');
        $list = $this->m_datatable->get_datatables($table, $column_order, $column_search, $order = array('tipe'=>'ASC'), $where, $join, $group=array('tipe','kdgudang'));
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $result) {
            $no++;
            $row = array();
            $row[] = $no ;
            $row[] = $result->gudang;
            $row[] = $result->tipe;
            $row[] = $result->warna;
            $row[] = formatrp($result->stok);
            $row[] = "<button class='btn btn-success btn-sm' onclick='popDetail(".$result->kdgudang.",\"".$result->tipe."\")'>Detail</button>";

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->m_datatable->count_all($table),
            "recordsFiltered" => $this->m_datatable->count_filtered($table, $column_order, $column_search, $order = array('tipe'=>'ASC'), $where, $join, $group=array('tipe','kdgudang')),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }
    
    public function get_list_detail_motor(){
        $table = 'penerimaan_motor';
        $where = array('kdgudang'=>$_POST['gudang'],'tipe'=>$_POST['tipe']);
        $join = array(
            //array('table' => 'm_motor', 'where' => 'm_motor.tipe_motor=penerimaan_motor.tipe', 'join' => 'INNER')
        );
        $column_order = array(null, 'tahun','no_sj','tgl_sj','nomesin','norangka','tipe','warna');
        $column_search = array('tahun','no_sj','tgl_sj','nomesin','norangka','tipe','warna');
        $list = $this->m_datatable->get_datatables($table, $column_order, $column_search, $order = array('id'=>'ASC'), $where, $join, $group=array());
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $result) {
            $no++;
            $row = array();
            $row[] = $no ;
            $row[] = $result->tahun;
            $row[] = $result->no_sj;
            $row[] = $result->tgl_sj;
            $row[] = $result->nomesin;
            $row[] = $result->norangka;
            $row[] = $result->tipe;
            $row[] = $result->warna;

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->m_datatable->count_all($table),
            "recordsFiltered" => $this->m_datatable->count_filtered($table, $column_order, $column_search, $order = array('id'=>'ASC'), $where, $join, $group=array()),
            "data" => $data,
            "gudang" => $this->db->get_where('m_gudang', array('id' => $_POST['gudang']))->row('gudang'),
            "tipe" => $_POST['tipe'],
            "gudang_id" => $_POST['gudang']
        );
        //output to json format
        echo json_encode($output);
    }
    
    public function print_pdf() {$where = array();
        $where = array();
        if (!empty($_GET['tipe']) && !empty($_GET['gudang'])) {
            $where = array('tipe' => $_GET['tipe'],'kdgudang' => $_GET['gudang'], 'm_status!=' => '3');
        } else if (!empty($_GET['gudang'])) {
            $where = array('kdgudang' => $_GET['gudang'], 'm_status!=' => '3');
        } else if (!empty($_GET['tipe'])) {
            $where = array('tipe' => $_GET['tipe'], 'm_status!=' => '3');
        }
        $data['template'] = array("template" => "stock/" . $_GET['template'], "filename" => $_GET['name']);
        $data['list'] = $this->m_stock->getdata('penerimaan_motor', 0, 1000, $like = array(), $where);

        $this->printpdf->create_pdf($data);
    }

    public function print_excel() {

        $data['template_excel'] = "md_jabatan/" . $_GET['template'];
        $data['file_name'] = $_GET['name'];
        $data['list'] = $this->db->get($this->table)->result_array();

         $where = array();
        if (!empty($_GET['tipe']) && !empty($_GET['gudang'])) {
            $where = array('tipe' => $_GET['tipe'],'kdgudang' => $_GET['gudang'], 'm_status!=' => '3');
        } else if (!empty($_GET['gudang'])) {
            $where = array('kdgudang' => $_GET['gudang'], 'm_status!=' => '3');
        } else if (!empty($_GET['tipe'])) {
            $where = array('tipe' => $_GET['tipe'], 'm_status!=' => '3');
        }
        $data['template_excel'] = "stock/" . $_GET['template'];
        $data['file_name'] = $_GET['name'];
        $data['list'] = $this->m_stock->getdata('penerimaan_motor', 0, 1000, $like = array(), $where);
        $this->load->view('template_excel', $data);
    }
    
    public function print_pdf_detail() {$where = array();
        $where = array();
        if (!empty($_GET['tipe']) && !empty($_GET['gudang'])) {
            $where = array('tipe' => $_GET['tipe'],'kdgudang' => $_GET['gudang'], 'm_status!=' => '3');
        } else if (!empty($_GET['gudang'])) {
            $where = array('kdgudang' => $_GET['gudang'], 'm_status!=' => '3');
        } else if (!empty($_GET['tipe'])) {
            $where = array('tipe' => $_GET['tipe'], 'm_status!=' => '3');
        }
        $data['template'] = array("template" => "stock/" . $_GET['template'], "filename" => $_GET['name']);
        $data['list'] = $this->m_stock->getdata_detail('penerimaan_motor', 0, 1000, $like = array(), $where);
        $this->printpdf->create_pdf($data);
    }
    
    public function print_excel_detail() {
         $where = array();
        if (!empty($_GET['tipe']) && !empty($_GET['gudang'])) {
            $where = array('tipe' => $_GET['tipe'],'kdgudang' => $_GET['gudang'], 'm_status!=' => '3');
        } else if (!empty($_GET['gudang'])) {
            $where = array('kdgudang' => $_GET['gudang'], 'm_status!=' => '3');
        } else if (!empty($_GET['tipe'])) {
            $where = array('tipe' => $_GET['tipe'], 'm_status!=' => '3');
        }
        $data['template_excel'] = "stock/" . $_GET['template'];
        $data['file_name'] = $_GET['name'];
        $data['list'] = $this->m_stock->getdata_detail('penerimaan_motor', 0, 1000, $like = array(), $where);

        $this->load->view('template_excel', $data);
    }

}
