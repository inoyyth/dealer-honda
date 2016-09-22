<?php
Class M_md_jabatan extends CI_Model{
	public function save(){
		$id = $this->input->post('id');
		$data = array('jabatan'=>$this->input->post('jabatan'),
					  'keterangan'=>$this->input->post('keterangan'),
					  'status'=>$this->input->post('status')
					  );
		if(empty($id)){
			$this->db->insert('jabatan',$data);
			return true;
		}else{
			$this->db->update('jabatan',$data,array('id'=>$id));
			return true;
		}
		return false;
	}
	
	public function getdata($table,$limit,$pg){ 
		$this->db->select("*");
		$this->db->from($table);
		$this->db->limit($pg,$limit);
		return $this->db->get()->result_array();
	}
	
}