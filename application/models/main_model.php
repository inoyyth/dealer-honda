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
    
    public function getMaster($table,$like,$where){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->like($like);
        $this->db->where($where);
        return $this->db->get()->result_array();
    }
    
    public function generate_code($tables,$prefix,$separator,$digit=4){
        $this->db->select_max('id','max_id');
        $maxi = $this->db->get($tables)->row('max_id');
        $hsl = str_pad(($maxi==0?1:$maxi), $digit, '0', STR_PAD_LEFT);
        return $prefix.$separator.$hsl;
    }
    
    public function generate_code_kwitansi($tables,$prefix,$digit=4){
        $this->db->select_max('id','max_id');
        $maxi = $this->db->get($tables)->row('max_id');
        $maxs = intval($maxi + 1);
        if ($maxs < 9 ) {
            $hsl = "000".$maxs;
        } else if ($max < 99 ) {
            $hsl = "00".$maxs;
        }else if ($max < 999 ) {
            $hsl = "0".$maxs;
        }else if ($max < 9999 ) {
            $hsl = $maxs;
        }
        return $prefix.$separator.$hsl;
    }
}