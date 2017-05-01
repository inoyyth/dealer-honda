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

    function delete_pleasing_detail($idkwitansi) {
        $this->db->where_in('id_kwitansi', $idkwitansi);
        $query = $this->db->delete('t_pencairan_leasing_detail');
        return $query;
    }

    function get_head_pleasing($id) {
        $this->db->select('b.*, c.leasing,c.alamat,c.telepon,c.email,c.hp,c.pic,c.kalimat_kw_1,c.kalimat_kw_2');
        $this->db->from('t_rekap_tagihan a');
        $this->db->join('t_pencairan_leasing b','b.no_tagihan=a.no_tagihan','left');
        $this->db->join('m_leasing c','c.kd_leasing = a.kdleasing','left');
        $this->db->where('a.id', $id);
        $query = $this->db->get();
        return $query;
    }

    function get_item_pleasing($id) {
        $this->db->select('t_rekap_tagihan_detail.id_kwitansi,t_rekap_tagihan_detail.nomor_tagihan,t_rekap_tagihan_detail.status_rekap,t_kwitansi_leasing.nokwitansi,t_kwitansi_leasing.noso,t_kwitansi_leasing.dp_system,t_kwitansi_leasing.tagih,t_kwitansi_leasing.subsidi1,t_kwitansi_leasing.subsidi2,t_penjualan.nosj,t_penjualan.nokonsumen,t_penjualan.ktp,t_penjualan.tanggal,t_penjualan.nomsn,t_penjualan.warna_motor,t_penjualan.harga_otr,t_penjualan.status_kwitansi,penerimaan_motor.nopolisi,penerimaan_motor.norangka,penerimaan_motor.tipe,penerimaan_motor.warna,penerimaan_motor.tahun,penerimaan_motor.kdgudang,penerimaan_motor.tglupload,penerimaan_motor.status_jual,t_harga_motor.cara_pembelian,t_harga_motor.marketing,t_harga_motor.leasing,t_harga_motor.dp_system,t_harga_motor.diskon,t_harga_motor.tagih,t_harga_motor.dp,t_harga_motor.sisa_hutang,t_harga_motor.dp_lunas,t_harga_motor.fee,m_customer.nama_customer,m_customer.tempat_lahir_customer,m_customer.tanggal_lahir_customer,m_customer.kelamin_customer,m_customer.alamat_customer,m_customer.telepon_customer,m_customer.handphone_customer,m_customer.rt,m_customer.rw,m_customer.wilayah,m_customer.kelurahan,m_customer.kecamatan,m_motor.nama_motor,m_motor.varian,m_motor.merk,m_motor.harga_otr,m_motor.nama_foto,m_motor.url_foto, t_pencairan_leasing_detail.no_bukti_potongan, t_pencairan_leasing_detail.tgl_pencairan, t_rekap_tagihan_detail.price_list', false);
        $this->db->from('t_pencairan_leasing_detail');
        $this->db->join('t_rekap_tagihan', 't_rekap_tagihan.no_tagihan = t_pencairan_leasing_detail.no_tagihan', 'left');
        $this->db->join('t_rekap_tagihan_detail', 't_rekap_tagihan_detail.id_kwitansi=t_pencairan_leasing_detail.id_kwitansi', 'left');
        $this->db->join('t_kwitansi_leasing', 't_kwitansi_leasing.id = t_rekap_tagihan_detail.id_kwitansi', 'left');
        $this->db->join('t_penjualan', 't_penjualan.noso = t_kwitansi_leasing.noso', 'left');
        $this->db->join('penerimaan_motor', 'penerimaan_motor.nomesin = t_penjualan.nomsn', 'left');
        $this->db->join('t_harga_motor', 't_harga_motor.noso = t_penjualan.noso', 'left');
        $this->db->join('m_customer', 'm_customer.no_ktp=t_penjualan.ktp', 'left');
        $this->db->join('m_motor', 'm_motor.tipe_motor=penerimaan_motor.tipe', 'left');

        $this->db->where('t_rekap_tagihan.id', $id);

        $this->db->order_by('t_rekap_tagihan_detail.id', 'desc');

        $query = $this->db->get();

        return $query;
    }

}
