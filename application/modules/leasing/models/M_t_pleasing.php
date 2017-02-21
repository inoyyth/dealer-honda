<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_t_pleasing
 *
 * @author Langit-Biru
 */
class M_t_pleasing extends CI_Model {

    //put your code here
    public function getdata($table, $limit, $pg, $like = array(), $where = array()) {
        unset($like['page']);

        $this->db->from($table);
        $this->db->like($like);
        $this->db->where($where);
        $this->db->limit($pg, $limit);
        return $this->db->get()->result_array();
    }

    public function get_leasing() {
        $this->db->where('status_leasing', 1);
        $query = $this->db->get('m_leasing');
        return $query;
    }

}
