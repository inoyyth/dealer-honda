<?php

Class M_md_customer extends CI_Model {

    var $table = "m_customer";

    public function save() {
        $id = $this->input->post('id');
        $data = array(
            'no_ktp' => $this->input->post('no_ktp'),
            'nama_customer' => $this->input->post('nama_customer'),
            'tempat_lahir_customer' => $this->input->post('tempat_lahir_customer'),
            'tanggal_lahir_customer' => $this->input->post('tanggal_lahir_customer'),
            'kelamin_customer' => $this->input->post('kelamin_customer'),
            'alamat_customer' => $this->input->post('alamat_customer'),
            'telepon_customer' => $this->input->post('telepon_customer'),
            'handphone_customer' => $this->input->post('handphone_customer'),
            'm_status' => $this->input->post('m_status'),
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
        $this->db->select($this->table.".*");
        $this->db->from($table);
        $this->db->like($like);
        $this->db->where($where);
        $this->db->limit($pg, $limit);
        return $this->db->get()->result_array();
    }

}
