<?php

class M_t_terima_stnk extends CI_Model {

    var $table = "t_terima_stnk";

    public function getdata($table, $limit, $pg, $like = array(), $where = array()) {
        unset($like['page']);
        $this->db->select($this->table.".*,m_biro_jasa.nama_birojasa,t_stnk.no_process");
        $this->db->from($table);
        $this->db->join('m_biro_jasa',$this->table.'.birojasa_id=m_biro_jasa.id');
        $this->db->join('t_stnk',$this->table.'.t_stnk_id=t_stnk.id');
        $this->db->like($like);
        $this->db->where($where);
        $this->db->limit($pg, $limit);
        return $this->db->get()->result_array();
    }
    
    function save_proses() {
        $id = $this->input->post('id');
        $data = array(
            't_stnk_id' => $this->input->post('t_stnk_id'),
            'birojasa_id' => $this->input->post('birojasa_id'),
            't_terima_no_polisi' => $this->input->post('t_terima_no_polisi'),
            't_terima_no_stnk' => $this->input->post('t_terima_no_stnk'),
            't_terima_no_bpkb' => $this->input->post('t_terima_no_bpkb'),
            't_terima_tgl_stnk' => $this->input->post('t_terima_tgl_stnk'),
            't_terima_tgl_bpkb' => $this->input->post('t_terima_tgl_bpkb'),
            't_terima_tgl_stnk' => $this->input->post('t_terima_tgl_stnk'),
            't_terima_tgl_bpkb' => $this->input->post('t_terima_tgl_bpkb'),
            't_terima_no_bon_1' => $this->input->post('t_terima_no_bon_1'),
            't_terima_no_bon_2' => $this->input->post('t_terima_no_bon_2'),
            't_terima_add_biaya_1' => (float) preg_replace('/[^0-9]+/', '',$this->input->post('t_terima_add_biaya_1')),
            't_terima_add_biaya_2' => (float) preg_replace('/[^0-9]+/', '',$this->input->post('t_terima_add_biaya_2')),
            't_terima_add_biaya_1_description' => $this->input->post('t_terima_add_biaya_1_description')
        );

        if (empty($id)) {
            $this->db->insert($this->table, $this->main_model->create_sys($data));
            return true;
        } else {
            $this->db->update($this->table, $this->main_model->update_sys($data), array('id' => $id));
            return true;
        }
        return false;
    }
}
