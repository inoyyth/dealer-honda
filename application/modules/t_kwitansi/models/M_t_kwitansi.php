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

}
