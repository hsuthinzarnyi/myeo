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
		$this->load->view('home/login_page');
		// $this->load->view('include/footer');
	}
	function out()
	{
		$this->session->sess_destroy();
		redirect('welcome');
	}
	function check_database($password)
    {
    	$email=$this->input->post('email');
    	$result=$this->User_model->login($email,$password);
		
		if ($result) 
		{ 
			var_dump($result);
			$user_array=array();
			foreach ($result as $row) 
			{
				$user_array=array(
								// 'u_id'=>$row->user_id,
								'user_name'=>$row->user_name,
								'email'=>$row->email,
								'password'=>$row->password,
								// 'address_id'=>$row->address,
								'position'=>$row->position);
				$this->session->set_userdata('logged_in',$user_array);
				var_dump($user_array);die();
			}
			return TRUE;
		}
		else
		{
			$this->form_validation->set_message('check_database','Invalid email and password');
			return FALSE;
		}
    }
}

?>