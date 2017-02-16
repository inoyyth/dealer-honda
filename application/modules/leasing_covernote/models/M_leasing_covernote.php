<?php

Class M_leasing_covernote extends CI_Model {

    var $table = "covernote_history";

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
            'owner_email' => $this->input->post('owner_email')
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
    
    public function getSO($query){
        $this->db->select('t_penjualan.id,t_penjualan.ktp,t_penjualan.nomsn,t_penjualan.noso');
        $this->db->from('t_penjualan');
        $this->db->join('t_harga_motor','t_penjualan.noso=t_harga_motor.noso','INNER');
        $this->db->like(array('t_penjualan.noso'=>$query));
        $this->db->where(array('t_penjualan.m_status'=>'1','t_harga_motor.dp_lunas'=>'2'));

        return $this->db->get();
    }
}
