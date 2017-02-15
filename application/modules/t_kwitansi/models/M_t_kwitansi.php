<?php

class M_t_kwitansi extends CI_Model {

    var $table = "t_pembayaran";

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

    public function getTotalBayar($noso) {
        $this->db->select('SUM(nominal) AS total,MAX(transaksi) AS maxdp');
        $this->db->from('t_pembayaran');
        $this->db->where(array('noso' => $noso));
        return $this->db->get()->row_array();
    }

    function save_proses() {
        $id = $this->input->post('id');
        $data = array(
            'nokwitansi' => $this->input->post('nokwitansi'),
            'noso' => $this->input->post('noso'),
            'transaksi' => $this->input->post('transaksi'),
            'nominal' => currency_to_normal($this->input->post('nominal')),
            'tgl_dp' => $this->input->post('tgl_dp')
        );

        if (empty($id)) {
            $this->db->insert($this->table, $this->main_model->create_sys($data));
            if ($this->input->post('transaksi') == 4) {
                $this->db->update('t_harga_motor',array('dp_lunas'=>'2'),array('noso'=>$this->input->post('noso')));
                $this->db->update('penerimaan_motor',array('status_jual'=>'2'),array('nomesin'=>$this->input->post('nomsn')));
            }
            return true;
        } else {
            $this->db->update($this->table, $this->main_model->update_sys($data), array('id' => $id));
            return true;
        }
        return false;
    }

    public function getSisaHutang($noso, $dp) {
        $this->db->select('SUM(nominal) AS jumlah');
        $this->db->from($this->table);
        $this->db->where(array('noso' => $noso, 'transaksi <' => $dp));
        return $this->db->get()->row_array();
    }
    
    public function getSO($query){
        $this->db->select('t_penjualan.id,t_penjualan.ktp,t_penjualan.nomsn,t_penjualan.noso');
        $this->db->from('t_penjualan');
        $this->db->join('t_harga_motor','t_penjualan.noso=t_harga_motor.noso','INNER');
        $this->db->like(array('t_penjualan.noso'=>$query));
        $this->db->where(array('t_penjualan.m_status'=>'1','t_harga_motor.dp_lunas'=>'1'));
        return $this->db->get();
    }

}
