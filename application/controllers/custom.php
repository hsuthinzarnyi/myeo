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
		$this->load->model('Sample_model','',TRUE);
		$this->load->library('pagination');
	}

	function index()
	{
	
    // var_dump($this->session->has_userdata('logined_in')) ;
       { 
       	$pag = $this->config->item('pagination');		
		$pag['base_url'] = base_url().'Custom/index';
		$data['search']=Null;
		$pag['total_rows'] = $this->Sample_model->count_all();
	    $this->db->order_by("opp_id",'asc');
    	$data['oppo'] = $this->Sample_model->get_opp($pag['per_page'],$this->uri->segment(3),'desc');
    	$data['skill'] = $this->Sample_model->get_skill($pag['per_page'],$this->uri->segment(3),'desc');
		$data['pag'] = $pag;
		
		$this->load->view('include/header');
		$this->load->view('include/nav');
		$data1['oppo']  = $this->Opportunity_model->left_all();
		$data1['skill'] = $this->Skill_model->left_all();
		$this->load->view('home/left_view',$data1);
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
  //   } 	$pag = $this->config->item('pagination');		
		$pag['base_url'] = base_url().'Custom/index';
		$data['search']=Null;
		$pag['total_rows'] = $this->Sample_model->count_all();
	    // $this->db->order_by("opp_id",'asc');
    	$data['oppo'] = $this->Sample_model->get_opp($pag['per_page'],$this->uri->segment(3),'desc');
    	$data['skill'] = $this->Sample_model->get_skill($pag['per_page'],$this->uri->segment(3),'desc');
		$data['pag'] = $pag;

		$this->load->view('include/header');
		$this->load->view('include/nav');
		$data['oppo']  = $this->Opportunity_model->left_all();
		$data['skill'] = $this->Skill_model->left_all();
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
      	$pag = $this->config->item('pagination');		
		$pag['base_url'] = base_url().'Custom/search';
		$data['search']=Null;
		$pag['total_rows'] = $this->Sample_model->count_all();
	    // $this->db->order_by("opp_id",'asc');
    	$data['oppo'] = $this->Opportunity_model->search($pag['per_page'],$this->uri->segment(3),'desc');
    	$data['skill'] = $this->Skill_model->search($pag['per_page'],$this->uri->segment(3),'desc');
		$data['pag'] = $pag;

		$data1['oppo']  = $this->Opportunity_model->getall();
		$data1['skill'] = $this->Skill_model->getall();      	
      	// $data['oppo']   = $this->Opportunity_model->search($search);
      	// $data['skill']  = $this->Skill_model->search($search);
      	$this->load->view('include/header');
      	$this->load->view('include/nav');
      	$this->load->view('home/left_view',$data1);
      	$this->load->view('home/custom_view',$data);
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
             	$pag = $this->config->item('pagination');		
				$pag['base_url'] = base_url().'Custom/index';
				$data2['search']=Null;
				$pag['total_rows'] = $this->Sample_model->count_all();
			    $this->db->order_by("opp_id",'asc');
		    	$data2['oppo'] = $this->Sample_model->get_opp($pag['per_page'],$this->uri->segment(3),'desc');
		    	$data2['skill'] = $this->Sample_model->get_skill($pag['per_page'],$this->uri->segment(3),'desc');
				$data2['pag'] = $pag;

                $data2['res'] = "No Result Found";
				$data1['oppo']  = $this->Opportunity_model->getall();
                $data1['skill']  = $this->Skill_model->getall();
				// $data['oppo']   = $this->Opportunity_model->search($search);
		      	// $data['skill']  = $this->Skill_model->search($search);	
		      	$this->load->view('include/header');
		      	$this->load->view('include/nav');
				$this->load->view('home/left_view',$data1);
                // $this->load->view('home/opportunity_view',$data2,$data);
		      	$this->load->view('home/custom_view',$data2);
                $this->load->view('include/footer');
             }
             else
             {
             	$pag = $this->config->item('pagination');		
				$pag['base_url'] = base_url().'Custom/search';
				$data['search']=Null;
				$pag['total_rows'] = $this->Sample_model->count_all();
			    // $this->db->order_by("opp_id",'asc');
		    	// $data['oppo'] = $this->Opportunity_model->search($pag['per_page'],$this->uri->segment(3),'desc');
		    	// $data['skill'] = $this->Skill_model->search($pag['per_page'],$this->uri->segment(3),'desc');
				$data['pag'] = $pag;

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