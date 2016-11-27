<?php

Class M_aksesoris_terima extends CI_Model {

    var $table = "penerimaan_aksesoris";

    public function save() {
        $id = $this->input->post('id');
        $data = array(
            'aksesoris_id' => $this->input->post('id_aksesoris'),
            'jumlah' => $this->input->post('jumlah'),
            'gudang_id' => $this->input->post('gudang')
        );
        if (empty($id)) {
            $this->db->insert($this->table, $this->main_model->create_sys($data));
            return true;
        } else {
            $this->db->update($this->table, $this->main_model->update_sys($data), array('id' => $id));
            return true;
        }
        return false;
    }

    public function getdata($table, $limit, $pg, $like = array(), $where = array()) {
        unset($like['page']);
        $this->db->select($this->table.".*,m_aksesoris.kd_aksesoris,m_aksesoris.aksesoris,m_gudang.gudang");
        $this->db->from($table);
        $this->db->join('m_aksesoris', $this->table.'.aksesoris_id=m_aksesoris.id', 'left');
        $this->db->join('m_gudang', $this->table.'.gudang_id=m_gudang.id', 'left');
        $this->db->like($like);
        $this->db->where($where);
        $this->db->limit($pg, $limit);
        return $this->db->get()->result_array();
    }
    
    public function getEdit($id){
        $this->db->select($this->table.".*,m_aksesoris.kd_aksesoris,m_aksesoris.aksesoris,m_aksesoris.url_foto");
        $this->db->from($this->table);
        $this->db->join('m_aksesoris', $this->table.'.aksesoris_id=m_aksesoris.id', 'left');
        $this->db->where($this->table.'.id',$id);
        return $this->db->get();
    }
}