<?php

Class M_t_penjualan extends CI_Model {

    var $table_customer = "m_customer";
    var $table_tpenjualan = "t_penjualan";
    var $table_thargamotor = "t_harga_motor";
    var $table_motor = "m_motor";

    public function simpan($noso){
        $this->db->set('noso',$noso);
        $this->db->insert('t_penjualan');
    }
    public function save() {
        $id = $this->input->post('id');

        $data_penjualan = array('noso' => $this->input->post('noso'),
            'nokonsumen' => $this->input->post('nokonsumen'),
            'ktp' => $this->input->post('no_ktp'),
            'tanggal' => $this->input->post('tanggal'),
            'nomsn' => $this->input->post('nomsn'),
            'warna_motor' => $this->input->post('warna'),
            'harga_otr' => currency_to_normal($this->input->post('harga_otr')),
            'm_status' => 1
        );
        
        

        switch ($this->input->post('cara_pembelian')) {
            case 'kredit':
                $data_harga_motor = array(
                    'cara_pembelian' => $this->input->post('cara_pembelian'),
                    'marketing' => $this->input->post('marketing'),
                    'leasing' => $this->input->post('leasing'),
                    'dp_system' => currency_to_normal($this->input->post('dp_system')),
                    'diskon' => currency_to_normal($this->input->post('diskon')),
                    'tagih' => currency_to_normal($this->input->post('tagih')),
                    'dp' => currency_to_normal($this->input->post('dp')),
                    'sisa_hutang' => currency_to_normal($this->input->post('sisa_hutang')),
                    'fee' => currency_to_normal($this->input->post('fee')),
                    'm_status' => 1
                );
                break;
            default:
                $data_harga_motor = array(
                    'cara_pembelian' => $this->input->post('cara_pembelian'),
                    'marketing' => $this->input->post('marketing'),
                    'diskon' => currency_to_normal($this->input->post('diskon')),
                    'tagih' => currency_to_normal($this->input->post('tagih')),
                    'dp' => currency_to_normal($this->input->post('dp')),
                    'sisa_hutang' => currency_to_normal($this->input->post('sisa_hutang')),
                    'fee' => currency_to_normal($this->input->post('fee')),
                    'm_status' => 1
                );
                break;
        }
        $data_customer = array(
            'no_ktp' => $this->input->post('no_ktp'),
            'nama_customer' => $this->input->post('nama_customer'),
            'tempat_lahir_customer' => $this->input->post('tempat_lahir_customer'),
            'tanggal_lahir_customer' => $this->input->post('tanggal_lahir_customer'),
            'kelamin_customer' => $this->input->post('kelamin_customer'),
            'alamat_customer' => $this->input->post('alamat_customer'),
            'telepon_customer' => $this->input->post('telepon_customer'),
            'handphone_customer' => $this->input->post('handphone_customer'),
            'rt' => $this->input->post('rt'),
            'rw' => $this->input->post('rw'),
            'wilayah' => $this->input->post('wilayah'),
            'kelurahan' => $this->input->post('kelurahan'),
            'kecamatan' => $this->input->post('kecamatan'),
            'm_status' => 1//$this->input->post('no_ktp')
        );
        
        //echo json_encode($data_penjualan);
        //echo "<br>";
        //echo json_encode($data_harga_motor);
        //echo "<br>";
        //echo json_encode($data_customer);
        //exit();
        if (empty($id)) {
            $this->db->insert($this->table_customer, $this->main_model->create_sys($data_customer));
            $this->db->insert($this->table_tpenjualan, $this->main_model->create_sys($data_penjualan));
            $this->db->insert($this->table_thargamotor, $this->main_model->create_sys($data_harga_motor));
            // exit();
            return true;
           
        } else {
            $this->db->update($this->table_customer, $this->main_model->update_sys($data_customer), array('no_ktp' => $this->input->post('no_ktp')));
            $this->db->update($this->table_tpenjualan, $this->main_model->update_sys($data_penjualan), array('noso' => $this->input->post('noso')));
            $this->db->update($this->table_thargamotor, $this->main_model->update_sys($data_harga_motor), array('noso' => $this->input->post('noso')));
            return true;
        }
        return false;
        
    }

    public function getdata($table, $limit, $pg, $like = array(), $where = array()) {
        unset($like['page']);
        $this->db->select("*");
        $this->db->from($table);
        $this->db->like($like);
        $this->db->where($where);
        $this->db->limit($pg, $limit);
        return $this->db->get()->result_array();
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

    public function getdata_transaction_price_by_noso($noso) {
        $this->db->where('noso',$noso);
        $query = $this->db->get($this->table_thargamotor);
        return $query->row();
    }

}
