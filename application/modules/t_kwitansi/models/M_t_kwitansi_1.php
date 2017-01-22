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

    /*
    public function getdata_dp() {
        //unset($like['page']);
        //$this->db->select("*");
        /*select a.*,b.nama_customer,c.fee,c.cara_pembelian,c.diskon,c.dp,c.sisa_hutang,c.tagih,d.norangka,d.warna,d.tipe from t_penjualan a left join m_customer b on b.no_ktp = a.ktp 
left join t_harga_motor c on c.noso = a.noso 
 
left join t_kwitansi_fee e on e.noso = a.noso
left join penerimaan_motor d on d.nomesin = a.nomsn
            WHERE a.noso LIKE "%'.$query.'%"  AND a.m_status =  "1" 
        
        return $this->db->query("select a.*,c.nama_customer from t_pembayaran a 
                        left join t_penjualan b on b.noso = a.noso
                        left join m_customer c on c.no_ktp = b.ktp")->result_array();
        //$this->db->from('a.'.$table);
        //$this->db->join("b.");
        //$this->db->like($like);
        //$this->db->where($where);
        //$this->db->limit($pg, $limit);
        //return $this->db->get()->result_array();
    }
    */


    
    public function getdata_dp($table, $limit, $pg, $like = array(), $where = array()) {
        unset($like['page']);
        $this->db->select("a.*,c.nama_customer");
        $this->db->from($table.' a');
        /*

        return $this->db->query("select a.*,c.nama_customer from t_pembayaran a 
                        left join t_penjualan b on b.noso = a.noso
                        left join m_customer c on c.no_ktp = b.ktp")->result_array();*/
        $this->db->join('t_penjualan b','b.noso=a.noso',"left");
        $this->db->join('m_customer c','c.no_ktp=b.ktp',"left");
        $this->db->like($like);
        $this->db->where($where);
        $this->db->limit($pg, $limit);
        return $this->db->get()->result_array();
    }
    
    public function getdata_fee($table, $limit, $pg, $like = array(), $where = array()) {
        unset($like['page']);
        $this->db->select("a.*,c.nama_customer");
        $this->db->from($table.' a');
        /*

        return $this->db->query("select a.*,c.nama_customer from t_pembayaran a 
                        left join t_penjualan b on b.noso = a.noso
                        left join m_customer c on c.no_ktp = b.ktp")->result_array();*/
        $this->db->join('t_penjualan b','b.noso=a.noso',"left");
        $this->db->join('m_customer c','c.no_ktp=b.ktp',"left");
        $this->db->like($like);
        $this->db->where($where);
        $this->db->limit($pg, $limit);
        return $this->db->get()->result_array();
    }


    public function count_dp() {
        //unset($like['page']);
        //$this->db->select("*");
        /*select a.*,b.nama_customer,c.fee,c.cara_pembelian,c.diskon,c.dp,c.sisa_hutang,c.tagih,d.norangka,d.warna,d.tipe from t_penjualan a left join m_customer b on b.no_ktp = a.ktp 
left join t_harga_motor c on c.noso = a.noso 
 
left join t_kwitansi_fee e on e.noso = a.noso
left join penerimaan_motor d on d.nomesin = a.nomsn
            WHERE a.noso LIKE "%'.$query.'%"  AND a.m_status =  "1" 
         */
        return $this->db->query("select a.*,c.nama_customer from t_pembayaran a 
                        left join t_penjualan b on b.noso = a.noso
                        left join m_customer c on c.no_ktp = b.ktp")->num_rows();
        //$this->db->from('a.'.$table);
        //$this->db->join("b.");
        //$this->db->like($like);
        //$this->db->where($where);
        //$this->db->limit($pg, $limit);
        //return $this->db->get()->result_array();
    }
    
    public function count_fee() {
        //unset($like['page']);
        //$this->db->select("*");
        /*select a.*,b.nama_customer,c.fee,c.cara_pembelian,c.diskon,c.dp,c.sisa_hutang,c.tagih,d.norangka,d.warna,d.tipe from t_penjualan a left join m_customer b on b.no_ktp = a.ktp 
left join t_harga_motor c on c.noso = a.noso 
 
left join t_kwitansi_fee e on e.noso = a.noso
left join penerimaan_motor d on d.nomesin = a.nomsn
            WHERE a.noso LIKE "%'.$query.'%"  AND a.m_status =  "1" 
         */
        return $this->db->query("select a.*,c.nama_customer from t_kwitansi_fee a 
                        left join t_penjualan b on b.noso = a.noso
                        left join m_customer c on c.no_ktp = b.ktp")->num_rows();
        //$this->db->from('a.'.$table);
        //$this->db->join("b.");
        //$this->db->like($like);
        //$this->db->where($where);
        //$this->db->limit($pg, $limit);
        //return $this->db->get()->result_array();
    }
    
    public function get_data_print($id){
    //return $this->db->get_where($this->table_tpenjualan,array('noso'=>$id))->row();  
    
        $data = $this->db->query('select a.*,f.nama_customer,b.nomsn,b.warna_motor,b.harga_otr,c.fee,c.diskon,c.cara_pembelian,d.norangka,d.tipe_motor from t_kwitansi_diskon a 
        left join t_penjualan b on b.noso = a.noso 
        left join t_harga_motor c on c.noso = a.noso 
        left join m_motor d on d.nomsn = b.nomsn
        left join t_kwitansi_fee e on e.noso = a.noso
        left join m_customer f on f.no_ktp = b.ktp

                  WHERE a.noso ="'.$id.'" ')->row();
                return $data;

    }   
    
    public function get_data_print_fee($id){
    //return $this->db->get_where($this->table_tpenjualan,array('noso'=>$id))->row();  
    
    $data = $this->db->query('select a.*,f.nama_customer,b.nomsn,b.warna_motor,b.harga_otr,c.fee,c.diskon,c.cara_pembelian,d.norangka,d.tipe_motor from t_kwitansi_fee a 
left join t_penjualan b on b.noso = a.noso 
left join t_harga_motor c on c.noso = a.noso 
left join m_motor d on d.nomsn = b.nomsn
left join t_kwitansi_fee e on e.noso = a.noso
left join m_customer f on f.no_ktp = b.ktp
 
            WHERE a.noso ="'.$id.'"')->row();
        return $data;
        
    }   
    
    public function get_data_print_dp($id){
    //return $this->db->get_where($this->table_tpenjualan,array('noso'=>$id))->row();  
    
    $data = $this->db->query('select a.*,case a.transaksi when  "1" then "DP1" when "2" then "DP2" when "3" then "DP3" when "4" then "DP4" when "5" then "Pelunasan" when "6" then "Pelunasan DP"  end as statusf,
        f.nama_customer,b.nomsn,b.warna_motor,b.harga_otr,c.fee,c.diskon,c.cara_pembelian,d.norangka,d.tipe_motor from t_pembayaran a 
left join t_penjualan b on b.noso = a.noso 
left join t_harga_motor c on c.noso = a.noso 
left join m_motor d on d.nomsn = b.nomsn
left join t_kwitansi_fee e on e.noso = a.noso
left join m_customer f on f.no_ktp = b.ktp
 
 
            WHERE a.noso ="'.$id.'"')->row();
        return $data;
        
    }   
    
    public function getokki($query){
        /*
        $sqla = $this->db->query("select * from t_harga_motor where noso LIKE '%$query%'");
        $geta = $sqla->row();
        
        echo $tagihan_total = $geta->tagih;
        echo '<br>';
        echo $dp_pertama = $geta->dp;
        */
        $datadua = $this->db->query("select a.*,c.nama_customer,e.cara_pembelian,b.harga_otr,b.nomsn,b.warna_motor,d.norangka,d.tipe from t_pembayaran a 
            LEFT JOIN t_penjualan b on b.noso = a.noso
            LEFT JOIN m_customer c on c.no_ktp = b.ktp
            LEFT JOIN penerimaan_motor d on d.nomesin = b.nomsn
            LEFT JOIN t_harga_motor e on e.noso = a.noso where a.noso LIKE '%$query%' ORDER BY a.transaksi DESC");
        $getdua = $datadua->row();
        $show = array();
        foreach($datadua->result_array() as $list){
            $show[] = array('noso'=>$list['noso'],
                            'nama_customer'=>$list['nama_customer'],
                            'dp'=>formatrp($list['dp']),
                            'harga_otr'=>formatrp($list['harga_otr']),
                            'transaksi'=>$list['transaksi'],
                            'cara_pembelian'=>$list['cara_pembelian'],
                            'sisa_pembayaran'=>formatrp($list['sisa_pembayaran']),
                            'tagih'=>formatrp($list['dp']),
                            'no_rangka'=>$list['norangka'],
                            'no_mesin'=>$list['nomsn'],
                            'warna_motor'=>$list['warna_motor'],
                            'type'=>$list['tipe'],
                            );
        }
        
        return $show;
        //$tagihan_dua = $getdua->nominal;
        /*
        $sqlb = $this->db->query("select * from t_pembayaran where noso LIKE '%$query%'");
        $getb = $sqlb->row();
        
        $nominal = $getb->nominal;
        
        $total_dp_seluruhnya = $tagihan_total;
        $total_bayar_seluruhnya = $dp_pertama+$nominal;
        $sisa_bayar = $total_dp_seluruhnya-$total_bayar_seluruhnya;
        
        $data = array('tagihan_total'=>$tagihan_total,
                      'dp_pertama'=>$dp_pertama,
                      'total_dp_seluruhnya'=>$total_dp_seluruhnya,
                      'total_bayar_seluruhnya'=>$total_bayar_seluruhnya,
                      'sisa_pembayaran'=>$sisa_bayar
                     );
        return $data;
         * 
         */
    }
    
    public function getNOSO($query){
        $data = $this->db->query('select a.*,b.nama_customer,c.fee,c.cara_pembelian,c.diskon,c.dp,c.sisa_hutang,c.tagih,d.norangka,d.warna,d.tipe from t_penjualan a 
            left join m_customer b on b.no_ktp = a.ktp 
left join t_harga_motor c on c.noso = a.noso 
 
left join t_kwitansi_fee e on e.noso = a.noso
left join penerimaan_motor d on d.nomesin = a.nomsn
            WHERE a.noso LIKE "%'.$query.'%"  AND a.m_status =  "1" ');
       $show = array();
        foreach($data->result_array() as $list){
           //echo "<br>".terbilang($list['fee'],3)."<br>";
           //
           $show[] = array('noso'=>$list['noso'],
                         'fee'=>$list['fee'],
                         'harga_otr'=>formatrp($list['harga_otr']),
                         'diskon'=>$list['diskon'],
                         'dp'=>formatrp($list['dp']),
                         'dpall'=>formatrp($list['tagih']),
                         'cara_pembelian'=>$list['cara_pembelian'],
                         'nama_customer'=>$list['nama_customer'],
                         'nomsn'=>$list['nomsn'],
                         'warna_motor'=>$list['warna'],
                         'tipe_motor'=>$list['tipe'],
                         'norangka'=>$list['norangka'],
                         'fee'=>formatrp($list['fee']),
                         'tagih'=>formatrp($list['tagih']),
                         'sisa_hutang'=>formatrp($list['sisa_hutang']),
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
    
    function get_print_dp($id){
        return $this->db->query("SELECT a.*,b.harga_otr,c.nama_customer,d.leasing,d.cara_pembelian,e.nomesin,e.norangka,e.tipe,e.warna,e.tahun FROM t_pembayaran a
LEFT JOIN t_penjualan b on b.noso = a.noso
LEFT JOIN m_customer c on c.no_ktp = b.ktp
LEFT JOIN t_harga_motor d on d.noso = a.noso
LEFT JOIN penerimaan_motor e on e.nomesin = b.nomsn
WHERE a.id = '$id'")->row();
    }
    
    function get_print_fee($id){
        return $this->db->query("SELECT a.*,b.harga_otr,c.nama_customer,d.leasing,d.cara_pembelian,e.nomesin,e.norangka,e.tipe,e.warna,e.tahun FROM t_kwitansi_fee a
LEFT JOIN t_penjualan b on b.noso = a.noso
LEFT JOIN m_customer c on c.no_ktp = b.ktp
LEFT JOIN t_harga_motor d on d.noso = a.noso
LEFT JOIN penerimaan_motor e on e.nomesin = b.nomsn
WHERE a.id = '$id'")->row();
    }
    
      function get_detail_dp($id){
        return $this->db->query("SELECT a.*,b.harga_otr,c.nama_customer,d.leasing,d.cara_pembelian,d.tagih,d.sisa_hutang,e.nomesin,e.norangka,e.tipe,e.warna,e.tahun FROM t_pembayaran a
LEFT JOIN t_penjualan b on b.noso = a.noso
LEFT JOIN m_customer c on c.no_ktp = b.ktp
LEFT JOIN t_harga_motor d on d.noso = a.noso
LEFT JOIN penerimaan_motor e on e.nomesin = b.nomsn
WHERE a.id = '$id'")->row();
    }
    
    function get_detail_fee($id){
        return $this->db->query("SELECT a.*,c.nama_customer FROM t_kwitansi_fee a
        LEFT JOIN t_penjualan b on b.noso = a.noso
        LEFT JOIN m_customer c on c.no_ktp = b.ktp
        WHERE a.id = '$id'")->row();
    }
    function save_dp() {
        $id = $this->input->post('id');
/*array(16) { ["nokwitansi"]=> string(22) "KWT/KD/2016/XII/000001" ["noso"]=> string(21) "SO/MKA-2016/XI/000001" ["id"]=> string(0) "" ["nama_customer"]=> string(5) "Jarot" ["harga_otr"]=> string(10) "17.500.000" ["dp"]=> string(10) "10.000.000" ["cara_pembelian"]=> string(4) "Cash" ["transaksi"]=> string(0) "" ["nominal"]=> string(5) "20000" ["sisa"]=> string(7) "7480000" ["nomsn"]=> string(10) "MSN0101010" ["norangka"]=> string(10) "RGK9009090" ["tipe_motor"]=> string(7) "NC11D1D" ["warna_motor"]=> string(2) "WH" ["terbilang"]=> string(22) "Dua puluh ribu rupiah" ["submit"]=> string(0) "" } 
 */     $sisabayar = (currency_to_normal($this->input->post('sisa_hutang')) - str_replace(".","",$this->input->post('nominal')));

        $data_pembayaran = array(
            'nokwitansi' => $this->input->post('nokwitansi'),
            'noso' => $this->input->post('noso'),
            'dp' => currency_to_normal($this->input->post('dp')),  
            //'sisa_hutang'=> currency_to_normal($this->input->post('sisa_hutang')),
            'transaksi' => $this->input->post('transaksi'),
            'nominal' => str_replace(".","",$this->input->post('nominal')),
            'sisa_pembayaran' => $sisabayar,
            'fee' => $this->input->post('fee'),
            
            'm_status' => 1
        );
        

        /*
        echo "yang dibayar : ". $data_pembayaran['nominal'];
        echo "<br>";
        echo "yang harus dibayar : ".$data_pembayaran['sisa_hutang'];
        echo "<br>";
        echo "sisa nya :".$data_pembayaran['sisabayar'];
        exit();
         */
        
        if (empty($id)) {
            $this->db->insert($this->table_kwitansi_dp, $this->main_model->create_sys($data_pembayaran));
            return true;
        } else {
            $this->db->update($this->table_kwitansi_dp, $this->main_model->update_sys($data_pembayaran), array('id' => $id));
            return true;
        }
        return false;
    }

    
    function save_diskon() {
        $id = $this->input->post('id');
/*array(16) { ["nokwitansi"]=> string(22) "KWT/KD/2016/XII/000001" ["noso"]=> string(21) "SO/MKA-2016/XI/000001" ["id"]=> string(0) "" ["nama_customer"]=> string(5) "Jarot" ["harga_otr"]=> string(10) "17.500.000" ["dp"]=> string(10) "10.000.000" ["cara_pembelian"]=> string(4) "Cash" ["transaksi"]=> string(0) "" ["nominal"]=> string(5) "20000" ["sisa"]=> string(7) "7480000" ["nomsn"]=> string(10) "MSN0101010" ["norangka"]=> string(10) "RGK9009090" ["tipe_motor"]=> string(7) "NC11D1D" ["warna_motor"]=> string(2) "WH" ["terbilang"]=> string(22) "Dua puluh ribu rupiah" ["submit"]=> string(0) "" } 
 */
        $data_pembayaran = array(
            'nokwitansi' => $this->input->post('nokwitansi'),
            'noso' => $this->input->post('noso'),
            'diskon' => currency_to_normal($this->input->post('diskon')),  
            'm_status' => 1
        );

        if (empty($id)) {
            $this->db->insert($this->table_kwitansi_diskon, $this->main_model->create_sys($data_pembayaran));
            return true;
        } else {
            $this->db->update($this->table_kwitansi_diskon, $this->main_model->update_sys($data_pembayaran), array('id' => $id));
            return true;
        }
        return false;
    }

}
