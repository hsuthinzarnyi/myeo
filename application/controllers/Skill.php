<?php
/**
* 
*/
class Skill extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('security');
		$this->load->model('Opportunity_model');
		$this->load->model('Skill_model');
	}

	function index()
	{
		$this->load->view('include/header');
		$this->load->view('include/nav');
		$data['skill']  = $this->Skill_model->getall();
		$this->load->view('home/skill_left',$data);
		$this->load->view('home/skill_view',$data);
		$this->load->view('include/footer');
		$this->load->view('include/footer1');
		
	}

	
	function skilldetail($skill_id)
	{
		$this->load->view('include/header');
		$this->load->view('include/nav');
		$data['skill']  = $this->Skill_model->getall();
		$data1['skill']  = $this->Skill_model->skilldetail($skill_id);
		// $data['oppo']  = $this->Opportunity_model->getall();
		$this->load->view('home/skill_left',$data);
		$this->load->view('home/skill_view',$data1);
		$this->load->view('include/footer');
		$this->load->view('include/footer1');
	}
	
	function search1()
	{
      $this->form_validation->set_rules('search','Search','required');
      if($this->form_validation->run()==FALSE)
      {
      	$result['skill'] = $this->Skill_model->search($search);
      	$this->load->view('include/header');
      	$this->load->view('include/nav');
      	$this->load->view('home/');
      	$this->load->view('include/footer1'); 
      }
      else
      {
      	$search = $this->input->post('search'); 
      	$result['skill'] = $this->Skill_model->search($search);
      	$this->load->view('include/header');
      	$this->load->view('include/nav');
		$this->load->view('home/skill_left',$data);
      	// $this->load->view('home/left_view',$data);
      	$this->load->view('home/skill_view',$result);
      	$this->load->view('include/footer1');	
      }
  }
}
?><!--HTZN-->