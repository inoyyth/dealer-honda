<?php

class M_login extends CI_Model {

    private $table = "account";

    function login($username, $password) {
        $key = array('username' => $username, 'status' => '1');
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where($key);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1 && $this->encrypt->decode($query->row('password')) == $password) {
            return $query->result(); //if data is true
        } else {
            return false; //if data is wrong
        }
    }
    
    public function last_login($id){
        $data = array('last_login'=>date('Y-m-d H:i:s'));
        $key = array('id' => $id);
        $this->db->where($key);
        $this->db->update($this->table,$data,$key);
        return true;
    }

}
