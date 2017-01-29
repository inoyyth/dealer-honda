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

    var $table_pdi = "t_pdi";

    public function getdata($table, $limit, $pg, $like = array(), $where = array()) {
        unset($like['page']);
        $this->db->select($this->table_pdi.".*,account.nama_lengkap");
        $this->db->from($table);
        $this->db->join('account','account.id='.$this->table_pdi.'.sj_print_user_id','LEFT');
        $this->db->like($like);
        $this->db->where($where);
        $this->db->order_by('id','desc');
        $this->db->limit($pg, $limit);
        return $this->db->get()->result_array();
    }

    function save() {
        $id = $this->input->post('id');
        $accs = $this->input->post('aksesoris');
        $data_pembayaran = array(
            'noso' => $this->input->post('noso'),
            'nosj' => $this->input->post('nosj'),
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
                foreach ($accs as $k => $v) {
                    $result[] = array('pdi_id' => $last_id, 'aksesoris_id' => $v);
                }
                $insert_detail = $this->db->insert_batch('t_pdi_detail', $result);
                if ($insert_detail) {
                    foreach ($accs as $ks => $vs) {
                        $this->__update_aksesoris_value($vs, $this->input->post('gudang_id'), $this->input->post('kdpdi'));
                    }
                }
            }
            return true;
        } else {
            //if ($insert) {
                $result = array();
                $release = $this->__releaseAksesoris($id, $this->input->post('kdpdi'));
                if ($release) {
                    $this->db->delete('t_pdi_detail', array('pdi_id' => $id));
                    foreach ($accs as $k => $v) {
                        $result[] = array('pdi_id' => $id, 'aksesoris_id' => $v);
                    }
                    $insert_detail = $this->db->insert_batch('t_pdi_detail', $result);
                    if ($insert_detail) {
                        foreach ($accs as $ks => $vs) {
                            $this->__update_aksesoris_value($vs, $this->input->post('gudang_id'), $this->input->post('kdpdi'));
                        }
                    }
                }
                $update = $this->db->update($this->table_pdi, $this->main_model->update_sys($data_pembayaran), array('id' => $id));
            //}
            return true;
        }
        return false;
    }

    public function getSO($query,$inside){
        //("SELECT * FROM t_penjualan WHERE noso LIKE '%$query%' AND m_status='1' AND noso NOT IN ($so_implode)")
        $this->db->select('*');
        $this->db->from('t_penjualan');
        $this->db->join('t_harga_motor','t_penjualan.noso=t_harga_motor.noso','INNER');
        $this->db->like(array('t_penjualan.noso'=>$query));
        $this->db->where(array('t_penjualan.m_status'=>'1','t_harga_motor.dp_lunas'=>'2'));
        $this->db->where_not_in('t_penjualan.noso',$inside);
        return $this->db->get();
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

    public function __update_aksesoris_value($aksesoris_id, $gudang, $pdi) {
        $data = array(
            'aksesoris_id' => $aksesoris_id,
            'jumlah' => 1,
            'tanggal_terima' => date('Y-m-d H:i:s'),
            'status_add_or_min' => 2,
            'keterangan' => 'Update By System For ' . $pdi,
            'gudang_id' => $gudang,
            'by_system' => 2
        );
        $this->db->insert('penerimaan_aksesoris', $data);
        return TRUE;
    }

    public function __releaseAksesoris($id, $kdpdi) {
        $gudang = $this->db->get_where('t_pdi',array('id'=>$id))->row_array();
        $aksesorisPdi = $this->db->get_where('t_pdi_detail', array('pdi_id' => $id))->result_array();
        foreach ($aksesorisPdi as $k => $v) {
            $data = array(
                'aksesoris_id' => $v['aksesoris_id'],
                'jumlah' => 1,
                'tanggal_terima' => date('Y-m-d H:i:s'),
                'status_add_or_min' => 1,
                'keterangan' => 'Release By System For ' . $kdpdi,
                'gudang_id' => $gudang['gudang_id'],
                'by_system' => 2
            );
            $this->db->insert('penerimaan_aksesoris', $data);
        }
        return TRUE;
    }

}
