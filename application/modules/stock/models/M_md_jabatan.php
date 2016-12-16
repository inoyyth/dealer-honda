<?php
Class M_md_jabatan extends CI_Model{
	var $table = "m_jabatan";
	public function save(){
		$id = $this->input->post('id');
		$data = array('jabatan'=>$this->input->post('jabatan'),
					  'keterangan'=>$this->input->post('keterangan'),
					  'status_jabatan'=>$this->input->post('status_jabatan')
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
		$this->db->select("*");
		$this->db->from($table);
		$this->db->like($like);
        $this->db->where($where);
		$this->db->limit($pg,$limit);
		return $this->db->get()->result_array();
	}
}