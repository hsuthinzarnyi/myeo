<?php
/**
* 
*/
class custom extends CI_Controller
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
	
    // var_dump($this->session->has_userdata('logined_in')) ;
       { 
		$this->load->view('include/header');
		$this->load->view('include/nav');
		$data['oppo']  = $this->Opportunity_model->getall();
		$data ['skill'] = $this->Skill_model->getall();
		$this->load->view('home/left_view',$data);
		$this->load->view('home/custom_view',$data);
		$this->load->view('include/footer');
	}
	}

	function all($opp_id,$skill_id)
	{
		// // var_dump($opp_id);die();
		// if(isset($_SESSION['logged_in']))
  //     $log_session=$this->session->has_userdata('logged_in');
  //   if($log_session)
  //   {
  //     redirect('login');
  //   }
		$this->load->view('include/header');
		$this->load->view('include/nav');
		$data['oppo']  = $this->Opportunity_model->getall();
		$data['skill'] = $this->Skill_model->getall();
		$data['opp_detail']  = $this->Opportunity_model->oppdetail($opp_id);
		$data['skill_detail']  = $this->Skill_model->skilldetail($skill_id);
		$this->load->view('home/custom_view',$data);
		var_dump($data['oppo'],$data['skill'],$data['skill_detail'],$data['opp_detail']);die();
		$this->load->view('include/footer');
		// $this->load->view('include/footer1');
	}
	function search()
	{
		//  
      $this->form_validation->set_rules('search','Search','required');
      if($this->form_validation->run()==FALSE)
      {

		$data1['oppo']  = $this->Opportunity_model->getall();
		$data1['skill'] = $this->Skill_model->getall();      	
      	// $data['oppo']   = $this->Opportunity_model->search($search);
      	// $data['skill']  = $this->Skill_model->search($search);
      	$this->load->view('include/header');
      	$this->load->view('include/nav');
      	$this->load->view('home/left_view',$data1);
      	$this->load->view('home/custom_view',$data1);
      	$this->load->view('include/footer'); 
      }
      else
      {
      		$search = $this->input->post('search'); 
        if ($search) 
        {
             $check = $this->Skill_model->check($search);
             $check1 = $this->Opportunity_model->check($search);
             // var_dump($check);die();
             if ($check==NULL&& $check1==NULL) 
             {
                $data2['res'] = "Do not match";
				$data1['oppo']  = $this->Opportunity_model->getall();
                $data1['skill']  = $this->Skill_model->getall();
				$data['oppo']   = $this->Opportunity_model->search($search);
		      	$data['skill']  = $this->Skill_model->search($search);	
		      	$this->load->view('include/header');
		      	$this->load->view('include/nav');
				$this->load->view('home/left_view',$data1);
                // $this->load->view('home/opportunity_view',$data2,$data);
		      	$this->load->view('home/custom_view',$data2,$data);
                $this->load->view('include/footer');
             }
             else
             {
               	$search         = $this->input->post('search'); 
				$data1['oppo']  = $this->Opportunity_model->getall();
				$data1['skill'] = $this->Skill_model->getall();      	
		      	$data['oppo']   = $this->Opportunity_model->search($search);
		      	$data['skill']  = $this->Skill_model->search($search);
		      	$this->load->view('include/header');
		      	$this->load->view('include/nav');
		      	$this->load->view('home/left_view',$data1);
		      	$this->load->view('home/custom_view',$data);
		      	$this->load->view('include/footer');	
             }
        }

      
      }
  }
}
?>
<!--HTZN-->