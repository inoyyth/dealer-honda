<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Codeigniter Multilevel menu Class
 * Provide easy way to render multi level menu
 * 
 * @package			CodeIgniter
 * @subpackage		Libraries
 * @category		Libraries
 * @author		Inoy YTh
 * @link    		https://github.com/edomaru/codeigniter_multilevel_menu
 */
class Button_lib {

    private $uri_segment = 1;
    
    public function __construct($config = array()) {
        // just in case url helper has not load yet
        $this->ci = & get_instance();
    }
    
    public function render($config=array()) {
        $segment = $this->ci->uri->segment($this->uri_segment);
        $session = $this->ci->session->userdata('logged_in_admin');
        $menu = unserialize($session['access_menu']);
        $itemx = array();
        foreach ($menu as $item) {
            if (is_array($item) && isset($item['slug'])) {
                if ($item['slug'] == str_replace('-page','',$segment)) { // or other string comparison
                    $itemx [] = $item;
                }
            }
        }
        if($itemx[0]['child'][$config['anchor']]==1){
            $this->__setButton($config);
        }else{
            echo "";
        }
        //var_dump($config);
    }
    
    public function __setButton($config){
        $event = "";
        if($config['anchor']=="add"){
            $style = "btn btn-primary btn-sm";
            $icon = "fa fa-plus-square";
        }
        if($config['anchor']=="upd"){
            $style = "btn btn-warning btn-sm";
            $icon = "fa fa-edit";
        }
        if($config['anchor']=="del"){
            $style = "btn btn-danger btn-sm";
            $icon = "fa fa-remove";
            $event = "onclick='return confirm(\"Yakin Hapus Data ?\");'";
        }
        if($config['anchor']=="prt"){
            $style = "btn btn-default btn-sm";
            $icon = "fa fa-print";
        }
        if($config['anchor']=="det"){
            $style = "btn btn-succes btn-sm";
            $icon = "fa fa-info-circle";
        }
        echo "<a href='".base_url($config['url'])."' ".$event." class='".$style."'><i class='".$icon."'></i> ".$config['text']."</a>";
    }

}
