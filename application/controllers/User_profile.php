<?php
/**
* 
*/
class User_profile extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('helper');
		$this->load->helper('security');
	}

	function index()
	{
		$this->load->View('include/header');
		$this->load->view('');
	}
}
?>