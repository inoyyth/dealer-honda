<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_t_rekap_tagihan
 *
 * @author Langit-Biru
 */
class M_t_rekap_tagihan extends CI_Model {

    //put your code here
    var $table = "t_rekap_tagihan";

    public function getdata($table, $limit, $pg, $like = array(), $where = array()) {
        unset($like['page']);

        $this->db->from($table);
        $this->db->like($like);
        $this->db->where($where);
        $this->db->limit($pg, $limit);
        return $this->db->get()->result_array();
    }
    
    public function get_leasing($kdleasing){
        $this->db->where('kd_leasing',$kdleasing);
        $query = $this->db->get('m_leasing');
        return $query->row();
    }

}
