<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends MX_Controller {

    var $table = "account";

    function __construct() {
        parent::__construct();
        $this->load->library(array('encrypt'));
        $this->load->model('m_login');
    }

    public function index() {
        if ($this->session->userdata('logged_in_admin')) {
            redirect('dashboard');
        } else {
            $this->load->view('login/index');
        }
    }

    function verivy_login() {
        if ($this->session->userdata('logged_in_admin')) {
            redirect('dashboard');
        } else {
            $username = $this->input->post("username");
            $pass = $this->input->post("password");

            $result = $this->m_login->login($username, $pass);

            if ($result) {
                $sess_array = array();
                foreach ($result as $row) {
                    //create the session
                    $sess_arrayx = array(
                        'id' => $row->id,
                        'username' => $row->username,
                        'nama_lengkap' => $row->nama_lengkap,
                        'no_telp' => $row->no_telp,
                        'email' => $row->email,
                        'path_foto' => $row->path_foto,
                        'access_menu'=>$row->access_menu
                    );
                    //set session with value from database
                    $this->session->set_userdata('logged_in_admin', $sess_arrayx);
                }
                $this->m_login->last_login($sess_arrayx['id']);
                $this->session->set_flashdata('success', 'Login is Success');
                redirect('login');
            } else {
                $this->session->set_flashdata('false', 'Username or Password is wrong !!!');
                redirect('login');
            }
        }
    }

    function logout() {
        $this->session->unset_userdata('logged_in_admin');
        redirect('login', 'refresh');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */