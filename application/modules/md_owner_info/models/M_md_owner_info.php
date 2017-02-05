<?php

Class M_md_owner_info extends CI_Model {

    var $table = "m_owner";

    public function save() {
        $id = $this->input->post('id');
        $data = array(
            'owner_name' => $this->input->post('owner_name'),
            'owner_ktp' => $this->input->post('owner_ktp'),
            'owner_telp' => $this->input->post('owner_telp'),
            'owner_handphone' => $this->input->post('owner_handphone'),
            'owner_address' => $this->input->post('owner_address'),
            'owner_npwp' => $this->input->post('owner_npwp'),
            'owner_jabatan' => $this->input->post('owner_jabatan'),
            'owner_email' => $this->input->post('owner_email'),
            'company_name' => $this->input->post('company_name')
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
}
