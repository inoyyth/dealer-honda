<?php

Class M_rp_penjualan extends CI_Model {

    var $table = "t_penjualan";

    public function getdata($table, $limit, $pg, $like = array(), $where = array()) {
        unset($like['page']);
        $this->db->select($table.".*,penerimaan_motor.tipe");
        $this->db->from($table);
        $this->db->join('penerimaan_motor',$table.".nomsn=penerimaan_motor.nomesin");
        $this->db->like($like);
        $this->db->where($where);
        $this->db->limit($pg, $limit);
        return $this->db->get()->result_array();
    }
}
