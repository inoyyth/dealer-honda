<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_t_surat_jalan
 *
 * @author Langit-Biru
 */
class M_t_surat_jalan extends CI_Model {
    //put your code here
    var $table = "";
  
    public function getStnk($no_so){
        $this->db->select('t_stnk_customer.*');
        $this->db->from('t_stnk_customer');
        $this->db->join('t_stnk','t_stnk.id=t_stnk_customer.t_stnk_id','INNER');
        $this->db->where(array('t_stnk.no_so'=>$no_so));
        return $this->db->get()->row_array();
    }
    
    public function getAksesoris($pdi_id){
        $this->db->select('global_data.value as katagori_aksesoris');
        $this->db->from('t_pdi_detail');
        $this->db->join('m_aksesoris','t_pdi_detail.aksesoris_id=m_aksesoris.id','INNER');
        $this->db->join('global_data','global_data.id=m_aksesoris.kategori','INNER');
        $this->db->where(array('t_pdi_detail.pdi_id'=>$pdi_id));
        $query = $this->db->get()->result_array();
        $newArr = array('Buku Panduan','Kertas Gesek Polda');
        foreach ($query as $tmp) {
          $newArr = array_merge($newArr, array_values($tmp));
        }
        //dump($newArr,true);
        return $newArr;
    }
}
