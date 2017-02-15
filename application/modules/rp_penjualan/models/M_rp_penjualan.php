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
    
    public function getAksesoris($pdi_id) {
        $this->db->select('global_data.value as katagori_aksesoris,m_aksesoris.aksesoris');
        $this->db->from('t_pdi_detail');
        $this->db->join('m_aksesoris', 't_pdi_detail.aksesoris_id=m_aksesoris.id', 'INNER');
        $this->db->join('global_data', 'global_data.id=m_aksesoris.kategori', 'INNER');
        $this->db->where(array('t_pdi_detail.pdi_id' => $pdi_id));
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function getPenerimaanMotor($nomesin) {
        $this->db->select("penerimaan_motor.*,m_gudang.gudang");
        $this->db->from("penerimaan_motor");
        $this->db->join("m_gudang", "m_gudang.id=penerimaan_motor.kdgudang", "INNER");
        return $this->db->get();
    }
}
