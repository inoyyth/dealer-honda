<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_t_void
 *
 * @author Langit-Biru
 */
class M_t_void extends CI_Model {
    //put your code here
    var $table_kwitansi_dp = "t_void";
    
    public function getdata($table, $limit, $pg, $like = array(), $where = array()) {
        unset($like['page']);
        $this->db->select("*");
        $this->db->from($table);
        $this->db->like($like);
        $this->db->where($where);
        $this->db->limit($pg, $limit);
        return $this->db->get()->result_array();
    }
    
    public function getdata_transaction_price_by_noso($noso) {
        $this->db->where('noso',$noso);
        $query = $this->db->get($this->table_kwitansi_dp);
        return $query->row();
    }
    
}

