<?php
Class M_account extends CI_Model{
	var $table = "account";
	public function save(){
		$id = $this->input->post('id');
		$data = array('jabatan'=>$this->input->post('jabatan'),
					  'keterangan'=>$this->input->post('keterangan'),
					  'status'=>$this->input->post('status')
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