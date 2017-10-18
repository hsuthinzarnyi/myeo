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
	    $this->load->model('User_model');
      $this->load->model('Opportunity_model');

	}

	function index()
	{
		 $this->form_validation->set_rules('name','Name','trim|required|min_length[3]|max_length[25]|xss_clean|callback_check_name');
      $this->form_validation->set_rules('email','Email','trim|required|is_unique[user.email]|xss_clean|valid_email'); 
      $this->form_validation->set_rules('password','Password','trim|required|min_length[8]|max_length[30]|xss_clean'); 
      $this->form_validation->set_rules('cfpassword','CfmPassword','trim|required|min_length[8]|max_length[30]|xss_clean'); 
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
       $cfmpassword=sha1($this->input->post('cfpassword'));
        var_dump($name,$email,$password,$cfmpassword);die();
    if($password==$cfmpassword)
      {
           $result=$this->User_model->check($name,$email,$password);
           var_dump($result);die();
           if($result==NULL)
           {
               $this->load->view('user/error');
            
           }
           else
           { 
             $this->User_model->signup($name,$email,$password);
             $this->load->view('user/signup');// All success
           }
          
      }

    else
     {
      var_dump('home');die();
          $this->load->view('home/signup_view');
      }
   }
  }
  function check_name($name)
  {
    if(preg_match('/^[a-zA-Z_\s]+$/', $name))
    {     
      return $name;
    }
    else
    {
      $this->form_validation->set_message('check_name','Only letter and space allowed');
      return FALSE;
    }
	}

	// function home()
	// 	{
	// 		// $username="hsu"; $password="123";
	// 		$data = array('username' => "hsu", 'password'=>"hsu" );
	// 		if($data)
	// 		{
	// 			$this->load->view('include/header');
	// 			$this->load->view('home/home_view');
	// 			$this->load->view('include/footer');
	// 		}
	// 		else
	// 		{
	// 			redirect('Home','Refresh');
	// 		}

		
	// }
	// function success()
	// {
	// 	$this->load->view('include/header');
	// 	$this->load->view('home/success_view');
	// 	$this->load->view('include/footer');
	// }
  function img()
  { $data['oppo']  = $this->Opportunity_model->getall();
    $data1['oppo']  = $this->Opportunity_model->oppdetail($opp_id);
    $this->load->view('include/image',$data);
  }
}
?>