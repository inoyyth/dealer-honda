<?php

class M_t_leasing extends CI_Model {

    //put your code here
    var $table = "t_kwitansi_leasing";
    var $table_kwitansi_dp = "t_pembayaran";
    var $table_kwitansi_fee = "t_kwitansi_fee";
    var $table_kwitansi_diskon = "t_kwitansi_diskon";
    // Data table transaksi
    var $table_customer = "m_customer";
    var $table_tpenjualan = "t_penjualan";
    var $table_thargamotor = "t_harga_motor";
    var $table_motor = "m_motor";
    var $table_penerimaan_motor = "penerimaan_motor";

    public function getdata_dp($table, $limit, $pg, $like = array(), $where = array()) {
        unset($like['page']);
        $this->db->select("a.*,c.nama_customer");
        $this->db->from($table . ' a');

        $this->db->join('t_penjualan b', 'b.noso=a.noso', "left");
        $this->db->join('m_customer c', 'c.no_ktp=b.ktp', "left");
        $this->db->like($like);
        $this->db->where($where);
        $this->db->limit($pg, $limit);
        return $this->db->get()->result_array();
    }

    public function getdata_fee($table, $limit, $pg, $like = array(), $where = array()) {
        unset($like['page']);
        $this->db->select("a.*,c.nama_customer");
        $this->db->from($table . ' a');

        $this->db->join('t_penjualan b', 'b.noso=a.noso', "left");
        $this->db->join('m_customer c', 'c.no_ktp=b.ktp', "left");
        $this->db->like($like);
        $this->db->where($where);
        $this->db->limit($pg, $limit);
        return $this->db->get()->result_array();
    }

