<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_t_void
 *
 * @author Langit-Biru
 */
class M_t_void extends CI_Model {
    //put your code here
    var $table_kwitansi_dp = "t_void";
    
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
        $data = $this->db->query('select * from t_penjualan where noso LIKE "%'.$query.'%"  AND m_status =  "1" ');
        $show = array();
        foreach($data->result_array() as $list){
         
           $show[] = array('noso'=>$list['noso']);
          
        }
        return $show;
    }
    
    public function get_action($noso){
          //$query = $this->db->get_where('mytable', array('id' => $id), $limit, $offset);
          $getdatastnk = $this->db->query("select * from t_stnk_bpkb where noso = '".$noso."'")->row();
          //var_dump($getdatastnk->noso."".$getdatastnk->noproses);
          //exit();
          $data_a = $this->db->set('m_status','4')->where('noso',$noso)->update('t_penjualan');
          //$this->db->set('m_status','4')->where('noso',$noso)->update('t_data_stnk_bpkb');
          $data_b =$this->db->set('m_status','4')->where('noso',$noso)->update('t_kwitansi_diskon');
          $data_c =$this->db->set('m_status','4')->where('noso',$noso)->update('t_kwitansi_fee');
          $data_d =$this->db->set('m_status','4')->where('noso',$noso)->update('t_pdi');
          $data_e =$this->db->set('m_status','4')->where('noso',$noso)->update('t_pembayaran');
          $data_f =$this->db->set('m_status','4')->where('noso',$noso)->update('t_penjualan');
          $data_g =$this->db->set('m_status','4')->where('noso',$noso)->update('t_harga_motor');
          
          return $data_a; 
          return $data_b;
          return $data_c;
          return $data_d;
          return $data_e;
          return $data_f;
          return $data_g;
          //$this->db->set('m_status','4')->where('noso',$noso)->update('t_stnk_bpkb');
          //$this->db->set('m_status','4')->where('noso',$noso)->update('t_data_stnk_bpkb');
    }
    
}

