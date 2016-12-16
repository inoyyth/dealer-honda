<?php

Class Datatable_model extends CI_Model {

    private function _get_datatables_query($table,$column_order,$column_search,$order,$where,$joint,$group_by){
        $this->db->select($column_search);
        $this->db->from($table);
        $this->db->where($where); //dump($joint,true);
        if(isset($joint)){
            foreach($joint as $kJoin=>$vJoin){
                $this->db->join($vJoin['table'],$vJoin['where'],$vJoin['join']);
            }
        }
        
        $i = 0;
        foreach ($column_search as $item) { // loop column 
            if ($_POST['search']['value']) { // if datatable send POST for search
                if ($i === 0) { // first loop
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }

        if (isset($_POST['order'])) { // here order processing
            $this->db->order_by($column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($order)) {
            $order = $order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
        
        $this->db->group_by($group_by);
    }
 
    function get_datatables($table,$column_order=array(),$column_search=array(),$order=array('id'=>'asc'),$where=array(),$join=array(),$group_by=array()){
        $this->_get_datatables_query($table,$column_order,$column_search,$order,$where,$join,$group_by);
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered($table,$column_order=array(),$column_search=array(),$order=array('id'=>'asc'),$where=array(),$join=array(),$group_by=array()){
        $this->_get_datatables_query($table,$column_order,$column_search,$order,$where,$join,$group_by);
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all($table,$where=array()){
        $this->db->from($table);
        $this->db->where($where);
        return $this->db->count_all_results();
    }

}
