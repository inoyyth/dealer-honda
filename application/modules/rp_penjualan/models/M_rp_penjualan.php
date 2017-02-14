<?php

Class M_rp_penjualan extends CI_Model {

    var $table = "t_penjualan";

    public function getdata($table, $limit, $pg, $like = array(), $where = array()) {
        unset($like['page']);
        unset($like['start']);
        unset($like['end']);
        $dateStart = $this->input->post('start');
        $dateEnd = $this->input->post('end');
        if($dateStart != null && $dateEnd != null){
            $where = [
                't_penjualan.tanggal >=' => $dateStart,
                't_penjualan.tanggal <=' => $dateEnd
            ];
        }else if($dateStart == null && $dateEnd != null){
            $where = [
                't_penjualan.tanggal <=' => $dateEnd
            ];
        }else if($dateStart != null && $dateEnd == null){
            $where = [
                't_penjualan.tanggal >=' => $dateStart
            ];
        }
        $this->db->select($table.".*,penerimaan_motor.tipe");
        $this->db->from($table);
        $this->db->join('penerimaan_motor',$table.".nomsn=penerimaan_motor.nomesin");
        $this->db->join('t_harga_motor',$table.".noso=t_harga_motor.noso");
        $this->db->like($like);
        $this->db->where($where);
        $this->db->limit($pg, $limit);
        return $this->db->get()->result_array();
    }
}
