<?php
Class Main_model extends CI_Model{
    
    public function menu_all(){
        return $this->db->get("menus")->result_array();
	}
    
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
	
	public function getall($table,$where,$limit){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($where);
		$this->db->limit($limit);
		$this->db->get();
	}
    
    public function delete($table,$where,$status){
        if($this->db->update($table,$this->delete_sys($status),$where)){
            $this->session->set_flashdata('success', 'Data Berhasil Di Hapus !');
        }else{
            $this->session->set_flashdata('error', 'Data Gagal Di Hapus !');
        }
    }
    
    public function delete_sys($status){
        $data = array_merge($status,array('sys_delete_user'=>1,'sys_delete_date'=>date('Y-m-d H:i:s')));
        return $data;
    }
    
    public function create_sys($data){
        $data = array_merge($data,array('sys_create_user'=>1,'sys_create_date'=>date('Y-m-d H:i:s')));
        return $data;
    }
    
    public function update_sys($data){
        $data = array_merge($data,array('sys_update_user'=>1,'sys_update_date'=>date('Y-m-d H:i:s')));
        return $data;
    }
}