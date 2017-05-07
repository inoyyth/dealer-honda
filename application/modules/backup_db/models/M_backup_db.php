<?php

Class M_backup_db extends CI_Model {

    var $table = "m_backup_db";

    public function save() {
        $id = $this->input->post('id');
        $data = array('kd_gudang' => $this->input->post('kd_gudang'),
            'gudang' => $this->input->post('gudang'),
            'alamat' => $this->input->post('alamat'),
            'telepon' => $this->input->post('telepon'),
            'pic' => $this->input->post('pic'),
            'status_gudang' => $this->input->post('status_gudang')
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
        $this->db->select("*");
        $this->db->from($table);
        $this->db->like($like);
        $this->db->where($where);
        $this->db->limit($pg, $limit);
        return $this->db->get()->result_array();
    }

}
