<?php
/**
* 
*/
class Logout extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}
	function logout()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		// var_dump($logged_in);die();
		redirect('user/login');

	}
}
?>