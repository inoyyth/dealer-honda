<?php

class M_t_kwitansi extends CI_Model {

    //put your code here

    var $table_kwitansi_dp = "t_pembayaran";
    var $table_kwitansi_fee = "t_kwitansi_fee";
    var $table_kwitansi_diskon = "t_kwitansi_diskon";
    // Data table transaksi
    var $table_customer = "m_customer";
    var $table_tpenjualan = "t_penjualan";
    var $table_thargamotor = "t_harga_motor";
    var $table_motor = "m_motor";

    public function getdata($table, $limit, $pg, $like = array(), $where = array()) {
        unset($like['page']);
        $this->db->select("*");
        $this->db->from($table);
        $this->db->like($like);
        $this->db->where($where);
        $this->db->limit($pg, $limit);
        return $this->db->get()->result_array();
    }
    
    public function getNOSO($query){
        $data = $this->db->query('select a.*,b.nama_customer,c.fee,d.norangka,d.tipe_motor from t_penjualan a left join m_customer b on b.no_ktp = a.ktp 
left join t_harga_motor c on c.noso = a.noso 
left join m_motor d on d.nomsn = a.nomsn
            WHERE a.noso LIKE "%'.$query.'%"');
       $show = array();
        foreach($data->result_array() as $list){
           //echo "<br>".terbilang($list['fee'],3)."<br>";
           //
           $show[] = array('noso'=>$list['noso'],
                         'fee'=>$list['fee'],
                         'harga_otr'=>$list['harga_otr'],
                         'nama_customer'=>$list['nama_customer'],
                         'nomsn'=>$list['nomsn'],
                         'warna_motor'=>$list['warna_motor'],
                         'tipe_motor'=>$list['tipe_motor'],
                         'norangka'=>$list['norangka'],
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

    public function getdata_transaction_price_by_noso($noso) {
        $this->db->where('noso', $noso);
        $this->db->order_by('id','desc');
        $query = $this->db->get($this->table_kwitansi_dp);
        return $query->row();
    }

    public function getdata_transaction_by_noso($noso) {
        $this->db->select("t_harga_motor.cara_pembelian,t_penjualan.id,t_penjualan.noso,t_penjualan.nokonsumen,
t_penjualan.tanggal,t_penjualan.nomsn,t_penjualan.warna_motor,t_penjualan.harga_otr,t_harga_motor.marketing,
t_harga_motor.leasing,t_harga_motor.dp_system,t_harga_motor.diskon,t_harga_motor.tagih,t_harga_motor.dp,
t_harga_motor.sisa_hutang,t_harga_motor.fee,m_customer.no_ktp,m_customer.nama_customer,m_customer.tempat_lahir_customer,
m_customer.tanggal_lahir_customer,m_customer.kelamin_customer,m_customer.alamat_customer,m_customer.telepon_customer,
m_customer.handphone_customer,m_customer.rt,m_customer.rw,m_customer.wilayah,m_customer.kelurahan,
m_customer.kecamatan,m_motor.norangka,m_motor.tipe_motor,m_motor.nama_motor,m_motor.varian,m_motor.warna,
m_motor.tahun,m_motor.merk,m_motor.harga_otr,m_motor.nama_foto,m_motor.url_foto", false);
        $this->db->from($this->table_tpenjualan);

        
        $this->db->join($this->table_thargamotor, $this->table_thargamotor . ".noso = " . $this->table_tpenjualan . ".noso", "left");
        $this->db->join($this->table_customer, $this->table_customer . ".no_ktp = " . $this->table_tpenjualan . ".ktp", "left");
        $this->db->join($this->table_motor, $this->table_motor . ".nomsn = " . $this->table_tpenjualan . ".nomsn", "left");
        $this->db->where($this->table_tpenjualan . ".noso", $noso);
        $query = $this->db->get();
        return $query->row();
    }
    
    function get_sum_pembayaran(){
        $this->db->select("",false);
    }
    
    function save() {
        $id = $this->input->post('id');

        $data_pembayaran = array(
            'nokwitansi' => $this->input->post('nokwitansi'),
            'noso' => $this->input->post('noso'),
            'fee' => currency_to_normal($this->input->post('fee')),
            
            'm_status' => 1
        );

        if (empty($id)) {
            $this->db->insert($this->table_kwitansi_fee, $this->main_model->create_sys($data_pembayaran));
            return true;
        } else {
            $this->db->update($this->table_kwitansi_fee, $this->main_model->update_sys($data_pembayaran), array('id' => $id));
            return true;
        }
        return false;
    }

}
