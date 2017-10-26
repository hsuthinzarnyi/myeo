<?php
/**
* 
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Opportunity extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('security');
		$this->load->model('Opportunity_model');
		$this->load->model('Skill_model');
		$this->load->model('Custom_model');
    	$this->load->library('encrypt');
	}

	function index()
	{
	

    $log=$this->session->userdata('logged_in');
    if($log==NULL)
    {
    $this->load->view('include/header');
		$this->load->view('include/nav');
		$data['oppo']  = $this->Opportunity_model->getall();
		$this->load->view('home/opp_left',$data);
		$this->load->view('home/opportunity_view',$data);
		$this->load->view('include/footer1');
    	}
    	else
    	{
    		redirect('user/login');
    	}
    	
	}
	function oppdetail($opp_id)
	{
		// $log_session = $this->session->userdata('logged_in');
       // var_dump($log_session);die();
       // if($log_session)
       // {
       //  $this->load->view('include/header');
       //  $this->load->view('include/nav');
       //  $this->load->view('user/opportunity_view');

       // }
       // else{
       //  redirect('login');
       // }
		$data['oppo']  = $this->Opportunity_model->getall();
		$data1['oppo']  = $this->Opportunity_model->oppdetail($opp_id);
		$this->load->view('include/header');
		$this->load->view('include/nav');
		$this->load->view('home/opp_left',$data);
		$this->load->view('home/opportunity_view',$data1);
		$this->load->view('include/footer1');
	}
	function search()
	{
		if(isset($_SESSION['logged_in']))
      $log_session=$this->session->has_userdata('logged_in');
    if($log_session)
    {
      redirect('login');
    }
      $this->form_validation->set_rules('search','Search','required');
      if($this->form_validation->run()==FALSE)
      {
		$data1['oppo']  = $this->Opportunity_model->getall();
      	$this->load->view('include/header');
      	$this->load->view('include/nav');
		$this->load->view('home/opp_left',$data1);
      	$this->load->view('home/opportunity_view',$data1 );
      	$this->load->view('include/footer1'); 
      }
      else
      {
      	$search = $this->input->post('search'); 
		$data1['oppo']  = $this->Opportunity_model->getall();
      	$data['oppo'] = $this->Opportunity_model->search($search);
      	$this->load->view('include/header');
      	$this->load->view('include/nav');
		$this->load->view('home/opp_left',$data1);
      	$this->load->view('home/opportunity_view',$data);
      	$this->load->view('include/footer1');	
      }
  }
}
?><!--HTZN-->