<?php
Class M_account extends CI_Model{
	var $table = "account";
	public function save(){
		$id = $this->input->post('id');
        $image_hidden = $this->input->post('image_hidden');
        $image_config = array('upload_path'=>'./assets/images/account/',
                              'upload_url'=>'./assets/images/account/',
                              'encrypt_name'=>true,
                              'detect_mime'=>true,
                              'allowed_types'=>'gif|jpg|png','max_size'=>3000);
        $this->upload->initialize($image_config);
        if($this->upload->do_upload('path_foto')){
            $image = $this->upload->data();  
            $image_name = $image['file_name'];
        }else{
            if(isset($image_hidden) && !empty($image_hidden)){
                 $image_name = $image_hidden;
            }else{
                $this->session->set_flashdata('error',  $this->upload->display_errors());
                redirect("user-management-tambah");
            }
        }
		$data = array('username'=>$this->input->post('username'),
					  'nama_lengkap'=>$this->input->post('nama_lengkap'),
					  'password'=>$this->encrypt->encode($this->input->post('password')),
                      'no_telp'=>$this->input->post('no_telp'),
                      'email'=>$this->input->post('email'),
                      'path_foto'=>$image_name,
                      'status'=>$this->input->post('status'),
                      'access_menu'=>serialize($this->input->post('menu'))
					  );
		if(empty($id)){
			$this->db->insert($this->table,$data);
			return true;
		}else{
			$this->db->update($this->table,$data,array('id'=>$id));
			return true;
		}
		return false;
	}
	
	public function getdata($table,$limit,$pg,$like=array()){ 
		unset($like['page']);
		$this->db->select("*");
		$this->db->from($table);
		$this->db->like($like);
		$this->db->limit($pg,$limit);
		return $this->db->get()->result_array();
	}
    
    public function get_active_menu(){
        $this->db->select('*');
        $this->db->from('menus');
        $this->db->where(array('status'=>2,'parent !='=>null));
        $this->db->order_by('parent','ASC');
        $this->db->order_by('number','ASC');
        return $this->db->get()->result_array();
    }
	
}