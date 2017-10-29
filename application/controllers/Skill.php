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
		// if(isset($_SESSION['logged_in']))
  //     $log_session=$this->session->has_userdata('logged_in');
  //   if($log_session)
 // {
 //      redirect('');
 //    }	
		$this->load->view('include/header');
		// $this->load->view('include/nav');
		$this->load->view('home/skilldetail_view');
		$data['skill']  = $this->Skill_model->getall();
		$this->load->view('home/skill_left',$data);
		$this->load->view('home/skill_view',$data);
		$this->load->view('include/footer');
	}
	
	function skilldetail($skill_id)
	{
		// if(isset($_SESSION['logged_in']))
  //     $log_session=$this->session->has_userdata('logged_in');
  //   if($log_session)
   
		$this->load->view('include/header');
		$this->load->view('home/skilldetail_view');
		$data['skill']  = $this->Skill_model->getall();
		$data1['skill']  = $this->Skill_model->skilldetail($skill_id);
		$this->load->view('home/skill_left',$data);
		$this->load->view('home/skill_view',$data1);
		$this->load->view('include/footer');
		// $this->load->view('include/footer1');
	}
	
	function search1()
	{
		// if(isset($_SESSION['logged_in']))
  //     $log_session=$this->session->has_userdata('logged_in');
  //   if($log_session)
   
      $this->form_validation->set_rules('search','Search','required');
      if($this->form_validation->run()==FALSE)
      {
		$data['skill']  = $this->Skill_model->getall();
      	$this->load->view('include/header');
		$this->load->view('home/skilldetail_view');
		$this->load->view('home/skill_left',$data);
		$this->load->view('home/skill_view',$data);
      	$this->load->view('include/footer'); 
      }
      else
      {
      	$search = $this->input->post('search'); 
        if ($search) 
        {
             $check = $this->Skill_model->check($search);
             // var_dump($check);die();
             if ($check==NULL) 
             {
                $data2['res'] = "Do not match";
                $data['skill']  = $this->Skill_model->getall();
		      	$result['skill'] = $this->Skill_model->search($search);
		      	$this->load->view('include/header');
				$this->load->view('home/skilldetail_view');
				$this->load->view('home/skill_left',$data);
                // $this->load->view('home/opportunity_view',$data2,$data);
		      	$this->load->view('home/skill_view',$data2,$result);
                $this->load->view('include/footer');
             }
             else
             {
                $search = $this->input->post('search'); 
				$data['skill']  = $this->Skill_model->getall();
		      	$result['skill'] = $this->Skill_model->search($search);
		      	$this->load->view('include/header');
				$this->load->view('home/skilldetail_view');
				$this->load->view('home/skill_left',$data);
		      	$this->load->view('home/skill_view',$result);
		      	$this->load->view('include/footer');	
             }
        }
      	
      }
  }
}
?><!--HTZN-->