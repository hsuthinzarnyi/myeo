<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	function index()
	{
		$this->load->helper(array('form'));
		$this->load->view('include/header');
		$this->load->view('home/login_page');
		// $this->load->view('include/footer');
	}
}

?>