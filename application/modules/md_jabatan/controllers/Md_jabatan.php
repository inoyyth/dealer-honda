<?php     
class Md_jabatan extends MX_Controller
{
	var $table = "jabatan";
	 public function __construct() {
        parent::__construct();
		$this->load->model(array('M_md_jabatan'=>'m_jabatan'));
		//set breadcrumb
		$this->breadcrumbs->push('Master Jabatan', '/master-jabatan');
    }
	
	public function index(){
		
		$config['base_url'] = base_url().'master-jabatan-page';
        $config['total_rows'] = $this->main_model->countdata('jabatan',$where=array());
        $config['per_page'] = 1;
        $config['uri_segment'] = 2;
        $limit = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0 ;
        $this->pagination->initialize($config);
        $data['paging'] = $this->pagination->create_links();
        $data['data'] = $this->m_jabatan->getdata($this->table,$limit,$config['per_page']);
		$data['view'] = 'md_jabatan/main';
		$this->load->view('default',$data);
	}
	
	public function add(){
		$data['view']="md_jabatan/add";
		$this->load->view('default',$data);
	}
	
	public function update($id){
		$data=array();
		$data['view'] = 'md_jabatan/update';
		$this->load->view('default',$data);
	}
	
	function delete($id){
        if($this->m_arenafasilities->delete_data($this->my_encrypt->decode($id))){
            $this->session->set_flashdata('success', 'Data Berhasil Di Hapus !');
        }else{
            $this->session->set_flashdata('error', 'Data Gagal Di Hapus !');
        }
        redirect("arenafasilities/index");
    }
    
    function save(){
        if($_POST){
            if($this->m_jabatan->save()){
                $this->session->set_flashdata('success', 'Data Berhasil Di Simpan !');
            }else{
                $this->session->set_flashdata('error', 'Data Gagal Di Simpan !');
            }
            redirect("master-jabatan");
        }else{
            show_404();
        }
    }
	
}