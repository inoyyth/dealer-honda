<?php

Class Main_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function menu_all() {
        if ($this->session->userdata('logged_in_admin')!=FALSE){
            $session = $this->session->userdata('logged_in_admin');
            $menu = unserialize($session['access_menu']);
            $menuResult = array();
            foreach($menu as $k=>$v){
                $menuResult[] = $v['menu'];
            }
            //echo "<pre>";var_dump($query);die;
            //get parent
            $this->db->select('parent');
            $this->db->from('menus');
            $this->db->where_in('id', $menuResult);
            $this->db->group_by('parent');
            $query_parent = $this->db->get()->result_array();
            
            $menuResult2 = array();
            foreach($query_parent as $k=>$v){
                $menuResult2[] = $v['parent'];
            }
            //get child
            $this->db->select('*');
            $this->db->from('menus');
            $this->db->where_in('id', array_merge($menuResult,$menuResult2));
            $query = $this->db->get()->result_array();
            return $query;
            //echo "<pre>";var_dump($query);die;
        }else{
            return FALSE;
        }
    }

    public function save($table, $primary, $data) {
        if (empty($data[0])) {
            $this->db->insert($table, $data);
            return true;
        } else {
            $this->db->update($table, $data, array($primary, $data[0]));
            return true;
        }
        return true;
    }

    public function countdata($table, $where) {
        if (empty($where)) {
            return $this->db->count_all($table);
        } else {
            $this->db->where($where);
            return $this->db->count_all($table);
        }
    }

    public function getall($table, $where, $limit) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($where);
        $this->db->limit($limit);
        $this->db->get();
    }

    public function delete($table, $where, $status) {
        if ($this->db->update($table, $this->delete_sys($status), $where)) {
            $this->session->set_flashdata('success', 'Data Berhasil Di Hapus !');
        } else {
            $this->session->set_flashdata('error', 'Data Gagal Di Hapus !');
        }
    }

    public function delete_sys($status) {
        $data = array_merge($status, array('sys_delete_user' => 1, 'sys_delete_date' => date('Y-m-d H:i:s')));
        return $data;
    }

    public function create_sys($data) {
        $data = array_merge($data, array('sys_create_user' => 1, 'sys_create_date' => date('Y-m-d H:i:s')));
        return $data;
    }

    public function update_sys($data) {
        $data = array_merge($data, array('sys_update_user' => 1, 'sys_update_date' => date('Y-m-d H:i:s')));
        return $data;
    }

    public function getMaster($table, $like, $where) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->like($like);
        $this->db->where($where);
        return $this->db->get()->result_array();
    }

    public function generate_code($tables, $prefix, $separator, $digit = 4) {
        $this->db->select_max('id', 'max_id');
        $maxi = $this->db->get($tables)->row('max_id');
        $hsl = str_pad(($maxi == 0 ? 1 : intval($maxi) + 1), $digit, '0', STR_PAD_LEFT);
        return $prefix . $separator . $hsl;
    }

    public function generate_code_kwitansi($tables, $prefix, $digit = 4) {
        $this->db->select('kd_kwitansi');
        $this->db->order_by('id', 'DESC');
        $this->db->limit(1);
        $maxi = $this->db->get($tables);
        if ($maxi->num_rows() < 1) {
            $val = 1;
        } else {
            $kd_last = $maxi->row('kd_kwitansi');
            if ($prefix . $date("Y-m-d") == $prefix . $date("Y-m-") . "1") {
                if (intval(substr($maxi->row('kd_kwitansi'), 0, $digit)) < 1) {
                    $val = 1;
                } else {
                    $val = intval($maxi->num_rows('kd_kwitans')) + 1;
                }
            }
        }
        $hsl = str_pad(($val), $digit, '0', STR_PAD_LEFT);
        return $prefix . $hsl;
    }
    
    public function cekExistCode($data=array()){
        $this->db->select('*');
        $this->db->from($data['table']);
        $this->db->where(array($data['field']=>$data['value']));
        return $this->db->get();
    }

}
