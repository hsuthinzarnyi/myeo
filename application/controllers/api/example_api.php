<?php

require(APPPATH.'libraries/REST_Controller.php');

/**
* 
*/
class Example_api extends REST_Controller
{
	function __construct()
  {
    parent::__construct();
    $this->load->model('User_model');
    $this->load->library('form_validation');
    $this->load->model('Admin_model','',TRUE);
    $this->load->model('Custom_model','',TRUE);
    $this->load->model('Opportunity_model','',TRUE);
    $this->load->model('Profile_model','',TRUE);
    $this->load->model('Skill_model','',TRUE);
    $this->load->helper('form');
    $this->load->helper('security');
  }
	function user_get()
    {
        $data = array('returned: ' => $this->get('id'));
        $this->response($data);
    }
    function user_post()
    {       
        $data = array('returned: ' => $this->post('id'));
        $this->response($data);
    }
    function login_post()
    {

        $email=$this->input->post('email');
        $password=sha1($this->input->post('password'));
        // $this->response($this->input->post('email'));
        $result=$this->User_model->login($email,$password);
        if($result==NULL)
          {
            $this->response(array('result'=>'0','status' => FALSE));        
              }
        else
        {
            $this->response(array('result'=>'1','status' => TRUE));          
        }
    }

}
