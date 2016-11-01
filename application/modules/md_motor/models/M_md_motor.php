<?php

Class M_md_motor extends CI_Model {

    var $table = "m_motor";

    public function save() {
        $id = $this->input->post('id');
        
        $image_hidden = $this->input->post('image_hidden');
        $folder = "motor";
        if (!is_dir('./assets/images/'.$folder)) {
            mkdir('./assets/images/'.$folder, 0777, TRUE);
        }
        $image_config = array('upload_path'=>'./assets/images/'.$folder,
                              'upload_url'=>'./assets/images/'.$folder,
                              'encrypt_name'=>true,
                              'detect_mime'=>true,
                              'allowed_types'=>'gif|jpg|png','max_size'=>3000);
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
                    $image_name = 'assets/images/' . $folder . '/icon.png';
                }else{
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                    redirect("master-karyawan-tambah");
                }
            }
        }
        
        $data = array(
            'tipe_motor' => $this->input->post('tipe_motor'),
            'nama_motor' => $this->input->post('nama_motor'),
            'varian' => $this->input->post('varian'),
            'merk' => $this->input->post('merk'),
            'harga_otr' => preg_replace('/[^0-9]+/', '',$this->input->post('harga_otr')),
            'nama_foto' => $image_name,
            'url_foto' => '/assets/images/'.$folde."/".$image_name,
            'warna' => $this->input->post('warna'),
            'tahun' => $this->input->post('tahun'),
            'norangka' => $this->input->post('norangka'),
            'nomsn' => $this->input->post('nomsn'),
            'm_status' => $this->input->post('m_status')
        );
        if (empty($id)) {
            $cek_exist_code = $this->main_model->cekExistCode(array('table'=>$this->table,'field'=>'tipe_motor','value'=>$this->input->post('tipe_motor')));
            if($cek_exist_code->num_rows() > 0){
                $this->session->set_flashdata('error',  'Tipe Sudah Terdaftar');
                redirect("master-motor-tambah");
            }
            $this->db->insert($this->table, $this->main_model->create_sys($data));
            return true;
        } else {
            $cek_exist_code = $this->main_model->cekExistCode(array('table'=>$this->table,'field'=>'tipe_motor','value'=>$this->input->post('tipe_motor')));
            if($cek_exist_code->num_rows() > 0){
                if($cek_exist_code->row('id')==$id){   
                    $this->db->update($this->table, $this->main_model->update_sys($data), array('id' => $id));
                    return true;
                }else{
                    $this->session->set_flashdata('error',  'Tipe "'.$this->input->post('tipe_motor').'" Sudah Terdaftar');
                    redirect("master-motor-edit-".$id);
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
        $this->db->select($table . ".*");
        $this->db->from($table);
        $this->db->like($like);
        $this->db->where($where);
        $this->db->limit($pg, $limit);
        return $this->db->get()->result_array();
    }

}
