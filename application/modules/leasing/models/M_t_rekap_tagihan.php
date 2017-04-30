<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_t_rekap_tagihan
 *
 * @author Langit-Biru
 */
class M_t_rekap_tagihan extends CI_Model {

    //put your code here
    protected $table = "t_rekap_tagihan";
    protected $table_detail = "t_rekap_tagihan_detail";

    function save_trekapan($data) {
        $query = $this->db->insert($this->table, $data);
        return $query;
    }

    function save_trekapan_detail($data) {
        $query = $this->db->insert($this->table_detail, $data);
        return $query;
    }

    function update_kwitansi_leasing($id, $ustatus) {
        $data['status_rekap'] = $ustatus;
        $this->db->where('id', $id);
        $query = $this->db->update('t_kwitansi_leasing', $data);
        return $query;
    }

    function update_trekapan($data, $notagihan) {
        $this->db->where('no_tagihan', $notagihan);
        $query = $this->db->update($this->table, $data);
        return $query;
    }

    function update_trekapan_detail($data, $id) {
        $this->db->where('id_kwitansi', $id);
        $query = $this->db->update($this->table_detail, $data);
        return $query;
    }

    public function getdata($table, $limit, $pg, $like = array(), $where = array()) {
        unset($like['page']);

        $this->db->from($table);
        $this->db->like($like);
        $this->db->where($where);
        $this->db->limit($pg, $limit);
        return $this->db->get()->result_array();
    }

    public function get_leasing($kdleasing) {
        $this->db->where('kd_leasing', $kdleasing);
        $query = $this->db->get('m_leasing');
        return $query->row();
    }

