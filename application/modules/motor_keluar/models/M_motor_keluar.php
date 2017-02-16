<?php
Class M_motor_keluar extends CI_Model{
    var $table = "motor_keluar";
    public function save(){
            $id = $this->input->post('id');
            $data = array(
                'kode_motor_keluar'=>$this->input->post('kode_motor_keluar'),
                'id_gudang_in'=>$this->input->post('id_gudang_in'),
                'id_gudang_out'=>$this->input->post('id_gudang_out'),
                'tgl_motor_keluar'=>$this->input->post('tgl_motor_keluar'),
                'kode_po_motor_keluar'=>$this->input->post('kode_po_motor_keluar'),
                'kode_do_motor_keluar'=>$this->input->post('kode_do_motor_keluar'),
                'pic_motor_keluar'=>$this->input->post('pic_motor_keluar'),
                'keterangan_motor_keluar'=>$this->input->post('keterangan_motor_keluar')
            );
            if(empty($id)){
                    $this->db->insert($this->table,$this->main_model->create_sys($data));
                    $lastID = $this->db->insert_id();
                    $session = $this->session->userdata('logged_in_admin');
                    
                    $this->db->where_in('id_user', $session['id']);
                    $query = $this->db->get('detail_motor_keluar_temp')->result_array();
                    $dt = array();
                    foreach($query as $kQuery=>$vQuery){
                        $dt[] = array(
                            'no_mesin'=>$vQuery['no_mesin'],
                            'id_detail_motor_keluar'=>$lastID
                        );
                    }
                    $this->db->insert_batch('detail_motor_keluar',$dt);
                    $dtUpdate=array();
                    foreach($query as $kQuery=>$vQuery){
                        $dtUpdate[] = array(
                            'nomesin'=>$vQuery['no_mesin'],
                            'kdgudang'=>$this->input->post('id_gudang_in')
                        );
                    }
                    $this->db->update_batch('penerimaan_motor',$dtUpdate, 'nomesin'); 
                    return true;
            }else{
                    $this->db->update($this->table,$this->main_model->update_sys($data),array('id_motor_keluar'=>$id));
                    return true;
            }
            return false;
    }

    public function getdata($table,$limit,$pg,$like=array(),$where=array()){ 
        unset($like['page']);
        $this->db->select($this->table.".*,gudang_keluar.gudang as gudang_keluar,gudang_masuk.gudang as gudang_masuk");
        $this->db->from($table);
        $this->db->join('m_gudang gudang_keluar','gudang_keluar.id='.$this->table.'.id_gudang_out');
        $this->db->join('m_gudang gudang_masuk','gudang_masuk.id='.$this->table.'.id_gudang_in');
        $this->db->like($like);
        $this->db->where($where);
        $this->db->limit($pg,$limit);
        return $this->db->get()->result_array();
    }
    
    public function saveTemp(){
        $session = $this->session->userdata('logged_in_admin');
        $data = array(
                'no_mesin'=>$this->input->post('nomesin'),
                'id_user'=>$session['id']
            );
        $this->db->insert('detail_motor_keluar_temp',$data);
        return true;
    }
    
    public function saveInputMotorList(){
        $data = array(
                'no_mesin'=>$this->input->post('nomesin'),
                'id_detail_motor_keluar'=>$this->input->post('id'),
            );
        $this->db->update('penerimaan_motor',array('kdgudang'=>$this->input->post('gudang')),array('nomesin'=>$this->input->post('nomesin')));
        $this->db->insert('detail_motor_keluar',$data);
        
        return true;
    }
    
    public function get_motor_list($id){
        $this->db->select('penerimaan_motor.tipe,penerimaan_motor.nomesin,penerimaan_motor.norangka,penerimaan_motor.warna,penerimaan_motor.tahun');
        $this->db->from('penerimaan_motor');
        $this->db->join('detail_motor_keluar','detail_motor_keluar.no_mesin=penerimaan_motor.nomesin');
        $this->db->where(array('detail_motor_keluar.id_detail_motor_keluar'=>$id));
        return $this->db->get();
    }
    
    public function get_motor_keluar($id){
        $this->db->select('motor_keluar.kode_motor_keluar,motor_keluar.tgl_motor_keluar,motor_keluar.kode_po_motor_keluar,motor_keluar.kode_do_motor_keluar,motor_keluar.pic_motor_keluar,motor_keluar.keterangan_motor_keluar,gudang_out.gudang AS asal,gudang_in.gudang AS tujuan');
        $this->db->from('motor_keluar');
        $this->db->join('m_gudang gudang_out','gudang_out.id=motor_keluar.id_gudang_out');
        $this->db->join('m_gudang gudang_in','gudang_in.id=motor_keluar.id_gudang_in');
        $this->db->where(array('motor_keluar.id_motor_keluar'=>$id));
        return $this->db->get();
    }
}