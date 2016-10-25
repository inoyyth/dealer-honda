<?php     
class Md_leasing extends MX_Controller
{
	var $table = "m_leasing";
	 public function __construct() {
        parent::__construct();
		$this->load->model(array('M_md_leasing'=>'m_leasing'));
		$this->load->library(array('upload','encrypt','Printpdf','Auth_log'));
		//set breadcrumb
		$this->breadcrumbs->push('Master Leasing', '/master-leasing');
    }
	
	public function index(){
		$data_session = $this->__getSession();
		$config['base_url'] = base_url().'master-leasing-page';
        $config['total_rows'] = $this->main_model->countdata($this->table,$where=array());
        $config['per_page'] = (!empty($data_session['page'])?$data_session['page']:10);
        $config['uri_segment'] = 2;
        $limit = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0 ;
        $this->pagination->initialize($config);
        $data['paging'] = $this->pagination->create_links();
        $data['data'] = $this->m_leasing->getdata($this->table,$limit,$config['per_page'],$like=$data_session,$where=array('status_leasing!='=>'3'));
		$data['sr_data'] = $data_session;
		$data['view'] = 'md_leasing/main';
		$this->load->view('default',$data);
	}
	
	public function add(){
        $data['list_karyawan'] = $this->main_model->getMaster('m_karyawan',$like=array(),$where=array('status_karyawan'=>'1'));
        $data['code'] =  $this->main_model->generate_code($this->table,'LSN','-');
		$data['view']="md_leasing/add";
		$this->load->view('default',$data);
	}
	
	public function edit($id){
        $data['list_karyawan'] = $this->main_model->getMaster('m_karyawan',$like=array(),$where=array('status_karyawan'=>'1'));
		$data['detail'] = $this->db->get_where($this->table,array('id'=>$id))->row_array();
		$data['view'] = 'md_leasing/edit';
		$this->load->view('default',$data);
	}
	
	function delete($id){
        $this->main_model->delete('m_leasing',array('id'=>$id),array('status_leasing'=>'3'));
        redirect("master-leasing");
    }
    
    function save(){
        if($_POST){
            if($this->m_leasing->save()){
                $this->session->set_flashdata('success', 'Data Berhasil Di Simpan !');
            }else{
                $this->session->set_flashdata('error', 'Data Gagal Di Simpan !');
            }
            redirect("master-leasing");
        }else{
            show_404();
        }
    }
	
	public function __getSession(){
		 if($_POST){
			return $data = array(
				'page'=>set_session_table_search('page',$this->input->get_post('page',TRUE)),
                'kd_leasing'=>set_session_table_search('kd_leasing',$this->input->get_post('kd_leasing',TRUE)),
				'leasing'=>set_session_table_search('leasing',$this->input->get_post('leasing',TRUE)),
				'alamat'=>set_session_table_search('alamat',$this->input->get_post('alamat',TRUE)),
                'telepon'=>set_session_table_search('telepon',$this->input->get_post('telepon',TRUE)),
                'email'=>set_session_table_search('email',$this->input->get_post('email',TRUE)),
                'kd_karyawan'=>set_session_table_search('kd_karyawan',$this->input->get_post('kd_karyawan',TRUE)),
				'status_leasing'=>set_session_table_search('status_leasing',$this->input->get_post('status_leasing',TRUE))
			 );
		 }else{
                return $data = array(
				'page'=>$this->session->userdata('page'),
				'kd_leasing'=>$this->session->userdata('kd_leasing'),
                'leasing'=>$this->session->userdata('leasing'),
				'alamat'=>$this->session->userdata('alamat'),
                'telepon'=>$this->session->userdata('telepon'),
                'email'=>$this->session->userdata('email'),
                'kd_karyawan'=>$this->session->userdata('kd_karyawan'),
				'status_leasing'=>$this->session->userdata('status_leasing')
			 );
		}
	}
	
	public function print_pdf(){
		$data['template'] = array("template"=>"md_leasing/".$_GET['template'],"filename"=>$_GET['name']);
		$data['list'] = $this->m_leasing->getdata($this->table,0,1000,$like=array(),$where=array('status_leasing!='=>'3'));
		$this->printpdf->create_pdf($data);
	}
	
	public function print_excel(){
		 $data['template_excel'] = "md_leasing/".$_GET['template'];
		 $data['file_name'] = $_GET['name'];
		 $data['list'] = $this->m_leasing->getdata($this->table,0,1000,$like=array(),$where=array('status_leasing!='=>'3'));
		 $this->load->view('template_excel',$data);
	}
}