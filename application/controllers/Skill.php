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
		$this->load->model('Sample_model');
    	$this->load->library('pagination');
	}

	function index()
	{
		$log=$this->session->userdata('logged_in');
           // var_dump($log);die();
			    if(isset($log))
			    {
			      // var_dump("Hello");die();
			      if($log['email']!='koko@gmail.com' && $log['username']!='koko')
			      {
			            $pag = $this->config->item('pagination');   
					    $pag['base_url'] = base_url().'Skill/index';
					    $data['search']=Null;
					    $pag['total_rows'] = $this->Sample_model->count_skill();
					    $this->db->order_by("skill_id",'asc');
					    $data['skill'] = $this->Sample_model->get_skill($pag['per_page'],$this->uri->segment(3),'desc');
					    $data['pag'] = $pag;
					    // var_dump($data)    ;die();
					    $this->load->view('include/header');
						$this->load->view('home/skilldetail_view');
					    $data1['skill']  = $this->Skill_model->left_all();
						$this->load->view('home/skill_left',$data1);
						$this->load->view('home/skill_view',$data);
					    $this->load->view('include/footer');
								      }
			      else
			      {
			        redirect('user/login');
			      }
			      
			    }
	
	
	}
	
	function skilldetail($skill_id)
	{
		$log=$this->session->userdata('logged_in');
           // var_dump($log);die();
			    if(isset($log))
			    {
			      // var_dump("Hello");die();
			      if($log['email']!='koko@gmail.com' && $log['username']!='koko')
			      {
			            $pag = $this->config->item('pagination');   
					    $pag['base_url'] = base_url().'Skill/skilldetail';
					    $data1['search']=Null;
					    $pag['total_rows'] = $this->Sample_model->count_skill();
					    // $this->db->order_by($skill_id,'asc');
					    $data1['skill'] = $this->Skill_model->skilldetail($skill_id);
					    $data1['pag'] = $pag;
						$this->load->view('include/header');
						$this->load->view('home/skilldetail_view');
						$data['skill']  = $this->Skill_model->getall();
						// $data1['skill']  = $this->Skill_model->skilldetail($skill_id);
						$this->load->view('home/skill_left',$data);
						$this->load->view('home/skill_view',$data1);
						$this->load->view('include/footer');
			      }
			      else
			      {
			        redirect('user/login');
			      }
			      
			    }
		
	    
	}
	
	function search1()
	{
		
      $log=$this->session->userdata('logged_in');
           // var_dump($log);die();
			    if(isset($log))
			    {
			      // var_dump("Hello");die();
			      if($log['email']!='koko@gmail.com' && $log['username']!='koko')
			      {
			            $this->form_validation->set_rules('search','Search','required');
      if($this->form_validation->run()==FALSE)
      {
      	$pag = $this->config->item('pagination');   
	    $pag['base_url'] = base_url().'Skill/search1';
		$data['search']=Null;
		$pag['total_rows'] = $this->Sample_model->count_skill();
		// $this->db->order_by("skill_id",'asc');
		$data['skill'] = $this->Skill_model->search($pag['per_page'],$this->uri->segment(3),'desc');
		$data['pag'] = $pag;

		$data1['skill']  = $this->Skill_model->left_all();
      	$this->load->view('include/header');
		$this->load->view('home/skilldetail_view');
		$this->load->view('home/skill_left',$data1);
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
				$pag = $this->config->item('pagination');   
			    $pag['base_url'] = base_url().'Skill/index';
			    $data2['search']=Null;
			    $pag['total_rows'] = $this->Sample_model->count_skill();
			    $this->db->order_by("skill_id",'asc');
			    $data2['skill'] = $this->Skill_model->get_skill($pag['per_page'],$this->uri->segment(3),'desc');
			    $data2['pag'] = $pag;

                $data2['res'] = "Do not match";
                $left['skill']  = $this->Skill_model->left_all();
		      	// $data1['skill'] = $this->Skill_model->search($search);
		      	$this->load->view('include/header');
				$this->load->view('home/skilldetail_view');
				$this->load->view('home/skill_left',$left);
		      	$this->load->view('home/skill_view',$data2);
                $this->load->view('include/footer');
             }
             else
             {

				$pag = $this->config->item('pagination');   
			    $pag['base_url'] = base_url().'Skill/search1';
			    $result['search']=Null;
			    $pag['total_rows'] = $this->Sample_model->count_skill();
			    $this->db->order_by("skill_id",'asc');
			    $data['skill'] = $this->Sample_model->get_skill($pag['per_page'],$this->uri->segment(3),'desc');
			    $result['pag'] = $pag;

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
			      else
			      {
			        redirect('user/login');
			      }
			      
			    }
      
    }
}

