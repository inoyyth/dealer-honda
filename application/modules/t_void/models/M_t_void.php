<?php

class M_t_void extends CI_Model {
    //put your code here
    var $table='t_void';
    
    public function getdata($table, $limit, $pg, $like = array(), $where = array()) {
        unset($like['page']);
        $this->db->select($table.".*,account.nama_lengkap");
        $this->db->from($table);
        $this->db->join('account','account.id='.$table.'.void_user_id');
        $this->db->like($like);
        $this->db->where($where);
        $this->db->limit($pg, $limit);
        return $this->db->get()->result_array();
    }

}

