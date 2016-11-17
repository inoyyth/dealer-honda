<?php

class Motor_terima extends MX_Controller {

    var $table = "penerimaan_motor";

    public function __construct() {
        parent::__construct();
        $this->load->model(array('M_motor_terima' => 'penerimaan_motor','Datatable_model'=>'m_datatable'));
        $this->load->library(array('upload', 'encrypt', 'Printpdf', 'Auth_log'));
        //set breadcrumb
        $this->breadcrumbs->push('Penerimaan Motor', '/import-penerimaan-baru');
    }

    public function index() {
        $data['list_gudang'] = $this->main_model->getMaster('m_gudang', $like = array(), $where = array('status_gudang' => '1'));
        $data['view'] = 'motor_terima/main';
        $this->load->view('default', $data);
    }
    
    public function get_list_temp(){
        $table = 'penerimaan_motor_temp';
        $column_order = array(null,'id','no_sj','tgl_sj','nomesin','norangka','tipe','warna');
        $column_search = array('id','no_sj','tgl_sj','nomesin','norangka','tipe','warna');
        $list = $this->m_datatable->get_datatables($table,$column_order,$column_search,$order=array('id'=>'asc'));
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $result) {
            $no++;
            $row = array();
            $row[] = '';
            $row[] = $result->id;
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
                        "recordsFiltered" => $this->m_datatable->count_filtered($table,$column_order,$column_search,$order=array('id'=>'asc')),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }

    public function add() {
        $this->breadcrumbs->push('Add', '/import-penerimaan-baru-tambah');
        $data['code'] = $this->main_model->generate_code($this->table, 'WRH', '-');
        $data['view'] = "motor_terima/add";
        $this->load->view('default', $data);
    }

    public function edit($id) {
        $this->breadcrumbs->push('Edit', '/import-penerimaan-baru-edit');
        $data['detail'] = $this->db->get_where($this->table, array('id' => $id))->row_array();
        $data['view'] = 'motor_terima/edit';
        $this->load->view('default', $data);
    }

    function delete($id) {
        $this->main_model->delete('penerimaan_motor', array('id' => $id), array('status_gudang' => '3'));
        redirect("import-penerimaan-baru");
    }

    function save() {
        if ($_POST) {
            if ($this->penerimaan_motor->save()) {
                $this->session->set_flashdata('success', 'Data Berhasil Di Simpan !');
            } else {
                $this->session->set_flashdata('error', 'Data Gagal Di Simpan !');
            }
            redirect("import-penerimaan-baru");
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
        $data['template'] = array("template" => "motor_terima/" . $_GET['template'], "filename" => $_GET['name']);
        $data['list'] = $this->penerimaan_motor->getdata($this->table, 0, 1000, $like = array(), $where = array('status_gudang!=' => '3'));
        $this->printpdf->create_pdf($data);
    }

    public function print_excel() {
        $data['template_excel'] = "motor_terima/" . $_GET['template'];
        $data['file_name'] = $_GET['name'];
        $data['list'] = $this->penerimaan_motor->getdata($this->table, 0, 1000, $like = array(), $where = array('status_gudang!=' => '3'));
        $this->load->view('template_excel', $data);
    }
    
    public function upload_excel(){
        if(!isset($_POST['save'])){	
        show_404();
        }else{
        $this->load->library("phpexcel/PHPExcel");
        $this->load->library("phpexcel/PHPExcel/IOFactory");
        $folder = "excel";
        if (!is_dir('./assets/' . $folder)) {
            mkdir('./assets/' . $folder, 0777, TRUE);
        }
        $fileName = $_FILES['excel_file']['name'];

        $config['upload_path']	= "./assets/".$folder;
        $config['upload_url']	= "./assets/".$folder;
        $config['file_name'] = $fileName;
        $config['allowed_types'] = 'xls|xlsx';
        $config['max_size']     = '20000';
        $this->load->library('upload');
        $this->upload->initialize($config);

        if($this->upload->do_upload('excel_file')){
            $this->upload->data();    
         }

        $media = $this->upload->data('excel_file');
        $inputFileName = "./assets/".$folder."/".$media['file_name'];

        //  Read your Excel workbook
        try {
            $inputFileType = IOFactory::identify($inputFileName);
            $objReader = IOFactory::createReader($inputFileType);
            $objPHPExcel = $objReader->load($inputFileName);
        } catch(Exception $e) {
            die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
        }

        //  Get worksheet dimensions
        $sheet = $objPHPExcel->getSheet(0);
        $highestRow = $sheet->getHighestRow();
        $highestColumn = $sheet->getHighestColumn();

        //  Loop through each row of the worksheet in turn
        for ($row = 2; $row <= $highestRow; $row++){                  //  Read a row of data into an array                 
                    $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                                            NULL,
                                            TRUE,
                                            FALSE);
            //  Insert row data array into your database of choice here
            $data = array(
                "brand_name"=> $rowData[0][0],
                "brand_description"=> $rowData[0][1],
                "brand_images"=> $rowData[0][2],
                "status"=>$rowData[0][3],
                "brand_child_id"=>$rowData[0][4],
            );
            $this->db->insert("brand",$data);
        }
        redirect("product_management/batchimport");
        }
    }

}