    public function count_dp() {
        $this->db->select("a.*,c.nama_customer", false);
        $this->db->from("t_pembayaran a");
        $this->db->join("t_penjualan b", "b.noso = a.noso", "left");
        $this->db->join("m_customer c", "c.no_ktp = b.ktp", "left");
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_fee() {
        $this->db->select("a.*,c.nama_customer", false);
        $this->db->from("t_kwitansi_fee a");
        $this->db->join("t_penjualan b", "b.noso = a.noso", "left");
        $this->db->join("m_customer c", "c.no_ktp = b.ktp", "left");
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function get_data_print($id) {
        $this->db->select("a.*,f.nama_customer,b.nomsn,b.warna_motor,b.harga_otr,c.fee,c.diskon,c.cara_pembelian,d.norangka,d.tipe_motor", false);
        $this->db->from("t_kwitansi_diskon a");
        $this->db->join("t_penjualan b", "b.noso = a.noso", "left");
        $this->db->join("t_harga_motor c", "c.noso = a.noso", "left");
        $this->db->join("m_motor d", "d.nomsn = b.nomsn", "left");
        $this->db->join("t_kwitansi_fee e", "e.noso = a.noso", "left");
        $this->db->join("m_customer f", "f.no_ktp = b.ktp", "left");
        $this->db->where("a.noso", $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function get_data_print_fee($id) {
        $this->db->select("a.*,f.nama_customer,b.nomsn,b.warna_motor,b.harga_otr,c.fee,c.diskon,c.cara_pembelian,d.norangka,d.tipe_motor", false);
        $this->db->from("t_kwitansi_fee a");
        $this->db->join("t_penjualan b", "b.noso = a.noso", "left");
        $this->db->join("t_harga_motor c", "c.noso = a.noso", "left");
        $this->db->join("m_motor d", "d.nomsn = b.nomsn", "left");
        $this->db->join("t_kwitansi_fee e", "e.noso = a.noso", "left");
        $this->db->join("m_customer f", "f.no_ktp = b.ktp", "left");
        $this->db->where("a.noso", $id);
        $this->db->where("a.m_status", "1");
        $query = $this->db->get();
        return $query->row();
    }

    public function get_data_print_dp($id) {

        $this->db->select('a.*,case a.transaksi when  "1" then "DP1" when "2" then "DP2" when "3" then "DP3" when "4" then "DP4" when "5" then "Pelunasan" when "6" then "Pelunasan DP"  end as statusf,
        f.nama_customer,b.nomsn,b.warna_motor,b.harga_otr,c.fee,c.diskon,c.cara_pembelian,d.norangka,d.tipe_motor', false);
        $this->db->from('t_pembayaran a');
        $this->db->join('t_penjualan b', 'b.noso = a.noso', 'left');
        $this->db->join('t_harga_motor c', 'c.noso = a.noso', 'left');
        $this->db->join('m_motor d', 'd.nomsn = b.nomsn', 'left');
        $this->db->join('t_kwitansi_fee e', 'e.noso = a.noso', 'left');
        $this->db->join('m_customer f', 'f.no_ktp = b.ktp', 'left');
        $this->db->where('a.noso', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function getokki($query) {

        $datadua = $this->db->query("select a.*,c.nama_customer,e.cara_pembelian,b.harga_otr,b.nomsn,b.warna_motor,d.norangka,d.tipe from t_pembayaran a 
            LEFT JOIN t_penjualan b on b.noso = a.noso
            LEFT JOIN m_customer c on c.no_ktp = b.ktp
            LEFT JOIN penerimaan_motor d on d.nomesin = b.nomsn
            LEFT JOIN t_harga_motor e on e.noso = a.noso where a.noso LIKE '%$query%' ORDER BY a.transaksi DESC");

        $getdua = $datadua->row();
        $show = array();
        foreach ($datadua->result_array() as $list) {
            $show[] = array('noso' => $list['noso'],
                'nama_customer' => $list['nama_customer'],
                'dp' => formatrp($list['dp']),
                'harga_otr' => formatrp($list['harga_otr']),
                'transaksi' => $list['transaksi'],
                'cara_pembelian' => $list['cara_pembelian'],
                'sisa_pembayaran' => formatrp($list['sisa_pembayaran']),
                'tagih' => formatrp($list['dp']),
                'no_rangka' => $list['norangka'],
                'no_mesin' => $list['nomsn'],
                'warna_motor' => $list['warna_motor'],
                'type' => $list['tipe'],
            );
        }

        return $show;
    }

    public function getNOSO($query) {

        $this->db->select('a.noso,a.harga_otr,a.tanggal,b.nama_customer,c.nomesin,c.norangka,c.tipe,c.warna,c.tahun, e.leasing as kdleasing, f.leasing,e.dp_system,e.diskon,(a.harga_otr - e.dp_system) as tagihan', false);
        $this->db->from('t_penjualan a');
        $this->db->join('m_customer b', 'b.no_ktp = a.ktp', 'left');
        $this->db->join('penerimaan_motor c', 'c.nomesin = a.nomsn', 'left');
        $this->db->join('m_motor d', 'd.tipe_motor = c.tipe', 'left');
        $this->db->join('t_harga_motor e', 'e.noso = a.noso', 'left');
        $this->db->join('m_leasing f', 'f.kd_leasing = e.leasing', 'left');
        $this->db->like('a.noso', $query);
        $this->db->where('a.m_status', '1');
        $data = $this->db->get();

        $show = array();
        foreach ($data->result_array() as $list) {

            $show[] = array('noso' => $list['noso'],
                'harga_otr' => formatrp($list['harga_otr']),
                'diskon' => $list['diskon'],
                'tagihan' => $list['tagihan'],
                'tanggal' => $list['tanggal'],
                'tahun' => $list['tahun'],
                'nama_customer' => $list['nama_customer'],
                'tipe' => $list['tipe'],
                'warna' => $list['warna'],
                'leasing' => $list['leasing'],
                'dp_system' => formatrp($list['dp_system']),
                'diskon' => formatrp($list['diskon']),
                'tagihan' => formatrp($list['tagihan']),
                'tipe' => $list['tipe'],
                'norangka' => $list['norangka'],
                'nomesin' => $list['nomesin']
            );
        }
        return $show;
    }

    public function getSO($query) {

        $this->db->select('a.noso,a.harga_otr,a.tanggal,b.nama_customer,c.nomesin,c.norangka,c.tipe,c.warna,c.tahun, e.leasing as kdleasing, f.leasing,e.dp_system,e.diskon,(a.harga_otr - e.dp_system) as tagihan', false);
        $this->db->from('t_penjualan a');
        $this->db->join('m_customer b', 'b.no_ktp = a.ktp', 'left');
        $this->db->join('penerimaan_motor c', 'c.nomesin = a.nomsn', 'left');
        $this->db->join('m_motor d', 'd.tipe_motor = c.tipe', 'left');
        $this->db->join('t_harga_motor e', 'e.noso = a.noso', 'left');
        $this->db->join('m_leasing f', 'f.kd_leasing = e.leasing', 'left');
        $this->db->like('a.noso', $query);
        $this->db->where('a.status_kwitansi', 0);
        $this->db->where('a.m_status', '1');
        $data = $this->db->get();

        $show = array();
        foreach ($data->result_array() as $list) {

            $show[] = array('noso' => $list['noso'],
                'harga_otr' => formatrp($list['harga_otr']),
                'diskon' => $list['diskon'],
                'tagihan' => $list['tagihan'],
                'tanggal' => $list['tanggal'],
                'tahun' => $list['tahun'],
                'nama_customer' => $list['nama_customer'],
                'tipe' => $list['tipe'],
                'warna' => $list['warna'],
                'leasing' => $list['leasing'],
                'dp_system' => formatrp($list['dp_system']),
                'diskon' => formatrp($list['diskon']),
                'tagihan' => formatrp($list['tagihan']),
                'tipe' => $list['tipe'],
                'norangka' => $list['norangka'],
                'nomesin' => $list['nomesin']
            );
        }
        return $show;
    }

    function update_so_penjualan($noso, $status) {
        $data['status_kwitansi'] = $status;
        $this->db->where('noso', $noso);
        $query = $this->db->update('t_penjualan', $data);
        return $query;
    }

    function get_data_penjualan($query) {
        $this->db->select('a.noso,a.harga_otr,a.tanggal,b.nama_customer,c.nomesin,c.norangka,c.tipe,c.warna,c.tahun, e.leasing as kdleasing, f.leasing,e.dp_system,e.diskon,(a.harga_otr - e.dp_system) as tagihan', false);
        $this->db->from('t_penjualan a');
        $this->db->join('m_customer b', 'b.no_ktp = a.ktp', 'left');
        $this->db->join('penerimaan_motor c', 'c.nomesin = a.nomsn', 'left');
        $this->db->join('m_motor d', 'd.tipe_motor = c.tipe', 'left');
        $this->db->join('t_harga_motor e', 'e.noso = a.noso', 'left');
        $this->db->join('m_leasing f', 'f.kd_leasing = e.leasing', 'left');
        $this->db->like('a.noso', $query);
        $this->db->where('a.m_status', '1');
        $data = $this->db->get();

        return $data->row();
    }

    public function getdata_transaction_price_by_noso($noso) {
        $this->db->where('noso', $noso);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get($this->table_kwitansi_dp);
        return $query->row();
    }

    public function getdata_transaction_by_noso($noso) {
        $this->db->select("a.noso,a.harga_otr,a.tanggal,b.nama_customer,c.nomesin,c.norangka,c.tipe,c.warna,c.tahun,e.leasing,e.dp_system,e.diskon,(a.harga_otr - e.dp_system) as tagihan ", false);
        $this->db->from("t_penjualan a");
        $this->db->join("m_customer b", "b.no_ktp = a.ktp", "left");
        $this->db->join("penerimaan_motor c", "c.nomesin = a.nomsn", "left");
        $this->db->join("m_motor d", "d.tipe_motor = c.tipe", "left");
        $this->db->join("t_harga_motor e", "e.noso = a.noso", "left");
        $this->db->where("a.noso", $noso);
        $query = $this->db->get();
        return $query->result_array();
    }

    function get_sum_pembayaran() {
        $this->db->select("", false);
    }

    function save_kw_leasing() {
        $id = $this->input->post('id');

        $data_pembayaran = array(
            'nokwitansi' => $this->input->post('nokwitansi'),
            'noso' => $this->input->post('noso'),
            'dp_system' => currency_to_normal($this->input->post('dp_system')),
            'tagih' => currency_to_normal($this->input->post('tagih')),
            'subsidi1' => currency_to_normal($this->input->post('subsidi1')),
            'subsidi2' => currency_to_normal($this->input->post('subsidi2')),
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

    function update_kw_leasing() {
        $nokwitansi = $this->input->post('nokwitansi');
        $data_pembayaran = array(
            'noso' => $this->input->post('noso'),
            'dp_system' => currency_to_normal($this->input->post('dp_system')),
            'tagih' => currency_to_normal($this->input->post('tagih')),
            'subsidi1' => currency_to_normal($this->input->post('subsidi1')),
            'subsidi2' => currency_to_normal($this->input->post('subsidi2')),
            'm_status' => 1
        );

        $query = $this->db->update($this->table, $this->main_model->update_sys($data_pembayaran), array('nokwitansi' => $nokwitansi));
        return $query;
    }

    function get_print_dp($id) {
        $this->db->select("a.*,b.harga_otr,c.nama_customer,d.leasing,d.cara_pembelian,e.nomesin,e.norangka,e.tipe,e.warna,e.tahun", false);
        $this->db->from("t_pembayaran a");
        $this->db->join("t_penjualan b", "b.noso = a.noso", "left");
        $this->db->join("m_customer c", "c.no_ktp = b.ktp", "left");
        $this->db->join("t_harga_motor d", "d.noso = a.noso", "left");
        $this->db->join("penerimaan_motor e", "e.nomesin = b.nomsn", "left");
        $this->db->where("a.id", $id);
        $query = $this->db->get();
        return $query->row();
    }

    function get_print_fee($id) {
        $this->db->select("a.*,b.harga_otr,c.nama_customer,d.leasing,d.cara_pembelian,e.nomesin,e.norangka,e.tipe,e.warna,e.tahun", false);
        $this->db->from("t_kwitansi_fee a", false);
        $this->db->join("t_penjualan b", "b.noso = a.noso", "left");
        $this->db->join("m_customer c", "c.no_ktp = b.ktp", "left");
        $this->db->join("t_harga_motor d", "d.noso = a.noso", "left");
        $this->db->join("penerimaan_motor e", "e.nomesin = b.nomsn", "left");
        $this->db->where("a.id", $id);
        $query = $this->db->get();
        return $query->row();
    }

    function get_detail_dp($id) {

        $this->db->select("a.*,b.harga_otr,c.nama_customer,d.leasing,d.cara_pembelian,d.tagih,d.sisa_hutang,e.nomesin,e.norangka,e.tipe,e.warna,e.tahun", false);
        $this->db->from("t_pembayaran a");
        $this->db->join("t_penjualan b", "b.noso = a.noso", "left");
        $this->db->join("m_customer c", "c.no_ktp = b.ktp", "left");
        $this->db->join("t_harga_motor d", "d.noso = a.noso", "left");
        $this->db->join("penerimaan_motor e", "e.nomesin = b.nomsn", "left");
        $this->db->where("a.id", $id);
        $query = $this->db->get();
        return $query->row();
    }

    function get_detail_fee($id) {

        $this->db->select("a.*,c.nama_customer", false);
        $this->db->from("t_kwitansi_fee a");
        $this->db->join("t_penjualan b", "b.noso = a.noso", "left");
        $this->db->join("m_customer c", "c.no_ktp = b.ktp", "left");
        $this->db->where("a.id", $id);
        $query = $this->db->get();
        return $query->row();
    }

    function save_dp() {
        $id = $this->input->post('id');
        $sisabayar = (currency_to_normal($this->input->post('sisa_hutang')) - str_replace(".", "", $this->input->post('nominal')));

        $data_pembayaran = array(
            'nokwitansi' => $this->input->post('nokwitansi'),
            'noso' => $this->input->post('noso'),
            'dp' => currency_to_normal($this->input->post('dp')),
            //'sisa_hutang'=> currency_to_normal($this->input->post('sisa_hutang')),
            'transaksi' => $this->input->post('transaksi'),
            'nominal' => str_replace(".", "", $this->input->post('nominal')),
            'sisa_pembayaran' => $sisabayar,
            'fee' => $this->input->post('fee'),
            'm_status' => 1
        );

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

    function kwitansi_a($extract) {
        $this->db->select('a.nokwitansi,a.noso,b.harga_otr,b.tanggal,c.nama_customer,d.nomesin,d.norangka,d.tipe,d.warna,d.tahun,e.nama_motor,f.leasing as kdleasing,f.dp_system,f.diskon,(b.harga_otr - f.dp_system) as tagihan,g.leasing,g.pic', false);
        $this->db->from('t_kwitansi_leasing a');
        $this->db->join('t_penjualan b', 'b.noso = a.noso', 'left');
        $this->db->join('m_customer c', 'c.no_ktp = b.ktp', 'left');
        $this->db->join('penerimaan_motor d', 'd.nomesin = b.nomsn', 'left');
        $this->db->join('m_motor e', 'e.tipe_motor = d.tipe', 'left');
        $this->db->join('t_harga_motor f', 'f.noso = b.noso', 'left');
        $this->db->join('m_leasing g', 'g.kd_leasing= f.leasing', 'left');
        $this->db->where('a.nokwitansi', $extract);
        $this->db->where('a.m_status', '1');
        $query = $this->db->get();
        return $query->row();
    }

    function kwitansi_b($extract) {
        $this->db->select('a.nokwitansi,a.noso,b.harga_otr,b.tanggal,c.nama_customer,d.nomesin,d.norangka,d.tipe,d.warna,d.tahun,e.nama_motor,f.leasing,f.dp_system,f.diskon,(b.harga_otr - f.dp_system) as tagihan', false);
        $this->db->from('t_kwitansi_leasing a');
        $this->db->join('t_penjualan b', 'b.noso = a.noso', 'left');
        $this->db->join('m_customer c', 'c.no_ktp = b.ktp', 'left');
        $this->db->join('penerimaan_motor d', 'd.nomesin = b.nomsn', 'left');
        $this->db->join('m_motor e', 'e.tipe_motor = d.tipe', 'left');
        $this->db->join('t_harga_motor f', 'f.noso = b.noso', 'left');
        $this->db->where('a.nokwitansi', $extract);
        $this->db->where('a.m_status', '1');
        $query = $this->db->get();
        return $query->row();
    }

    function kwitansi_c($extract) {
        $this->db->select('a.nokwitansi,a.noso,a.subsidi1,a.subsidi2,g.kalimat_kw_1,g.kalimat_kw_2,b.harga_otr,b.tanggal,c.nama_customer,d.nomesin,d.norangka,d.tipe,d.warna,d.tahun,e.nama_motor,f.leasing,f.dp_system,f.diskon,(b.harga_otr - f.dp_system) as tagihan', false);
        $this->db->from('t_kwitansi_leasing a');
        $this->db->join('t_penjualan b', 'b.noso = a.noso', 'left');
        $this->db->join('m_customer c', 'c.no_ktp = b.ktp', 'left');
        $this->db->join('penerimaan_motor d', 'd.nomesin = b.nomsn', 'left');
        $this->db->join('m_motor e', 'e.tipe_motor = d.tipe', 'left');
        $this->db->join('t_harga_motor f', 'f.noso = b.noso', 'left');
        $this->db->join('m_leasing g', 'g.kd_leasing = f.leasing', 'left');
        $this->db->where('a.nokwitansi', $extract);
        $this->db->where('a.m_status', '1');
        $query = $this->db->get();
        return $query->row();
    }

    function kwitansi_c2($extract) {
        $this->db->select('a.nokwitansi,a.noso,a.subsidi1,a.subsidi2,g.kalimat_kw_1,g.kalimat_kw_2,b.harga_otr,b.tanggal,c.nama_customer,d.nomesin,d.norangka,d.tipe,d.warna,d.tahun,e.nama_motor,f.leasing,f.dp_system,f.diskon,(b.harga_otr - f.dp_system) as tagihan', false);
        $this->db->from('t_kwitansi_leasing a');
        $this->db->join('t_penjualan b', 'b.noso = a.noso', 'left');
        $this->db->join('m_customer c', 'c.no_ktp = b.ktp', 'left');
        $this->db->join('penerimaan_motor d', 'd.nomesin = b.nomsn', 'left');
        $this->db->join('m_motor e', 'e.tipe_motor = d.tipe', 'left');
        $this->db->join('t_harga_motor f', 'f.noso = b.noso', 'left');
        $this->db->join('m_leasing g', 'g.kd_leasing = f.leasing', 'left');
        $this->db->where('a.nokwitansi', $extract);
        $this->db->where('a.m_status', '1');
        $query = $this->db->get();
        return $query->row();
    }

    public function getdata($table, $limit, $pg, $like = array(), $where = array()) {
        unset($like['page']);

        $this->db->from($table);
        $this->db->like($like);
        $this->db->where($where);
        $this->db->limit($pg, $limit);
        return $this->db->get()->result_array();
    }

}
