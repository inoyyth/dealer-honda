<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of t_void
 *
 * @author Langit-Biru
 */
class t_void extends MX_Controller {
    //put your code here
    function __construct() {
        parent::__construct();
        
        $this->load->model(array('M_t_void' => 't_void', 'Datatable_model' => 'm_datatable'));
        $this->load->library(array('upload', 'encrypt', 'Printpdf', 'Auth_log'));
        
        //set breadcrumb
        $this->breadcrumbs->push('Transaksi PDI', '/pdi');
    }
    
    public function add() {
        $this->breadcrumbs->push('Add', '/pdi');
        
        $data['view'] = "t_void/add";
        $this->load->view('default', $data);
    }
    
    
    public function getSO(){ 
        $query = $this->input->get('query');
        $data = $this->t_void->getNOSO($query);
        //echo $this->db->last_query();
        echo json_encode($data);
    }
    
    public function get_action(){
        //echo "1";
        $noso = $this->input->post('noso');
        //var_dump($noso);
        
        $cancel = $this->t_void->get_action($noso);
        if($cancel){
            $this->session->set_flashdata('success', 'Void Berhasil di Eksekusi!');
            echo json_encode("true");
        }else{
            $this->session->set_flashdata('failed', 'Void Berhasil di Eksekusi!');
            echo json_encode("false");
        }
        
        redirect("void");
    }
    
    
    
}
