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
class M_t_pdi extends CI_Model {

    //put your code here

    var $table_pdi = "t_pdi";
    
    function save() {
        $id = $this->input->post('id');
        $accs = $this->input->post('aksesoris');        
        $data_pembayaran = array(
            'noso' => $this->input->post('noso'),
            'kdpdi' => $this->input->post('kdpdi'),
            'tgl_pdi' => $this->input->post('tgl_pdi'),
            'pic' => $this->input->post('pic'),
            'gudang_id' => $this->input->post('gudang_id'),
            'm_status' => 1
        );

        if (empty($id)) {
            $insert = $this->db->insert($this->table_pdi, $this->main_model->create_sys($data_pembayaran));
            if ($insert) {
                $result = array();
                $last_id = $this->db->insert_id();
                foreach($accs as $k => $v){
                    $result[] = array('pdi_id'=>$last_id,'aksesoris_id'=>$v);
                }
                $this->db->insert_batch('t_pdi_detail', $result); 
                //dump($result,true);
            }
            return true;
        } else {
            $this->db->update($this->table_pdi, $this->main_model->update_sys($data_pembayaran), array('id' => $id));
            return true;
        }
        return false;
    }

    public function getNOSO($query) {
        $data = $this->db->query('select a.*,b.nama_customer,c.fee,c.diskon,d.norangka,d.tipe_motor from t_penjualan a left join m_customer b on b.no_ktp = a.ktp 
left join t_harga_motor c on c.noso = a.noso 
left join m_motor d on d.nomsn = a.nomsn
left join t_kwitansi_fee e on e.noso = a.noso
            WHERE a.noso LIKE "%' . $query . '%" AND a.m_status =  "1" ');
        $show = array();
        foreach ($data->result_array() as $list) {
            //echo "<br>".terbilang($list['fee'],3)."<br>";
            //
           $show[] = array('noso' => $list['noso'],
                'fee' => $list['fee'],
                'harga_otr' => $list['harga_otr'],
                'diskon' => $list['diskon'],
                'nama_customer' => $list['nama_customer'],
                'nomsn' => $list['nomsn'],
                'warna_motor' => $list['warna_motor'],
                'tipe_motor' => $list['tipe_motor'],
                'norangka' => $list['norangka'],
                'fee' => $list['fee'],
                'terbilang_diskon' => terbilang($list['diskon']),
                'terbilang' => terbilang($list['fee']));
            //$aku = array('noso'=>$list['noso']);
        }
        return $show;
    }

    public function get_data_print($id) {
        $data = $this->db->query('select a.*,f.nama_customer,b.nomsn,b.tanggal as tanggalbeli,b.warna_motor,b.harga_otr,c.fee,c.diskon,c.cara_pembelian,d.tahun as tahunmotor,d.norangka,d.tipe_motor from t_pdi a 
left join t_penjualan b on b.noso = a.noso 
left join t_harga_motor c on c.noso = a.noso 
left join m_motor d on d.nomsn = b.nomsn
left join t_kwitansi_fee e on e.noso = a.noso
left join m_customer f on f.no_ktp = b.ktp
 
            WHERE a.noso ="' . $id . '"')->row();
        return $data;
    }

    public function get_master_aksesoris($type, $gudang) {
        $this->db->select("penerimaan_aksesoris.*,sum(case status_add_or_min when '1' then jumlah when '2' then jumlah * -1 end) as total,m_aksesoris.kd_aksesoris,m_aksesoris.aksesoris,m_gudang.gudang");
        $this->db->from('penerimaan_aksesoris');
        $this->db->join('m_aksesoris', 'penerimaan_aksesoris.aksesoris_id=m_aksesoris.id', 'left');
        $this->db->join('m_gudang', 'penerimaan_aksesoris.gudang_id=m_gudang.id', 'left');
        $this->db->where(array('penerimaan_aksesoris.gudang_id' => $gudang, 'm_aksesoris.kategori' => $type));
        $this->db->group_by(array('aksesoris_id'));
        return $this->db->get()->result_array();
    }

}