    function _get_dt_tables($table, $column_search, $column_filter, $filter, $join = 'left') {
        $this->db->select($column_search, false);
        $this->db->from($table);

        // Filter pemilihan fungsi CI dari Join / Like / Where
        if (is_array($filter)) {
            foreach ($filter as $key => $dtfilter) {
                switch ($key) {
                    case "join":
                        if (is_array($dtfilter)) {
                            foreach ($dtfilter as $kunci => $nilai) {
                                $this->db->$key($kunci, $nilai, $join);
                            }
                        } else {
                            $this->db->where($key, $dtfilter);
                        }
                        break;
                    case "limit":
                    case "offset":
                    case "group_by":
                        $this->db->$key($dtfilter);
                        break;
                    default:
                        if (is_array($dtfilter)) {
                            foreach ($dtfilter as $kunci => $nilai) {
                                $this->db->$key($kunci, $nilai);
                            }
                        } else {
                            $this->db->where($key, $dtfilter);
                        }
                        break;
                }
            }
        }

        $i = 0;
        foreach ($column_filter as $item) { // loop column 
            if (@$_POST['search']['value']) { // if datatable send POST for search
                if ($i === 0) { // first loop
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, @$_POST['search']['value']);
                } else {
                    $this->db->or_like($item, @$_POST['search']['value']);
                }

                if (count($column_filter) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }

        if (isset($_POST['order'])) { // here order processing
            $this->db->order_by($column_order[@$_POST['order']['0']['column']], @$_POST['order']['0']['dir']);
        } else if (isset($order)) {
            $order = $order;
            $this->db->order_by(key($order), $order[key($order)]);
        }

        //$this->db->group_by($group_by);
    }

    function get_dt_tables($table, $column_search, $column_filter, $filter, $join = 'left') {
        $this->db->protect_identifiers(FALSE);

        $this->_get_dt_tables($table, $column_search, $column_filter, $filter);

        if ($_POST['length'] != -1)
            $this->db->limit(@$_POST['length'], @$_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    public function count_all($table, $where = array()) {
        $this->db->from($table);
        $this->db->where($where);
        return $this->db->count_all_results();
    }

    function count_filtered($table, $column_search, $column_filter, $filter) {
        $this->_get_dt_tables($table, $column_search, $column_filter, $filter);
        $query = $this->db->get();
        return $query->num_rows();
    }

    function get_rkwitansi_detail($idkwitansi) {
        $this->db->select('a.id, a.id_kwitansi, a.nomor_tagihan, b.nokwitansi,b.noso, c.harga_otr,((c.harga_otr) - (d.dp + b.subsidi1 + b.subsidi2)) as sisa_tagihan', false);
        $this->db->from('t_rekap_tagihan_detail a');
        $this->db->join('t_kwitansi_leasing b', 'b.id=a.id_kwitansi', 'left');
        $this->db->join('t_penjualan c', 'c.noso=b.noso', 'left');
        $this->db->join('t_harga_motor d', 'd.noso=b.noso', 'left');
        $this->db->where_in('a.id_kwitansi', $idkwitansi);

        $query = $this->db->get();
        return $query;
    }

    function get_rekap_kwitansi_leasing($notagihan) {
        $this->db->select('t_kwitansi_leasing.id,t_kwitansi_leasing.nokwitansi,t_kwitansi_leasing.noso,t_kwitansi_leasing.dp_system, t_kwitansi_leasing.tagih,t_kwitansi_leasing.subsidi1,t_kwitansi_leasing.subsidi2,t_kwitansi_leasing.m_status,t_kwitansi_leasing.sys_create_user,t_kwitansi_leasing.sys_create_date,t_kwitansi_leasing.status_rekap,t_penjualan.nosj,t_penjualan.nokonsumen,t_penjualan.ktp,t_penjualan.tanggal,t_penjualan.nomsn,t_penjualan.warna_motor,t_penjualan.harga_otr,penerimaan_motor.norangka,penerimaan_motor.tipe,penerimaan_motor.warna,penerimaan_motor.tahun,penerimaan_motor.kdgudang,penerimaan_motor.tglupload,t_harga_motor.cara_pembelian,t_harga_motor.marketing,t_harga_motor.leasing,t_harga_motor.dp_system,t_harga_motor.diskon,t_harga_motor.tagih,t_harga_motor.dp,t_harga_motor.dp_system,t_harga_motor.sisa_hutang,t_harga_motor.dp_lunas,t_harga_motor.fee,m_customer.nama_customer,m_customer.tempat_lahir_customer,m_customer.tanggal_lahir_customer,m_customer.kelamin_customer,m_customer.alamat_customer,m_customer.telepon_customer,m_customer.handphone_customer,m_customer.rt,m_customer.rw,m_customer.wilayah,m_customer.kelurahan,m_customer.kecamatan,m_motor.nama_motor,m_motor.varian,m_motor.merk,m_motor.url_foto, t_rekap_tagihan_detail.price_list', false);
        $this->db->from('t_rekap_tagihan_detail');
        $this->db->join('t_kwitansi_leasing', 't_kwitansi_leasing.id = t_rekap_tagihan_detail.id_kwitansi', 'left');
        $this->db->join('t_penjualan', 't_penjualan.noso=t_kwitansi_leasing.noso', 'left');
        $this->db->join('penerimaan_motor', 'penerimaan_motor.nomesin=t_penjualan.nomsn', 'left');
        $this->db->join('t_harga_motor', 't_harga_motor.noso=t_kwitansi_leasing.noso', 'left');
        $this->db->join('m_customer', 'm_customer.no_ktp=t_penjualan.ktp', 'left');
        $this->db->join('m_motor', 'm_motor.tipe_motor=penerimaan_motor.tipe', 'left');

        $this->db->where('t_rekap_tagihan_detail.nomor_tagihan', $notagihan);
        //$this->db->where('t_rekap_tagihan_detail.status_rekap', 1);
        $this->db->group_by('t_kwitansi_leasing.nokwitansi');

        $query = $this->db->get();

        return $query;
    }

    function delete($tablenm, $id) {
        $this->db->where('id_kwitansi', $id);
        $query = $this->db->delete($tablenm);
        return $query;
    }

    function update_status_kwitansi($id, $status) {
        $this->db->where('id', $id);
        $data['status_rekap'] = $status;
        $query = $this->db->update('t_kwitansi_leasing', $data);
        return $query;
    }
    
    function get_kwitansi_rekap($idkwitansi){
        $this->db->where_in('id',$idkwitansi);
        $query = $this->db->get('t_kwitansi_leasing');
        
        return $query->result();
    }

}
