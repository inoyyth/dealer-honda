<?php
Class Main_model extends CI_Model{
	public function save($table,$primary,$data){
		if(empty($data[0])){
			$this->db->insert($table,$data);
			return true;
		}else{
			$this->db->update($table,$data,array($primary,$data[0]));
			return true;
		}
		return true;
	}
	
	public function countdata($table,$where){
		if(empty($where)){
			return $this->db->count_all($table);
		}else{
			$this->db->where($where);
			return $this->db->count_all($table);
		}
	}
}