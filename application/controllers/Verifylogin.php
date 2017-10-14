<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Verifylogin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('security');
	}
	function index()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username','trim|xss_clean|required');
		$this->form_validation->set_rules('password','Password','trim|required|xss_clean|callback_check_database');
			
			// var_dump($this->form_validation->run());
			// die();
		if ($this->form_validation->run()==FALSE) {
			
			$this->load->view('login_view');
		}
		else
		{
			redirect('index.php/hello','refresh');
		}
	}
	function check_database($password)
	{
		$this->load->model('member_model');
		$username=$this->input->post('username');
		$result=$this->member_model->member_login($username,$password);

		if ($result) {
				// var_dump($result);
				// die();

			$sess_array=array();
			foreach ($result as $row) {
				$sess_array=array('id'=>$row->id,
									'username'=>$row->username);
				$this->session->set_userdata('logged_in',$sess_array);
			}
			return TRUE;

		}
		else
		{
			// var_dump($result);
			// die();
			$this->form_validation->set_message('check_database','Invalid username or password');
			return FALSE;
		}
	}
}
?>