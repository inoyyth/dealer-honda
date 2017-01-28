<?php

class M_t_kwitansi extends CI_Model {

    public function getdata_dp($table, $limit, $pg, $like = array(), $where = array()) {
        unset($like['page']);
        $this->db->select("a.*,c.nama_customer");
        $this->db->from($table . ' a');
        $this->db->join('t_penjualan b', 'b.noso=a.noso', "left");
        $this->db->join('m_customer c', 'c.no_ktp=b.ktp', "left");
        $this->db->like($like);
        $this->db->where($where);
        $this->db->limit($pg, $limit);
        return $this->db->get()->result_array();
    }
    
    public function getTotalBayar($noso){
        $this->db->select('SUM(nominal) AS total,MAX(transaksi) AS maxdp');
        $this->db->from('t_pembayaran');
        $this->db->where(array('noso'=>$noso));
        return $this->db->get()->row_array();
    }

}
