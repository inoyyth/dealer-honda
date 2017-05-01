<?php

class M_t_void extends CI_Model {

    //put your code here
    var $table = 't_void';

    public function getdata($table, $limit, $pg, $like = array(), $where = array()) {
        unset($like['page']);
        $this->db->select($table . ".*,account.nama_lengkap");
        $this->db->from($table);
        $this->db->join('account', 'account.id=' . $table . '.void_user_id');
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
        $this->db->where("nomesin",$nomesin);
        $this->db->join("m_gudang", "m_gudang.id=penerimaan_motor.kdgudang", "INNER");
        return $this->db->get();
    }

    public function save() {
        $session = $this->session->userdata('logged_in_admin');
        $data = array(
            'noso' => $this->input->post('noso'),
            'void_description' => $this->input->post('alasan'),
            'void_user_id' => $session['id'],
            'void_date' => date('Y-m-d H:i:s')
        );
        $this->db->insert($this->table, $this->main_model->create_sys($data));
        if ($inset) {
            return true;
        }
        return false;
    }

}
