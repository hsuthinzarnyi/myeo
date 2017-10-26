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
    function all_utube_post()
    {
        $skill_vdlink = $this->input->post('skill_vdlink');
        $skill_image  = $this->input->post('skill_image');
        $opp_vdlink   = $this->input->post('opp_vdlink');
        $opp_image    = $this->input->post('opp_image');
        $result       = $this->Skill_model->getall();
        $result1      = $this->Opportunity_model->getall();
        if($result==NULL || $result1==NULL)
        {
            $this->response( array('result' =>'0' ,'status'=>FALSE ));
        }
         else
        {
            $this->response(array('result'=>'1','status' => TRUE));          
        }

    }

    function utube_post()
    {
        
        $data1['skill']  = $this->Skill_model->skilldetail($skill_id);
        $data2['opp']    = $this->Opportunity_model->oppdetail($opp_id);
        if($data1==NULL || $data2==NULL)
        {
            $this->response( array('result' =>'0' ,'status'=>FALSE ));
        }
         else
        {
            $this->response(array('result'=>'1','status' => TRUE));          
        }

    }
    function user_utube_post()
    {
        if(isset($_SESSION['logged_in']))
        $log=$this->session->has_userdata('logged_in','user_id');
        
    }

}
?>
