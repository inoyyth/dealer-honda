<?php

class M_md_supplier extends CI_Model {

    //put your code here

    var $table = "m_supplier";

    public function save() {
        $id = $this->input->post('id');
        $data = array('kdsupplier' => $this->input->post('kdsupplier'),
            'supplier' => $this->input->post('supplier'),
            'alamat' => $this->input->post('alamat'),
            'telp' => $this->input->post('telp'),
            'pic' => $this->input->post('pic'),
            'hp' => $this->input->post('hp'),
            'm_status' => $this->input->post('m_status')
        );
        if (empty($id)) {
            $cek_exist_code = $this->main_model->cekExistCode(array('table' => $this->table,
                'field' => 'kdsupplier', 'value' => $this->input->post('kdsupplier')));

            if ($cek_exist_code->num_rows() > 0) {
                $this->session->set_flashdata('error', 'Kode Supplier Sudah Terdaftar');
                redirect("master-supplier-tambah");
            }
            $this->db->insert($this->table, $this->main_model->create_sys($data));
            return true;
        } else {
            $cek_exist_code = $this->main_model->cekExistCode(array('table' => $this->table,
                'field' => 'kdsupplier', 'value' => $this->input->post('kdsupplier')));

            if ($cek_exist_code->num_rows() > 0) {
                if ($cek_exist_code->row('id') == $id) {
                    $this->db->update($this->table, $this->main_model->update_sys($data), array('id' => $id));
                    return true;
                } else {
                    $this->session->set_flashdata('error', 'Kode Supplier "' . $this->input->post('kdsupplier') . '" Sudah Terdaftar');
                    redirect("master-supplier-edit-" . $id);
                }
            } else {
                $this->db->update($this->table, $this->main_model->update_sys($data), array('id' => $id));
                return true;
            }
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
