<?php
/**
* 
*/
class Home extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Home_model');
	}

	function index()
	{
		$this->load->view('include/header');
		$this->load->view('home/home_view');
		$this->load->view('include/footer');
	}

	function home()
		{
			// $username="hsu"; $password="123";
			$data = array('username' => "hsu", 'password'=>"hsu" );
			if($data)
			{
				$this->load->view('include/header');
				$this->load->view('home/home_view');
				$this->load->view('include/footer');
			}
			else
			{
				redirect('Home','Refresh');
			}

		
	}
	function success()
	{
		$this->load->view('include/header');
		$this->load->view('home/success_view');
		$this->load->view('include/footer');
	}
}
?>