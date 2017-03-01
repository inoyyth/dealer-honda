<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_t_pleasing
 *
 * @author Langit-Biru
 */
class M_t_pleasing extends CI_Model {

    //put your code here
    public function getdata($table, $limit, $pg, $like = array(), $where = array()) {
        unset($like['page']);

        $this->db->from($table);
        $this->db->like($like);
        $this->db->where($where);
        $this->db->limit($pg, $limit);
        return $this->db->get()->result_array();
    }

    public function get_leasing() {
        $this->db->select("COUNT(t_rekap_tagihan.id) AS count_rekap, m_leasing.kd_leasing, m_leasing.leasing", false);
        $this->db->from("m_leasing");
        $this->db->join("t_rekap_tagihan", "t_rekap_tagihan.kdleasing=m_leasing.kd_leasing", "left outer");
        $this->db->where('m_leasing.status_leasing', 1);
        $this->db->group_by("m_leasing.kd_leasing");
        $query = $this->db->get();
        return $query;
    }

    public function save_pleasing($data, $no_tagihan = "") {
        if ($no_tagihan <> "") {
            $data['sys_update_user'] = $this->session->userdata('logged_in_admin')['id'];
            $data['sys_update_date'] = date('Y-m-d H:i:s');
            $data['m_status'] = 1;
            $this->db->where('no_tagihan', $no_tagihan);
            $query = $this->db->update('t_pencairan_leasing', $data);
        } else {
            $data['sys_create_user'] = $this->session->userdata('logged_in_admin')['id'];
            $data['sys_create_date'] = date('Y-m-d H:i:s');
            $data['m_status'] = 1;
            $query = $this->db->insert('t_pencairan_leasing', $data);
        }

        return $query;
    }

    public function save_pleasing_detail($data, $id = 0) {
        if ($id > 0) {
            $data['sys_update_user'] = $this->session->userdata('logged_in_admin')['id'];
            $data['sys_update_date'] = date('Y-m-d H:i:s');
            $data['m_status'] = 1;
            $this->db->where('id_kwitansi', $id);
            $query = $this->db->update('t_pencairan_leasing_detail', $data);
        } else {
            $data['sys_create_user'] = $this->session->userdata('logged_in_admin')['id'];
            $data['sys_create_date'] = date('Y-m-d H:i:s');
            $data['m_status'] = 1;
            $query = $this->db->insert('t_pencairan_leasing_detail', $data);
        }

        return $query;
    }

    public function get_pleasing($no_tagihan) {
        $this->db->where('no_tagihan', $no_tagihan);
        $query = $this->db->get('t_pencairan_leasing');
        return $query;
    }

    public function get_pleasing_detail($idkwitansi) {
        $this->db->where('id_kwitansi', $idkwitansi);
        return $this->db->get('t_pencairan_leasing_detail');
    }

}
