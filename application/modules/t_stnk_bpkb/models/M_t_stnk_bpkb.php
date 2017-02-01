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

    var $table = "t_stnk";
    var $table_customer = "t_stnk_customer";

    public function getdata($table, $limit, $pg, $like = array(), $where = array()) {
        unset($like['page']);
        $this->db->select($this->table.".*,t_stnk_nama");
        $this->db->from($table);
        $this->db->join('t_stnk_customer',$this->table.'.id=t_stnk_customer.t_stnk_id');
        $this->db->like($like);
        $this->db->where($where);
        $this->db->limit($pg, $limit);
        return $this->db->get()->result_array();
    }

    public function getdata_transaction_price_by_noso($noso) {
        $this->db->where('noso', $noso);
        $query = $this->db->get($this->table_kwitansi_dp);
        return $query->row();
    }

    function save_proses() {
        $id = $this->input->post('id');
        $data_stnk = array(
            'no_so' => $this->input->post('noso'),
            'no_process' => $this->input->post('no_proses'),
            'stnk_process_date' => $this->input->post('tgl_proses_stnk'),
            'stnk_estimate_date' => $this->input->post('est_stnk_selesai'),
            'bpkb_process_date' => $this->input->post('tgl_proses_bpkb'),
            'bpkb_estimate_date' => $this->input->post('est_bpkb_selesai')
        );
        $data_customer = array(
            't_stnk_ktp' => $this->input->post('ktp_stnk'),
            't_stnk_nama' => $this->input->post('nama'),
            't_stnk_tempat_lahir' => $this->input->post('tempat_lahir'),
            't_stnk_tgl_lahir' => $this->input->post('tanggal_lahir'),
            't_stnk_jenis_kelamin' => $this->input->post('kelamin_customer'),
            't_stnk_alamat' => $this->input->post('alamat_customer'),
            't_stnk_rt' => $this->input->post('rt'),
            't_stnk_rw' => $this->input->post('rw'),
            't_stnk_wilayah' => $this->input->post('wilayah'),
            't_stnk_kelurahan' => $this->input->post('kelurahan'),
            't_stnk_kecamatan' => $this->input->post('kecamatan'),
            't_stnk_telepon' => $this->input->post('telepon_customer'),
            't_stnk_handphone' => $this->input->post('handphone_customer')
        );

        if (empty($id)) {
            $insert = $this->db->insert($this->table, $this->main_model->create_sys($data_stnk));
            if ($insert) {
                $last_insert = $this->db->insert_id();
                $combine_array = array_merge($data_customer, array('t_stnk_id' => $last_insert));
                $this->db->insert($this->table_customer, $this->main_model->create_sys($combine_array));
            }
            return true;
        } else {
            $update = $this->db->update($this->table, $this->main_model->update_sys($data_stnk), array('id' => $id));
            if ($update) {
                $this->db->update($this->table_customer, $this->main_model->update_sys($data_customer), array('t_stnk_id' => $id));
            }
            return true;
        }
        return false;
    }
    
    public function getTpenjualan($no_so){
        $this->db->select('id');
        $this->db->from('t_penjualan');
        $this->db->where(array('noso'=>$no_so));
        return $this->db->get()->row_array();
    }
    
    public function getSO($query,$inside){
        $this->db->select('t_penjualan.id,t_penjualan.ktp,t_penjualan.nomsn,t_penjualan.noso');
        $this->db->from('t_penjualan');
        $this->db->join('t_harga_motor','t_penjualan.noso=t_harga_motor.noso','INNER');
        $this->db->like(array('t_penjualan.noso'=>$query));
        $this->db->where(array('t_penjualan.m_status'=>'1','t_harga_motor.dp_lunas'=>'2'));
        if(count($inside) > 0){
            $this->db->where_not_in('t_penjualan.noso',$inside);
        }
        return $this->db->get();
    }
}
