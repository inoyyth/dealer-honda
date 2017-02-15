<?php

Class M_md_birojasa extends CI_Model {

    var $table = "m_biro_jasa";

    public function save() {
        $id = $this->input->post('id');
        $data = array(
            'nama_birojasa' => $this->input->post('nama_birojasa'),
            'telepon_birojasa' => $this->input->post('telepon_birojasa'),
            'handphone_birojasa' => $this->input->post('handphone_birojasa'),
            'alamat_birojasa' => $this->input->post('alamat_birojasa'),
            'pic_birojasa' => $this->input->post('pic_birojasa'),
            'pic_kontak_birojasa' => $this->input->post('pic_kontak_birojasa'),
            'email_birojasa' => $this->input->post('email_birojasa'),
            'status_birojasa' => $this->input->post('status_birojasa')
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
