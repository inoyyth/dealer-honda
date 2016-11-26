<?php
Class M_motor_terima extends CI_Model{
    var $table = "penerimaan_motor";

    function insertData($data){
        $this->db->insert_batch($this->table,$data);
        return true;
    }
}