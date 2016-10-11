<?php
Class M_md_karyawan extends CI_Model{
	var $table = "m_karyawan";
	public function save(){
		$id = $this->input->post('id');
        $image_hidden = $this->input->post('image_hidden');
        $image_config = array('upload_path'=>'./assets/images/karyawan/',
                              'upload_url'=>'./assets/images/karyawan/',
                              'encrypt_name'=>true,
                              'detect_mime'=>true,
                              'allowed_types'=>'gif|jpg|png','max_size'=>3000);
        $this->upload->initialize($image_config);
        if($this->upload->do_upload('foto')){
            $image = $this->upload->data();  
            $image_name = $image['file_name'];
        }else{
            if(isset($image_hidden) && !empty($image_hidden)){
                 $image_name = $image_hidden;
            }else{
                $this->session->set_flashdata('error',  $this->upload->display_errors());
                redirect("master-karyawan-tambah");
            }
        }
		$data = array('kd_karyawan'=>$this->input->post('kd_karyawan'),
					  'karyawan'=>$this->input->post('karyawan'),
					  'kd_jabatan_karyawan'=>$this->input->post('kd_jabatan_karyawan'),
                      'tgl_masuk'=>$this->input->post('tgl_masuk'),
                      'tgl_keluar'=>$this->input->post('tgl_keluar'),
                      'foto'=>$image_name,
                      'status_karyawan'=>$this->input->post('status_karyawan')
                       );
		if(empty($id)){
			$this->db->insert($this->table,$this->main_model->create_sys($data));
			return true;
		}else{
			$this->db->update($this->table,$this->main_model->update_sys($data),array('id'=>$id));
			return true;
		}
		return false;
	}
	
	public function getdata($table,$limit,$pg,$like=array(),$where=array()){ 
		unset($like['page']);
		$this->db->select("m_karyawan.*,m_jabatan.jabatan");
		$this->db->from($table);
        $this->db->join('m_jabatan','m_karyawan.kd_jabatan_karyawan=m_jabatan.id','left');
		$this->db->like($like);
        $this->db->where($where);
		$this->db->limit($pg,$limit);
		return $this->db->get()->result_array();
	}
}