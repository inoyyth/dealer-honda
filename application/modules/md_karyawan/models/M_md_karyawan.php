<?php

Class M_md_karyawan extends CI_Model {

    var $table = "m_karyawan";

    public function save() {
        $id = $this->input->post('id');
        $image_hidden = $this->input->post('image_hidden');
        $folder = "karyawan";
        if (!is_dir('./assets/images/' . $folder)) {
            mkdir('./assets/images/' . $folder, 0777, TRUE);
        }
        $image_config = array('upload_path' => './assets/images/' . $folder,
            'upload_url' => './assets/images/' . $folder,
            'encrypt_name' => true,
            'detect_mime' => true,
            'allowed_types' => 'gif|jpg|png', 
            'max_size' => 3000);
        $this->upload->initialize($image_config);
        if ($this->upload->do_upload('foto')) {
            $image = $this->upload->data();
            $image_name = 'assets/images/' . $folder ."/". $image['file_name'];
        } else {
            if (isset($image_hidden) && !empty($image_hidden)) {
                $image_name = $image_hidden;
            } else {
                $error = array('error' => $this->upload->display_errors());
                if(strpos($error['error'],"You did not select a file to upload.")==true){
                    $image_name = 'assets/images/' . $folder . '/user_icon.png';
                }else{
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                    redirect("master-karyawan-tambah");
                }
            }
        }
        $date = strtotime(date('Y-m-d'));
        $data = array(
            'kd_karyawan' => $this->input->post('kd_karyawan'),
            'karyawan' => $this->input->post('karyawan'),
            'kd_jabatan_karyawan' => $this->input->post('kd_jabatan_karyawan'),
            'tgl_masuk' => $this->input->post('tgl_masuk'),
            'tgl_keluar' => $this->input->post('tgl_keluar'),
            'foto' => $image_name,
            'status_karyawan' => (strtotime($this->input->post('tgl_keluar')) < $date?"2":$this->input->post('status_karyawan'))
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
        $this->db->select("m_karyawan.*,m_jabatan.jabatan");
        $this->db->from($table);
        $this->db->join('m_jabatan', 'm_karyawan.kd_jabatan_karyawan=m_jabatan.id', 'left');
        $this->db->like($like);
        $this->db->where($where);
        $this->db->limit($pg, $limit);
        return $this->db->get()->result_array();
    }
}