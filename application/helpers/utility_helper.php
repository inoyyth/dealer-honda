<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * CodeIgniter Array Helpers
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		EllisLab Dev Team
 * @link		https://codeigniter.com/user_guide/helpers/array_helper.html
 */

// ------------------------------------------------------------------------

if ( ! function_exists('get_status'))
{
	function get_status($status)
	{
		return ($status=="2"?"Aktif":"Non Aktif");
	}
}

if ( ! function_exists('set_session_table_search'))
{
	function set_session_table_search($name,$value)
	{
		 $ci =& get_instance();
		 if($value == "" || empty($value)){
			$ci->session->unset_userdata($name);
			$value=$ci->session->userdata($name);
			return $value;
		}else{
		
			if($value)
			{
				$ci->session->set_userdata($name, $value);
				return $value=$ci->session->userdata($name);
			}
			elseif($ci->session->userdata($name))
			{
				$value = $ci->session->userdata($name);
				return $value;
			}
			else
			{
				$ci->session->unset_userdata($name);
				$value=$ci->session->userdata($name);
				return $value;
			}
		}
	}
}