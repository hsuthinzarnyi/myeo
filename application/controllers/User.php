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
    $this->load->library('pagination');


  }
  function index()
  {
       
    $this->load->view('home/login_page');
  }
       
  function signup()
  {
     $log=$this->session->userdata('logged_in');
       // var_dump($log);die();
    if(isset($log))
    {
      // var_dump("Hello");die();
      if($log['email']=='koko@gmail.com' && $log['username']=='koko')
      {
        redirect('admin');
      }
      else
      {
        redirect('custom');
      }
      
    }
 else
 {
    // var_dump($log);die;
      $this->form_validation->set_rules('name','Name','required');
      $this->form_validation->set_rules('email','Email','required'); 
      $this->form_validation->set_rules('password','Password','required'); 
      $this->form_validation->set_rules('cfmpassword','Confirm Password','required'); 
      if($this->form_validation->run()==FALSE )
      { 
        $this->load->view('home/login_page');
        // $this->load->view('include/footer');
      }
      else
      {
       $name=$this->input->post('name');
       $email=$this->input->post('email');
       $password=sha1($this->input->post('password'));
       $cfmpassword=sha1($this->input->post('cfmpassword'));
      // var_dump($name);die();
    if($password==$cfmpassword)
    {
       $result=$this->User_model->check($name,$email,$password);
        // var_dump($result);die();
       if($result!=NULL)
       {
          $message=$this->session->set_flashdata('message','You are already exit!!!');
           $this->load->view('include/header');
           $this->load->view('home/login_page',$message);
           $this->load->view('include/footer');
        
       }
       else
       {
         $this->User_model->signup($name,$email,$password);
         
         $this->session->set_userdata('email',$email);
         redirect('profile/create');
       }
      
    }
    
   }
 }
}
  
  function login()
  {
      $log=$this->session->userdata('logged_in');
       // var_dump($log);die();
    if(isset($log))
    {
      // var_dump("Hello");die();
      if($log['email']=='koko@gmail.com' && $log['username']=='koko')
      {
        redirect('admin');
      }
      else
      {
        redirect('custom');
      }
      
    }
 else
 {
      $this->form_validation->set_rules('email','Email','required');
      $this->form_validation->set_rules('password','Password','required');
      if($this->form_validation->run()==FALSE )
        { 
          $this->load->view('home/login_page');
        }
        else
        { 
          $email=$this->input->post('email');
          // var_dump($email);die();
          $password=sha1($this->input->post('password'));
          $result=$this->User_model->login($email,$password);
          // var_dump($result);die();
          
            
          if($result==NULL)
          {
            $flash='<strong>Sorry!</strong> Your Email or Password do not match!!!';
            $this->session->set_flashdata('message',$flash);
            // $this->load->view('home/login_page');
            // echo '<script>alert("Your Email or Password do not match!!!");</script>';
            redirect('user','refresh');
          }
          else if($result['name']=='koko' && $result['email']='koko@gmail.com')
          { 
             $sess_array=array('id'=>$result['user_id'],'username'=>$result['name'],
                             'password'=>$result['password'],'email'=>$result['email']);
             $this->session->set_userdata('logged_in',$sess_array);             
            
            $this->form_validation->set_rules('title','Title', 'trim|required');
            $this->form_validation->set_rules('subtitle','Subtitle','trim|required');
            $this->form_validation->set_rules('description','Description','trim|required');
            $this->form_validation->set_rules('choice','Choice','required');
            $this->form_validation->set_rules('uploadchoice','UploadChoice','required');
            if($this->form_validation->run()==FALSE)
            {
              redirect('admin');
            }
            else
            {
                   redirect('admin/upload');
              
            } /////END_OF_FIRST_IF

          }
          else 
          {
            $sess_array=array('id'=>$result['user_id'],'username'=>$result['name'],
                         'password'=>$result['password'],'email'=>$result['email']);
             $this->session->set_userdata('logged_in',$sess_array);
            
            redirect('custom');
           
          }
        }
    }
    
  }
    function check_database($password)
  {
      // var_dump($password);
      $email=$this->input->post('email');
      // var_dump($email);
      $result=$this->User_model->login($email,$password);
    // var_dump($result,'hihihi');
    if ($result) 
    { 
      // var_dump($result,'lllll');die();
      $user_array=array();
      foreach ($result as $row) 
      {
        $user_array=array(
                'u_id'=>$row->user_id,
                'user_name'=>$row->name,
                'email'=>$row->email,
                'password'=>$row->password);
        $this->session->set_userdata('logged_in',$user_array);
        var_dump($user_array);die();
      }
      return TRUE;
    }
      else
      {
        $this->form_validation->set_message('check_database','Invalid email and password');
        return FALSE;
      }
  }
  // } 
}
?>