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
    
     public function getNOSO($query){
        $data = $this->db->query('select a.*,b.nama_customer,c.fee,c.diskon,d.norangka,d.tipe_motor from t_penjualan a left join m_customer b on b.no_ktp = a.ktp 
left join t_harga_motor c on c.noso = a.noso 
left join m_motor d on d.nomsn = a.nomsn
left join t_kwitansi_fee e on e.noso = a.noso
            WHERE a.noso LIKE "%'.$query.'%" AND a.m_status =  "1" ');
       $show = array();
        foreach($data->result_array() as $list){
           //echo "<br>".terbilang($list['fee'],3)."<br>";
           //
           $show[] = array('noso'=>$list['noso'],
                         'fee'=>$list['fee'],
                         'harga_otr'=>$list['harga_otr'],
                         'diskon'=>$list['diskon'],
                         'nama_customer'=>$list['nama_customer'],
                         'nomsn'=>$list['nomsn'],
                         'warna_motor'=>$list['warna_motor'],
                         'tipe_motor'=>$list['tipe_motor'],
                         'norangka'=>$list['norangka'],
                         'fee'=>$list['fee'],
                         'terbilang_diskon'=>terbilang($list['diskon']),
                         'terbilang'=>terbilang($list['fee']));
           //$aku = array('noso'=>$list['noso']);
        }
        return $show;
          
        //echo $show;
        //echo $aku;
        //return $data;
        //$this->db->select('t_penjualan.*,m_customer.nama_customer');
        //$this->db->from($table);
        //$this->db->join($this->table_customer,$this->table_customer.".no_ktp=",$this->table_tpenjualan.".ktp",'left');
        //$this->db->like($like);
        //$this->db->where($where);
        //return $this->db->get()->result_array();
       
    }
    
    function save() {
        $id = $this->input->post('id');
/*array(16) { ["nokwitansi"]=> string(22) "KWT/KD/2016/XII/000001" ["noso"]=> string(21) "SO/MKA-2016/XI/000001" ["id"]=> string(0) "" ["nama_customer"]=> string(5) "Jarot" ["harga_otr"]=> string(10) "17.500.000" ["dp"]=> string(10) "10.000.000" ["cara_pembelian"]=> string(4) "Cash" ["transaksi"]=> string(0) "" ["nominal"]=> string(5) "20000" ["sisa"]=> string(7) "7480000" ["nomsn"]=> string(10) "MSN0101010" ["norangka"]=> string(10) "RGK9009090" ["tipe_motor"]=> string(7) "NC11D1D" ["warna_motor"]=> string(2) "WH" ["terbilang"]=> string(22) "Dua puluh ribu rupiah" ["submit"]=> string(0) "" } 
 */
        $data_pembayaran = array(
            'noso' => $this->input->post('noso'),
            'kdpdi' => $this->input->post('kdpdi'),
            'tgl_pdi' => $this->input->post('tgl_pdi'),
            'pic' => $this->input->post('pic'),
            'm_status' => 1
        );

        if (empty($id)) {
            $this->db->insert($this->table_pdi, $this->main_model->create_sys($data_pembayaran));
            return true;
        } else {
            $this->db->update($this->table_pdi, $this->main_model->update_sys($data_pembayaran), array('id' => $id));
            return true;
        }
        return false;
    }
    
    
     public function get_data_print($id){
    //return $this->db->get_where($this->table_tpenjualan,array('noso'=>$id))->row();  
    
    $data = $this->db->query('select a.*,f.nama_customer,b.nomsn,b.tanggal as tanggalbeli,b.warna_motor,b.harga_otr,c.fee,c.diskon,c.cara_pembelian,d.tahun as tahunmotor,d.norangka,d.tipe_motor from t_pdi a 
left join t_penjualan b on b.noso = a.noso 
left join t_harga_motor c on c.noso = a.noso 
left join m_motor d on d.nomsn = b.nomsn
left join t_kwitansi_fee e on e.noso = a.noso
left join m_customer f on f.no_ktp = b.ktp
 
            WHERE a.noso ="'.$id.'"')->row();
        return $data;
        
    }   
    
}
