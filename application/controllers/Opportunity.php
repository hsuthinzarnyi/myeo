<?php
/**
* 
*/
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

	}

	function index()
	{
		$this->load->view('include/header');
		$this->load->view('include/nav');
		$data['oppo']  = $this->Opportunity_model->getall();
		$this->load->view('home/opp_left',$data);
		$this->load->view('home/opportunity_view',$data);
		$this->load->view('include/footer1');
	}
	function oppdetail($opp_id)
	{
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