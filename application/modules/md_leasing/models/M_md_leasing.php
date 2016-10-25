<?php

Class M_md_leasing extends CI_Model {

    var $table = "m_leasing";

    public function save() {
        $id = $this->input->post('id');
        $data = array('kd_leasing' => $this->input->post('kd_leasing'),
            'leasing' => $this->input->post('leasing'),
            'alamat' => $this->input->post('alamat'),
            'telepon' => $this->input->post('telepon'),
            'email' => $this->input->post('email'),
            'pic' => $this->input->post('pic'),
            'hp' => $this->input->post('hp'),
            'kalimat_kw_1' => $this->input->post('kalimat_kw_1'),
            'kalimat_kw_2' => $this->input->post('kalimat_kw_2'),
            'status_leasing' => $this->input->post('status_leasing')
        );
        if (empty($id)) {
            $cek_exist_code = $this->main_model->cekExistCode(array('table'=>$this->table,'field'=>'kd_leasing','value'=>$this->input->post('kd_leasing')));
            if($cek_exist_code->num_rows() > 0){
                $this->session->set_flashdata('error',  'Kode Leasing Sudah Terdaftar');
                redirect("master-leasing-tambah");
            }
            $this->db->insert($this->table, $this->main_model->create_sys($data));
            return true;
        } else {
            $cek_exist_code = $this->main_model->cekExistCode(array('table'=>$this->table,'field'=>'kd_leasing','value'=>$this->input->post('kd_leasing')));
            if($cek_exist_code->num_rows() > 0){
                if($cek_exist_code->row('id')==$id){   
                    $this->db->update($this->table, $this->main_model->update_sys($data), array('id' => $id));
                    return true;
                }else{
                    $this->session->set_flashdata('error',  'Kode Leasing "'.$this->input->post('kd_leasing').'" Sudah Terdaftar');
                    redirect("master-leasing-edit-".$id);
                }
            }else{
                $this->db->update($this->table, $this->main_model->update_sys($data), array('id' => $id));
                return true;
            }
        }
        return false;
    }

    public function getdata($table, $limit, $pg, $like = array(), $where = array()) {
        unset($like['page']);
        $this->db->select($table . ".*,m_karyawan.karyawan,m_karyawan.kd_karyawan");
        $this->db->from($table);
        $this->db->join('m_karyawan', 'm_karyawan.id=' . $table . '.pic', 'left');
        $this->db->like($like);
        $this->db->where($where);
        $this->db->limit($pg, $limit);
        return $this->db->get()->result_array();
    }

}
