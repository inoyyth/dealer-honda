<?php

class Backup_db extends MX_Controller {

    var $table = "m_backup_db";

    public function __construct() {
        parent::__construct();
        $this->load->model(array('M_backup_db' => 'm_backup_db'));
        $this->load->library(array('upload', 'Auth_log'));
//set breadcrumb
        $this->breadcrumbs->push('Backup Management', '/backup-database');
    }

    public function index() {
        $data_session = $this->__getSession();
        $config['base_url'] = base_url() . 'backup-database-page';
        $config['total_rows'] = $this->main_model->countdata($this->table, $where = array());
        $config['per_page'] = (!empty($data_session['page']) ? $data_session['page'] : 10);
        $config['uri_segment'] = 2;
        $limit = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $this->pagination->initialize($config);
        $data['paging'] = $this->pagination->create_links();
        $data['data'] = $this->m_backup_db->getdata($this->table, $limit, $config['per_page'], $like = $data_session, $where = array());
        $data['sr_data'] = $data_session;
        $data['view'] = 'backup_db/main';
        $this->load->view('default', $data);
    }

    public function add() {
        $this->load->dbutil();

        $prefs = array(
            'format' => 'zip',
            'filename' => 'my_db_backup.sql'
        );

        $backup = & $this->dbutil->backup($prefs);

        $db_name = 'backup-on-' . date("Y-m-d-H-i-s") . '.zip';
        $folder = "backupdb";
        if (!is_dir('./assets/' . $folder)) {
            mkdir('./assets/' . $folder, 0777, TRUE);
        }
        $save = 'assets/' . $folder . '/' . $db_name;
        chmod($save,777);
        
        $this->load->helper('file');

        //try {
            if (write_file($save, $backup)) {
                $this->db->insert('m_backup_db',$this->main_model->create_sys(array('backup_file'=>$db_name)));
                $this->load->helper('download');
                force_download($db_name, $backup);
            }
        //} catch (Exception $e) {
            //echo 'Caught exception: ', $e->getMessage(), "\n";
        //} finally {
            /*try {
                $this->db->insert('m_backup_db',$this->main_model->create_sys(array('backup_file'=>$db_name)));
            } catch (Exception $e) {
                echo 'Caught exception: ', $e->getMessage(), "\n";
            } finally {
                $this->load->helper('download');
                force_download($db_name, $backup);
            }
        }*/
    }

    public function edit($id) {
        $this->breadcrumbs->push('Edit', '/backup-database-edit');
		$this->load->helper('download');
		$db = $this->db->get_where('m_backup_db',array('id'=>$id))->row_array();
		$data = $db['backup_file'];
		$name = './assets/backupdb/'.$db['backup_file'];
		force_download($name, null);
		redirect("backup-database");
    }

    function delete($id) {
        $db = $this->db->get_where('m_backup_db',array('id'=>$id))->row_array();
		//var_dump($db['backup_file']);die;
        unlink('./assets/backupdb/'.$db['backup_file']);
        $this->db->delete('m_backup_db', array('id' => $id));
        redirect("backup-database");
    }

    function save() {
        if ($_POST) {
            if ($this->m_backup_db->save()) {
                $this->session->set_flashdata('success', 'Data Berhasil Di Simpan !');
            } else {
                $this->session->set_flashdata('error', 'Data Gagal Di Simpan !');
            }
            redirect("backup-database");
        } else {
            show_404();
        }
    }

    public function __getSession() {
        if ($_POST) {
            return $data = array(
                'page' => set_session_table_search('page', $this->input->get_post('page', TRUE)),
                'backup_file' => set_session_table_search('backup_file', $this->input->get_post('backup_file', TRUE)),
                'sys_create_date' => set_session_table_search('sys_create_date', $this->input->get_post('sys_create_date', TRUE))
            );
        } else {
            return $data = array(
                'page' => $this->session->userdata('page'),
                'backup_file' => $this->session->userdata('backup_file'),
                'sys_create_date' => $this->session->userdata('sys_create_date')
            );
        }
    }

    public function print_pdf() {
        $data['template'] = array("template" => "backup_db/" . $_GET['template'], "filename" => $_GET['name']);
        $data['list'] = $this->m_backup_db->getdata($this->table, 0, 1000, $like = array(), $where = array('status_gudang!=' => '3'));
        $this->printpdf->create_pdf($data);
    }

    public function print_excel() {
        $data['template_excel'] = "backup_db/" . $_GET['template'];
        $data['file_name'] = $_GET['name'];
        $data['list'] = $this->m_backup_db->getdata($this->table, 0, 1000, $like = array(), $where = array('status_gudang!=' => '3'));
        $this->load->view('template_excel', $data);
    }

}
