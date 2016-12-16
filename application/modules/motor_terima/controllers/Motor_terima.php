<?php

class Motor_terima extends MX_Controller {

    var $table = "penerimaan_motor";

    public function __construct() {
        parent::__construct();
        $this->load->model(array('M_motor_terima' => 'penerimaan_motor', 'Datatable_model' => 'm_datatable'));
        $this->load->library(array('upload', 'encrypt', 'Printpdf', 'Auth_log'));
        //set breadcrumb
        $this->breadcrumbs->push('Penerimaan Motor', '/import-penerimaan-baru');
    }

    public function index() {
        $data['list_gudang'] = $this->main_model->getMaster('m_gudang', $like = array(), $where = array('status_gudang' => '1'));
        $data['view'] = 'motor_terima/main';
        $this->load->view('default', $data);
    }

    public function get_list_temp() {
        $table = 'penerimaan_motor_temp';
        $join = array(
            array('table' => 'm_gudang', 'where' => 'penerimaan_motor_temp.kdgudang=m_gudang.id', 'join' => 'left')
        );
        $column_order = array(null, 'id_temp', 'no_sj', 'tgl_sj', 'nomesin', 'norangka', 'tipe', 'warna', 'gudang');
        $column_search = array('id_temp', 'no_sj', 'tgl_sj', 'nomesin', 'norangka', 'tipe', 'warna', 'gudang');
        $list = $this->m_datatable->get_datatables($table, $column_order, $column_search, $order = array('id_temp' => 'asc'), $where = array($table . '.sys_create_user' => $this->sessionGlobal['id']), $join);
        $dataOriginal = $this->m_datatable->get_datatablesoriginal($table, $column_order, $column_search, $order = array('id_temp' => 'asc'), $where = array($table . '.sys_create_user' => $this->sessionGlobal['id']), $join);
        $dtDuplicate = array();
        $dtDuplicate2 = array();
        foreach ($dataOriginal as $result) {
            $dtDuplicate[] = $result->nomesin;
            $dtDuplicate2[] = $result->norangka;
        }
        $dpc1 = "'" . implode("', '", $dtDuplicate) . "'";
        $dpc2 = "'" . implode("', '", $dtDuplicate2) . "'";

        $getDuplicate = $this->db->query("SELECT nomesin,norangka FROM penerimaan_motor WHERE nomesin in ($dpc1) OR norangka in ($dpc2)")->result_array();

        $dtDuplicateFix = array();
        $dtDuplicateFix2 = array();
        foreach ($getDuplicate as $result) {
            $dtDuplicateFix[] = $result['nomesin'];
            $dtDuplicateFix2[] = $result['norangka'];
        }

        $no = $_POST['start'];
        $data = array();
        foreach ($list as $result) {
            $no++;
            $row = array();
            if (count($getDuplicate) > 0) {
                $row[] = $no;
            } else {
                $row[] = "<input type='checkbox'  class='deleteRow' value='" . $result->id_temp . "'  /> " . $no;
            }
            $row[] = $result->id_temp;
            $row[] = $result->no_sj;
            $row[] = $result->tgl_sj;
            if (in_array($result->nomesin, $dtDuplicateFix)) {
                $row[] = "<b style='color: red;'>" . $result->nomesin . "</b>";
            } else {
                $row[] = $result->nomesin;
            }
            if (in_array($result->norangka, $dtDuplicateFix2)) {
                $row[] = "<b style='color: red;'>" . $result->norangka . "</b>";
            } else {
                $row[] = $result->norangka;
            }
            $row[] = $result->tipe;
            $row[] = $result->warna;
            $row[] = $result->gudang;

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->m_datatable->count_all($table, $where = array($table . '.sys_create_user' => $this->sessionGlobal['id'])),
            "recordsFiltered" => $this->m_datatable->count_filtered($table, $column_order, $column_search, $order = array('id_temp' => 'asc'), $where = array($table . '.sys_create_user' => $this->sessionGlobal['id']), $join),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    public function print_excel() {
        $data['template_excel'] = "motor_terima/" . $_GET['template'];
        $data['file_name'] = $_GET['name'];
        $data['list'] = $this->penerimaan_motor->getdata($this->table, 0, 1000, $like = array(), $where = array('status_gudang!=' => '3'));
        $this->load->view('template_excel', $data);
    }

    public function datatable_bulk_save() {
        $id_array = $this->input->post('data_ids');
        $this->db->where_in('id_temp', $id_array);
        $query = $this->db->get('penerimaan_motor_temp')->result_array();
        $dt = array();
        foreach ($query as $kQuery => $vQuery) {
            $dt[] = array(
                'nopolisi' => $vQuery['nopolisi'],
                'tgl_sj' => $vQuery['tgl_sj'],
                'no_sj' => $vQuery['no_sj'],
                'no_so' => $vQuery['no_so'],
                'nomesin' => $vQuery['nomesin'],
                'norangka' => $vQuery['norangka'],
                'tipe' => $vQuery['tipe'],
                'warna' => $vQuery['warna'],
                'tahun' => $vQuery['tahun'],
                'kdgudang' => $vQuery['kdgudang'],
                'tglupload' => date('Y-m-d H:i:s'),
                'sys_create_user' => $this->sessionGlobal['id'],
                'sys_create_date' => date('Y-m-d H:i:s'),
                'namafile' => $vQuery['namafile']
            );
        }

        $this->penerimaan_motor->insertData($dt);
        $this->db->where_in('id_temp', $id_array);
        $this->db->delete('penerimaan_motor_temp');
        return true;
    }

    public function datatable_bulk_delete() {
        $id_array = $this->input->post('data_ids');
        $this->db->where_in('id_temp', $id_array);
        $this->db->delete('penerimaan_motor_temp');
        return true;
    }

    public function datatable_bulk_delete_all() {
        $this->db->delete('penerimaan_motor_temp', array('sys_create_user' => $this->sessionGlobal['id']));
        return true;
    }

    public function upload_excel() {
        if (!isset($_POST)) {
            show_404();
        } else {
            $this->load->library("phpexcel/PHPExcel");
            $this->load->library("phpexcel/PHPExcel/IOFactory");
            $folder = "excel";
            if (!is_dir('./assets/' . $folder)) {
                mkdir('./assets/' . $folder, 0777, TRUE);
            }
            $fileName = $_FILES['excel_file']['name'];

            $config['upload_path'] = "./assets/" . $folder;
            $config['upload_url'] = "./assets/" . $folder;
            $config['file_name'] = $fileName;
            $config['allowed_types'] = 'xls|xlsx';
            $config['max_size'] = '20000';
            $this->load->library('upload');
            $this->upload->initialize($config);

            if ($this->upload->do_upload('excel_file')) {
                $media = $this->upload->data();
            }

            $inputFileName = "./assets/" . $folder . "/" . $media['file_name'];

            //  Read your Excel workbook
            try {
                $inputFileType = IOFactory::identify($inputFileName);
                $objReader = IOFactory::createReader($inputFileType);
                $objPHPExcel = $objReader->load($inputFileName);
            } catch (Exception $e) {
                die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME) . '": ' . $e->getMessage());
            }

            $this->db->delete('penerimaan_motor_temp', array('sys_create_user' => $this->sessionGlobal['id']));

            //  Get worksheet dimensions
            $sheet = $objPHPExcel->getSheet(0);
            $highestRow = $sheet->getHighestRow();
            $highestColumn = $sheet->getHighestColumn();

            //  Loop through each row of the worksheet in turn
            for ($row = 2; $row <= $highestRow; $row++) {                  //  Read a row of data into an array                 
                $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);
                //  Insert row data array into your database of choice here
                $data = array(
                    "nopolisi" => $rowData[0][0],
                    "tgl_sj" => $rowData[0][1],
                    "no_sj" => $rowData[0][2],
                    "no_so" => $rowData[0][3],
                    "nomesin" => $rowData[0][4],
                    "norangka" => $rowData[0][5],
                    "tipe" => $rowData[0][6],
                    "warna" => $rowData[0][7],
                    "tahun" => $rowData[0][8],
                    "kdgudang" => $rowData[0][9],
                    "sys_create_user" => $this->sessionGlobal['id'],
                    "namafile" => $media['file_name']
                );
                //$this->db->insert("penerimaan_motor_temp", $data);
                $sql = $this->db->insert_string('penerimaan_motor_temp', $data) . ' ON DUPLICATE KEY UPDATE nomesin=nomesin,norangka=norangka';
                $this->db->query($sql);
            }
            return true;
        }
    }

}
