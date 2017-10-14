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
		$this->load->library('form_validation');
    $this->load->model('Admin_model','',TRUE);
    $this->load->model('Custom_model','',TRUE);
    $this->load->model('Opportunity_model','',TRUE);
    $this->load->model('Profile_model','',TRUE);
    $this->load->model('Skill_model','',TRUE);
    $this->load->helper('form');
    $this->load->library('ckeditor');
    $this->load->library('ckfinder');
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
    // $log=$this->session->userdata('logined_in');
    
    // if(isset($log))
    // {
    //   redirect('user/unaccept_get');
    // }
    // else
    // {
      $this->form_validation->set_rules('email','Email','required');
      $this->form_validation->set_rules('password','Password','required');
      if($this->form_validation->run()==FALSE )
        { 
          $this->load->view('include/header') ;
          $this->load->view('home/login_page');
          $this->load->view('include/footer');
        }
        else
        { 
          $email=$this->input->post('email');
          $password=sha1($this->input->post('password'));
          $result=$this->User_model->login($email,$password);
          // var_dump($result);die();
          if($result==NULL)
          {
            redirect('user/login');
          }
          else if($result['name']=='koko' && $result['email']='koko@gmail.com')
          {
            
            $this->form_validation->set_rules('title','Title', 'trim|required');
            $this->form_validation->set_rules('subtitle','Subtitle','trim|required');
            $this->form_validation->set_rules('description','Description','trim|required');
            $this->form_validation->set_rules('choice','Choice','required');
            $this->form_validation->set_rules('uploadchoice','UploadChoice','required');
            if($this->form_validation->run()==FALSE)
            {
              $this->load->view('include/header');
              $this->load->view('admin/upload_view');
              $this->load->view('include/footer');
            }
            else
            {

              $choiceid=$this->input->post("choice"); //////FIRST_RADIO_CHOICE
              if($choiceid=="1")
              { 
                //var_dump($choiceid);
                //echo "Opp" +  $choiceid; 
                $this->form_validation->set_rules('opportunitychoice','OpportunityChoice','required');
                if($this->form_validation->run()==FALSE)
                {
                  $this->load->view('include/header');
                  $this->load->view('admin/upload_view',$data); //maketoremainfilleddata
                  $this->load->view('include/footer');
                }
                else
                {
                  $uploadchoiceid=$this->input->post("uploadchoice"); //////SECOND_RADIO_CHOICE
                  if($uploadchoiceid == "1")
                  {  
                    $this->form_validation->set_rules('imageuploadchoice','ImageUploadChoice','required');
                    if($this->form_validation->run()==FALSE)
                    {
                      $this->load->view('include/header');
                      $this->load->view('admin/upload_view',$data);
                      $this->load->view('include/footer');
                    }
                    else
                    {
                      $data=array("opp_id"=>$this->input->post("opportunitychoice"),
                            "opp_image"=>$this->input->post("imageuploadchoice"),
                            "opp_description"=>$this->input->post("description"),
                            "opp_title"=>$this->input->post("title"),
                            "opp_subtitle"=>$this->input->post("subtitle"));
                      $result=$this->Admin_model->opportunity_upload($data);
                      if($result)
                      {
                        echo "Successful Uploading Opportunity";
                      }
                      else
                      {
                        echo "Fail Uploading Opportunity";
                      }
                    }
                  }
                  elseif($uploadchoiceid == "2")
                  {
                    $this->form_validation->set_rules('vediouploadchoice','VedioUploadChoice','required');
                    if($this->form_validation->run()==FALSE)
                    {
                      $this->load->view('include/header');
                      $this->load->view('admin/upload_view',$data);
                      $this->load->view('include/footer');
                    }
                    else
                    {
                      $data=array("opp_id"=>$this->input->post("opportunitychoice"),
                            "opp_vdlink"=>$this->input->post("vediouploadchoice"),
                            "opp_description"=>$this->input->post("description"),
                            "opp_title"=>$this->input->post("title"),
                            "opp_subtitle"=>$this->input->post("subtitle"));
                      $result=$this->Admin_model->opportunity_upload($data);
                      if($result)
                      {
                        echo "Successful Uploading Opportunity";
                      }
                      else
                      {
                        echo "Fail Uploading Opportunity";
                      }
                    }
                  }  //////END_OF_SECOND_RADIO_CHOICE
                }
              }else if($choiceid=="2")
              { 
                //var_dump($choiceid);
                //echo "Skill"  + $choiceid;
                $this->form_validation->set_rules('skillchoice','SkillChoice','required');
                if($this->form_validation->run()==FALSE)
                {
                  $this->load->view('include/header');
                  $this->load->view('admin/upload_view',$data); //maketoremainfilleddata
                  $this->load->view('include/footer');
                }
                else
                {
                  $uploadchoiceid=$this->input->post("uploadchoice");
                  if($uploadchoiceid == "1")
                  {
                    $this->form_validation->set_rules('imageuploadchoice','ImageUploadChoice','required');
                    if($this->form_validation->run()==FALSE)
                    {
                      $this->load->view('include/header');
                      $this->load->view('admin/upload_view',$data);
                      $this->load->view('include/footer');
                    }
                    else
                    {
                      $data=array("skill_id"=>$this->input->post("skillchoice"),
                            "skill_image"=>$this->input->post("imageuploadchoice"),
                            "skill_description"=>$this->input->post("description"),
                            "skill_title"=>$this->input->post("title"),
                            "skill_subtitle"=>$this->input->post("subtitle"));
                      $result=$this->Admin_model->skill_upload($data);
                      if($result)
                      {
                        echo "Successful Uploading Skill";
                      }else
                      {
                        echo "Fail Uploading Skill";
                      }
                    }
                  }elseif($uploadchoiceid=="2")
                  {
                    $this->form_validation->set_rules('vediouploadchoice','VedioUploadChoice','required');
                    if($this->form_validation->run()==FALSE)
                    {
                      $this->load->view('include/header');
                      $this->load->view('admin/upload_view',$data);
                      $this->load->view('include/footer');
                    }
                    else
                    {
                      $data=array("skill_id"=>$this->input->post("skillchoice"),
                            "skill_vdlink"=>$this->input->post("vediouploadchoice"),
                            "skill_description"=>$this->input->post("description"),
                            "skill_title"=>$this->input->post("title"),
                            "skill_subtitle"=>$this->input->post("subtitle"));
                      $result=$this->Admin_model->skill_upload($data);
                      if($result)
                      {
                        echo "Successful Uploading Skill";
                      }
                      else
                      {
                        echo "Fail Uploading Skill";
                      }
                    }
                  }
                }
              }//////END_OF_FIRST_RADIO_CHOICE
            } /////END_OF_FIRST_IF

          }
          else 
          {
            
            $this->load->view('include/header');
            $this->load->view('include/nav');
            $data['oppo']  = $this->Opportunity_model->getall();
            $data ['skill'] = $this->Skill_model->getall();
            $this->load->view('home/left_view',$data);
            $this->load->view('home/custom_view',$data);
            $this->load->view('include/footer');
            $this->load->view('include/footer1');
          }
        }
    }
  // }
}
?>