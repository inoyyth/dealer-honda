<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Codeigniter Multilevel menu Class
 * Provide easy way to render multi level menu
 * 
 */ 
class Auth_log {

    private $error = array();

    function __construct() {
        $this->ci = & get_instance();
        $this->ci->load->library('session');
        // Try to autologin
        $this->cek_login();
    }

    function cek_login() {
        if ($this->ci->session->userdata('logged_in_admin') == false) {
            redirect('login');
        }
    }

}
