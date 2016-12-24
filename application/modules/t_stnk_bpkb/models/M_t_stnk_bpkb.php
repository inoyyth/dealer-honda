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
class M_t_stnk_bpkb extends CI_Model {
    //put your code here
    
    var $table = "t_stnk_bpkb";
    var $table_stnk = "t_data_stnk_bpkb";
    
    public function getdata($table, $limit, $pg, $like = array(), $where = array()) {
        unset($like['page']);
        $this->db->select("*");
        $this->db->from($table);
        $this->db->like($like);
        $this->db->where($where);
        $this->db->limit($pg, $limit);
        return $this->db->get()->result_array();
    }
    
    public function getdata_transaction_price_by_noso($noso) {
        $this->db->where('noso',$noso);
        $query = $this->db->get($this->table_kwitansi_dp);
        return $query->row();
    }
    
    
    public function getNOSO($query){
        $data = $this->db->query('select a.*,b.nama_customer,b.no_ktp,b.tempat_lahir_customer,b.tanggal_lahir_customer,b.alamat_customer,b.kelamin_customer,b.rt,b.rw,b.kelurahan,b.kecamatan,b.wilayah,b.telepon_customer,b.handphone_customer,c.fee,c.diskon,d.norangka,f.leasing,d.tipe_motor,d.tahun as tahunmotor from t_penjualan a 
left join m_customer b on b.no_ktp = a.ktp 
left join t_harga_motor c on c.noso = a.noso 
left join m_motor d on d.nomsn = a.nomsn
left join t_kwitansi_fee e on e.noso = a.noso
left join m_leasing  f on f.kd_leasing = c.leasing
            WHERE a.noso LIKE "%'.$query.'%"  AND a.m_status =  "1" ');
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
                         'terbilang'=>terbilang($list['fee']),
                         'tahunmotor'=>$list['tahunmotor'],
                         'leasing'=>$list['leasing'],
                         'no_ktp'=>$list['no_ktp'],
                         'tempat_lahir_customer'=>$list['tempat_lahir_customer'],
                         'tanggal_lahir_customer'=>$list['tanggal_lahir_customer'],
                         'alamat_customer'=>$list['alamat_customer'],
                         'kelamin_customer'=>$list['kelamin_customer'],
                         'telepon_customer'=>$list['telepon_customer'],
                         'handphone_customer'=>$list['handphone_customer'],
                         'rt'=>$list['rt'],
                         'rw'=>$list['rw'],
                         'wilayah'=>$list['wilayah'],
                         'kelurahan'=>$list['kelurahan'],
                         'kecamatan'=>$list['kecamatan'] 
               );
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
    
    
    public function getNOPRO($hasil){
       $data = $this->db->query('select * from t_stnk_bpkb where noproses LIKE "%'.$hasil.'%"');
       $show = array();
        foreach($data->result_array() as $list){
           //echo "<br>".terbilang($list['fee'],3)."<br>";
           //
           $show[] = array('noproses'=>$list['noproses'],
                           'tgl_jadi_stnk'=>$list['estimasi_stnk_selesai']
                          
               );
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
    
     function save_proses() {
        $id = $this->input->post('id');
/*array(16) { ["nokwitansi"]=> string(22) "KWT/KD/2016/XII/000001" ["noso"]=> string(21) "SO/MKA-2016/XI/000001" ["id"]=> string(0) "" ["nama_customer"]=> string(5) "Jarot" ["harga_otr"]=> string(10) "17.500.000" ["dp"]=> string(10) "10.000.000" ["cara_pembelian"]=> string(4) "Cash" ["transaksi"]=> string(0) "" ["nominal"]=> string(5) "20000" ["sisa"]=> string(7) "7480000" ["nomsn"]=> string(10) "MSN0101010" ["norangka"]=> string(10) "RGK9009090" ["tipe_motor"]=> string(7) "NC11D1D" ["warna_motor"]=> string(2) "WH" ["terbilang"]=> string(22) "Dua puluh ribu rupiah" ["submit"]=> string(0) "" } 
 */
        $data_pembayaran = array(
            'noproses' => $this->input->post('no_proses'),
            'noso' => $this->input->post('noso'),
            'tgl_proses_stnk' => $this->input->post('tgl_proses_stnk'),
            'tgl_proses_bpkb' => $this->input->post('tgl_proses_bpkb'),
            'estimasi_stnk_selesai' => $this->input->post('est_stnk_selesai'),
            'estimasi_bpkb_selesai' => $this->input->post('est_bpkb_selesai'),
            'ktp_stnk' => $this->input->post('ktp_stnk_same'),
            'm_status' => 1
        );

        if (empty($id)) {
            $this->db->insert($this->table, $this->main_model->create_sys($data_pembayaran));
            return true;
        } else {
            $this->db->update($this->table, $this->main_model->update_sys($data_pembayaran), array('id' => $id));
            return true;
        }
        return false;
    }
    
    
    
    function save_tt() {
        $id = $this->input->post('id');
/*array(16) { ["nokwitansi"]=> string(22) "KWT/KD/2016/XII/000001" ["noso"]=> string(21) "SO/MKA-2016/XI/000001" ["id"]=> string(0) "" ["nama_customer"]=> string(5) "Jarot" ["harga_otr"]=> string(10) "17.500.000" ["dp"]=> string(10) "10.000.000" ["cara_pembelian"]=> string(4) "Cash" ["transaksi"]=> string(0) "" ["nominal"]=> string(5) "20000" ["sisa"]=> string(7) "7480000" ["nomsn"]=> string(10) "MSN0101010" ["norangka"]=> string(10) "RGK9009090" ["tipe_motor"]=> string(7) "NC11D1D" ["warna_motor"]=> string(2) "WH" ["terbilang"]=> string(22) "Dua puluh ribu rupiah" ["submit"]=> string(0) "" } 
 */
        $data_pembayaran = array(
            'noproses'=>$this->input->post('no_proses_tt'),
            'nama'=>$this->input->post('nama'),
            'alamat'=>$this->input->post('alamat'),
            'nomesin'=>$this->input->post('nomsn'),
            'norangka'=>$this->input->post('norangka'),
            'tipe_motor'=>$this->input->post('tipe_motor'),
            'warna'=>$this->input->post('warna'),
            'tahun'=>$this->input->post('tahun'),
            'nopolisi'=>$this->input->post('nopolisi'),
            'no_bpkb'=>$this->input->post('no_bpkb'),
            'biro_jasa'=>$this->input->post('biro_jasa'),
            'tgl_jadi_stnk'=>$this->input->post('tgl_jadi_stnk'),
            'bon_biro_jasa_1'=>$this->input->post('bon_biro_jasa_1'),
            'tgl_jadi_bpkb'=>$this->input->post('tgl_jadi_bpkb'),
            'bon_biro_jasa_2'=>$this->input->post('bon_biro_jasa2'),
            'no_bpkb_jadi'=>$this->input->post('no_bpkb_jadi'),
            'biaya_tambahan_1'=>$this->input->post('biaya_tambahan_1'),
            'ket_1'=>$this->input->post('ket_1'),
            'biaya_tambahan_2'=>$this->input->post('biaya_tambahan_2'),
            'ket_2'=>$this->input->post('ket_2'),
            'm_status'=>1
 
        );

        if (empty($id)) {
            $this->db->insert($this->table_stnk, $this->main_model->create_sys($data_pembayaran));
            return true;
        } else {
            $this->db->update($this->table_stnk, $this->main_model->update_sys($data_pembayaran), array('id' => $id));
            return true;
        }
        return false;
    }
    
    
}
