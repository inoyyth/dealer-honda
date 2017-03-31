<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_t_pdi
 *
 * @author Langit-Biru
 */
class M_dashboard extends CI_Model {

    //put your code here

    // var $table = "t_stnk";
    // var $table_customer = "t_stnk_customer";

    public function count_all() {
        $this->db->select('*');
        $this->db->from('t_stnk');
        return $this->db->get()->result_array();
    }

    public function stnk_selesai() {
        $this->db->select('*');
        $this->db->from('t_stnk');
        $date = date('Y-m-d');
        $this->db->where('stnk_estimate_date <', $date);
        return $this->db->get()->result_array();
    }

    public function bpkb_selesai() {
        $this->db->select('*');
        $this->db->from('t_stnk');
        $date = date('Y-m-d');
        $this->db->where('bpkb_estimate_date <', $date);
        return $this->db->get()->result_array();
    }

    public function pembayaran_konsumen()
    {
        $this->db->select('*');
        $this->db->from('t_harga_motor');
        $this->db->where(array('cara_pembelian' => 'Cash', 'dp_lunas' => 1));
        return $this->db->get()->result_array();
    }

    public function tagihan_leasing()
    {
        # code...
    }
}
