<?php     
class Md_karyawan extends MX_Controller
{
	var $table = "m_karyawan";
	 public function __construct() {
        parent::__construct();
		$this->load->model(array('M_md_karyawan'=>'m_karyawan'));
		$this->load->library(array('upload','encrypt','Printpdf'));
		//set breadcrumb
		$this->breadcrumbs->push('Master Karyawan', '/master-karyawan');
    }
	
	public function index(){
		$data_session = $this->__getSession();
		$config['base_url'] = base_url().'master-karyawan-page';
        $config['total_rows'] = $this->main_model->countdata($this->table,$where=array());
        $config['per_page'] = (!empty($data_session['page'])?$data_session['page']:10);
        $config['uri_segment'] = 2;
        $limit = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0 ;
        $this->pagination->initialize($config);
        $data['paging'] = $this->pagination->create_links();
        $data['data'] = $this->m_karyawan->getdata($this->table,$limit,$config['per_page'],$like=$data_session,$where=array('status_karyawan!='=>'3'));
		$data['sr_data'] = $data_session;
        $data['list_jabatan'] = $this->main_model->getMaster('m_jabatan',$like=array(),$where=array('status_jabatan'=>'1'));
		$data['view'] = 'md_karyawan/main';
		$this->load->view('default',$data);
	}
	
	public function add(){
        $data['code'] =  $this->main_model->generate_code($this->table,'EMP','-');
        $data['list_jabatan'] = $this->main_model->getMaster('m_jabatan',$like=array(),$where=array('status_jabatan'=>'1'));
		$data['view']="md_karyawan/add";
		$this->load->view('default',$data);
	}
	
	public function edit($id){
		$data['detail'] = $this->db->get_where($this->table,array('id'=>$id))->row_array();
        $data['list_jabatan'] = $this->main_model->getMaster('m_jabatan',$like=array(),$where=array('status_jabatan'=>'1'));
		$data['view'] = 'md_karyawan/edit';
		$this->load->view('default',$data);
	}
	
	function delete($id){
        $this->main_model->delete('m_karyawan',array('id'=>$id),array('status_karyawan'=>'3'));
        redirect("master-karyawan");
    }
    
    function save(){
        if($_POST){
            if($this->m_karyawan->save()){
                $this->session->set_flashdata('success', 'Data Berhasil Di Simpan !');
            }else{
                $this->session->set_flashdata('error', 'Data Gagal Di Simpan !');
            }
            redirect("master-karyawan");
        }else{
            show_404();
        }
    }
	
	public function __getSession(){
		 if($_POST){
			return $data = array(
				'page'=>set_session_table_search('page',$this->input->get_post('page',TRUE)),
                'kd_karyawan'=>set_session_table_search('kd_karyawan',$this->input->get_post('kd_karyawan',TRUE)),
				'karyawan'=>set_session_table_search('karyawan',$this->input->get_post('karyawan',TRUE)),
				'kd_jabatan_karyawan'=>set_session_table_search('kd_jabatan_karyawan',$this->input->get_post('kd_jabatan_karyawan',TRUE)),
                'tgl_masuk'=>set_session_table_search('tgl_masuk',$this->input->get_post('tgl_masuk',TRUE)),
				'status_karyawan'=>set_session_table_search('status_karyawan',$this->input->get_post('status_karyawan',TRUE))
			 );
		 }else{
                return $data = array(
				'page'=>$this->session->userdata('page'),
				'kd_karyawan'=>$this->session->userdata('kd_karyawan'),
                'karyawan'=>$this->session->userdata('karyawan'),
				'kd_jabatan_karyawan'=>$this->session->userdata('kd_jabatan_karyawan'),
                'tgl_masuk'=>$this->session->userdata('tgl_masuk'),
				'status_karyawan'=>$this->session->userdata('status_karyawan')
			 );
		}
	}
	
	public function print_pdf(){
		$data['template'] = array("template"=>"md_karyawan/".$_GET['template'],"filename"=>$_GET['name']);
		$data['list'] = $this->m_karyawan->getdata($this->table,0,1000,$like=array(),$where=array('status_karyawan!='=>'3'));
		$this->printpdf->create_pdf($data);
	}
	
	public function print_excel(){
		 $data['template_excel'] = "md_karyawan/".$_GET['template'];
		 $data['file_name'] = $_GET['name'];
		 $data['list'] = $this->m_karyawan->getdata($this->table,0,1000,$like=array(),$where=array('status_karyawan!='=>'3'));
		 $this->load->view('template_excel',$data);
	}
}