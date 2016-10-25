<?php     
class Md_motor extends MX_Controller
{
	var $table = "m_motor";
	public function __construct() {
        parent::__construct();
		$this->load->model(array('M_md_motor'=>'m_motor'));
		$this->load->library(array('upload','encrypt','Printpdf','Auth_log'));
		//set breadcrumb
		$this->breadcrumbs->push('Master Motor', '/master-motor');
    }
	
	public function index(){
		$data_session = $this->__getSession();
		$config['base_url'] = base_url().'master-motor-page';
        $config['total_rows'] = $this->main_model->countdata($this->table,$where=array());
        $config['per_page'] = (!empty($data_session['page'])?$data_session['page']:10);
        $config['uri_segment'] = 2;
        $limit = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0 ;
        $this->pagination->initialize($config);
        $data['paging'] = $this->pagination->create_links();
        $data['data'] = $this->m_motor->getdata($this->table,$limit,$config['per_page'],$like=$data_session,$where=array('m_status!='=>'3'));
		$data['sr_data'] = $data_session;
		$data['view'] = 'md_motor/main';
		$this->load->view('default',$data);
	}
	
	public function add(){
		$data['view']="md_motor/add";
		$this->load->view('default',$data);
	}
	
	public function edit($id){
        $data['detail'] = $this->db->get_where($this->table,array('id'=>$id))->row_array();
		$data['view'] = 'md_motor/edit';
		$this->load->view('default',$data);
	}
	
	function delete($id){
        $this->main_model->delete('m_motor',array('id'=>$id),array('status_motor'=>'3'));
        redirect("master-motor");
    }
    
    function save(){
        if($_POST){
            if($this->m_motor->save()){
                $this->session->set_flashdata('success', 'Data Berhasil Di Simpan !');
            }else{
                $this->session->set_flashdata('error', 'Data Gagal Di Simpan !');
            }
            redirect("master-motor");
        }else{
            show_404();
        }
    }
	
	public function __getSession(){
		 if($_POST){
			return $data = array(
				'page'=>set_session_table_search('page',$this->input->get_post('page',TRUE)),
                'tipe_motor'=>set_session_table_search('kd_motor',$this->input->get_post('kd_motor',TRUE)),
				'nama_motor'=>set_session_table_search('motor',$this->input->get_post('motor',TRUE)),
				'varian'=>set_session_table_search('alamat',$this->input->get_post('alamat',TRUE)),
                'merk'=>set_session_table_search('telepon',$this->input->get_post('telepon',TRUE)),
                'harga_otr'=>set_session_table_search('email',$this->input->get_post('email',TRUE)),
                'kd_karyawan'=>set_session_table_search('kd_karyawan',$this->input->get_post('kd_karyawan',TRUE)),
				'm_status'=>set_session_table_search('status_motor',$this->input->get_post('m_status',TRUE))
			 );
		 }else{
                return $data = array(
				'page'=>$this->session->userdata('page'),
				'kd_motor'=>$this->session->userdata('kd_motor'),
                'motor'=>$this->session->userdata('motor'),
				'alamat'=>$this->session->userdata('alamat'),
                'telepon'=>$this->session->userdata('telepon'),
                'email'=>$this->session->userdata('email'),
                'kd_karyawan'=>$this->session->userdata('kd_karyawan'),
				'status_motor'=>$this->session->userdata('status_motor')
			 );
		}
	}
	
	public function print_pdf(){
		$data['template'] = array("template"=>"md_motor/".$_GET['template'],"filename"=>$_GET['name']);
		$data['list'] = $this->m_motor->getdata($this->table,0,1000,$like=array(),$where=array('status_motor!='=>'3'));
		$this->printpdf->create_pdf($data);
	}
	
	public function print_excel(){
		 $data['template_excel'] = "md_motor/".$_GET['template'];
		 $data['file_name'] = $_GET['name'];
		 $data['list'] = $this->m_motor->getdata($this->table,0,1000,$like=array(),$where=array('status_motor!='=>'3'));
		 $this->load->view('template_excel',$data);
	}
}