<?php

class t_void extends MX_Controller {
   
    var $table='t_void';
    
    function __construct() {
        parent::__construct();
        
        $this->load->model(array('M_t_void' => 't_void', 'Datatable_model' => 'm_datatable'));
        $this->load->library(array('Printpdf', 'Auth_log'));
        
        //set breadcrumb
        $this->breadcrumbs->push('Void Transaction', '/void');
    }   
    
    public function index() {
        $data_session = $this->__getSession();
        $config['base_url'] = base_url() . 'void-page';
        $config['total_rows'] = $this->main_model->countdata($this->table, $where = array());
        $config['per_page'] = (!empty($data_session['page']) ? $data_session['page'] : 10);
        $config['uri_segment'] = 2;
        $limit = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $this->pagination->initialize($config);
        $data['paging'] = $this->pagination->create_links();
        $data['data'] = $this->t_void->getdata($this->table, $limit, $config['per_page'], $like = $data_session, $where = array());
        $data['sr_data'] = $data_session;
        $data['view'] = 't_void/main';
        $this->load->view('default', $data);
    }
    
    public function __getSession() {
        if ($_POST) {
            return $data = array(
                'page' => set_session_table_search('page', $this->input->get_post('page', TRUE)),
                'noso' => set_session_table_search('noso', $this->input->get_post('noso', TRUE)),
                'nama_lengkap' => set_session_table_search('nama_lengkap', $this->input->get_post('nama_lengkap', TRUE)),
                'void_date' => set_session_table_search('void_date', $this->input->get_post('void_date', TRUE))
            );
        } else {
            return $data = array(
                'page' => $this->session->userdata('page'),
                'noso' => $this->session->userdata('noso'),
                'nama_lengkap' => $this->session->userdata('nama_lengkap'),
                'void_date' => $this->session->userdata('void_date')
            );
        }
    }
    
}
