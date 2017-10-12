<?php
/**
* 
*/
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('User_model','',TRUE);
    $this->load->model('Opportunity_model');
    $this->load->model('Skill_model');
		$this->load->library('form_validation');
	  $this->load->helper('security');
    $this->load->library('encrypt');

	}
	function index()
	{

	}
	function signup()
	{
      $this->form_validation->set_rules('name','Name','required');
      $this->form_validation->set_rules('email','Email','required'); 
      $this->form_validation->set_rules('password','Password','required'); 
      $this->form_validation->set_rules('cfmpassword','CfmPassword','required'); 
      if($this->form_validation->run()==FALSE )
      { 
        $this->load->view('include/header') ;
      	$this->load->view('home/signup_view');
        // $this->load->view('include/footer');
      }
      else
      {
       $name=$this->input->post('name');
       $email=$this->input->post('email');
       $password=sha1($this->input->post('password'));
       $cfmpassword=sha1($this->input->post('cfmpassword'));
      
		if($password==$cfmpassword)
		{
			 $result=$this->User_model->check($name,$email,$password);
        // var_dump($result);die();
       if($result!=NULL)
       {
       	   $this->load->view('user/error');
       	
       }
       else
       {
       	 $this->User_model->signup($name,$email,$password);
       	 // var_dump($result);die();
       	 $this->load->view('user/signup');
       }
			
		}
		else
		{
          $this->load->view('home/signup_view');
    }
   }
	}
  function login()
  {
    $this->form_validation->set_rules('email','Email','required');
    $this->form_validation->set_rules('password','Password','required');
    if($this->form_validation->run()==FALSE )
      { 
        $this->load->view('include/header') ;
        $this->load->view('home/login_page');
        // $this->load->view('include/footer');
      }
      else
      { 
        $email=$this->input->post('email');
        $password=sha1($this->input->post('password'));
        $result=$this->User_model->login($email,$password);
        if($result==NULL)
        {
          redirect('user/login');
        }
        else
        {
          $this->load->view('include/header') ;
          $this->load->view('home/custom_view');
          $this->load->view('include/footer');
        }
      }
  }
  
}
?>