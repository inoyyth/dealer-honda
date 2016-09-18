<?php     
class Dashboard extends MX_Controller
{
   /*  $autoload = array(
        'helper'    => array('url', 'form'),
        'libraries' => array('email'),
    ); */
	
	 public function __construct() {
        parent::__construct();
		//set breadcrumb
		//$this->breadcrumbs->push('Section', '/section');
    }
	
	public function index(){
		
		$this->load->view('default');
	}
}