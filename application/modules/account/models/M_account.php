<?php

Class M_account extends CI_Model {

    var $table = "account";

    public function save() {
        //var_dump($this->input->post('menu'));die;
        $menu = array();
        foreach($this->input->post('menu') as $k=>$v){
            $menu[] = array(
                        'menu'=>$v,
                        'child'=>array(
                            'add'=>($this->input->post('sub_add'.$v)==""?0:1),
                            'upd'=>($this->input->post('sub_upd'.$v)==""?0:1),
                            'del'=>($this->input->post('sub_del'.$v)==""?0:1),
                            'prt'=>($this->input->post('sub_prt'.$v)==""?0:1)
                        )
                ); 
        }
        //echo "<pre>";
        //die(print_r(serialize($menu), TRUE));
        $id = $this->input->post('id');
        $image_hidden = $this->input->post('image_hidden');
        $folder = "account";
        if (!is_dir('./assets/images/' . $folder)) {
            mkdir('./assets/images/' . $folder, 0777, TRUE);
        }
        $image_config = array('upload_path' => './assets/images/' . $folder,
            'upload_url' => './assets/images/' . $folder,
            'encrypt_name' => true,
            'detect_mime' => true,
            'allowed_types' => 'gif|jpg|png', 'max_size' => 3000);
        $this->upload->initialize($image_config);
        if ($this->upload->do_upload('path_foto')) {
            $image = $this->upload->data();
            $image_name = $image['file_name'];
        } else {
            if (isset($image_hidden) && !empty($image_hidden)) {
                $image_name = $image_hidden;
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                redirect("user-management-tambah");
            }
        }
        $data = array('username' => $this->input->post('username'),
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'password' => $this->encrypt->encode($this->input->post('password')),
            'no_telp' => $this->input->post('no_telp'),
            'email' => $this->input->post('email'),
            'path_foto' => $image_name,
            'status' => $this->input->post('status'),
            'access_menu' => serialize($menu)
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

    public function getdata($table, $limit, $pg, $like = array()) {
        unset($like['page']);
        $this->db->select("*");
        $this->db->from($table);
        $this->db->like($like);
        $this->db->limit($pg, $limit);
        return $this->db->get()->result_array();
    }

    public function get_active_menu() {
        $this->db->select('*');
        $this->db->from('menus');
        $this->db->where(array('status !=' => 3, 'parent !=' => null));
        $this->db->order_by('parent', 'ASC');
        $this->db->order_by('number', 'ASC');
        return $this->db->get()->result_array();
    }

}
