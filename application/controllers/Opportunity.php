<?php
/**
* 
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Opportunity extends CI_Controller
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
    $this->load->library('encrypt');
    $this->load->model('Sample_model','',TRUE);
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
                  $pag['base_url'] = base_url().'Opportunity/index';
                  $data['search']=Null;
                  $pag['total_rows'] = $this->Sample_model->count_opp();
                  $this->db->order_by("opp_id",'asc');
                  $data['oppo'] = $this->Sample_model->get_opp($pag['per_page'],$this->uri->segment(3),'desc');
                  $data['pag'] = $pag;
                  // var_dump($data)    ;die();
                  $this->load->view('include/header');
                  $this->load->view('home/opp_search');
                  $data1['oppo']  = $this->Opportunity_model->left_all();
                  $this->load->view('home/opp_left',$data1);
                  $this->load->view('home/opportunity_view',$data);
                  $this->load->view('include/footer');     
            }
            else
            {
              redirect('user/login');
            }
            
          }
	 
    	
	}
	function oppdetail($opp_id)
	{
     $log=$this->session->userdata('logged_in');
           // var_dump($log);die();
          if(isset($log))
          {
            // var_dump("Hello");die();
            if($log['email']!='koko@gmail.com' && $log['username']!='koko')
            {
                  $pag = $this->config->item('pagination');   
                  $pag['base_url'] = base_url().'Opportunity/oppdetail';
                  $data['search']=Null;
                  $pag['total_rows'] = $this->Sample_model->count_opp();
                  // $this->db->order_by("opp_id",'asc');
                  // $data['oppo'] = $this->Sample_model->get_opp($pag['per_page'],$this->uri->segment(3),'desc');
                  $data['pag'] = $pag;

                  $data1['oppo']  = $this->Opportunity_model->getall();
                  $data['oppo']  = $this->Opportunity_model->oppdetail($opp_id);
                  $this->load->view('include/header');
                  $this->load->view('home/opp_search');
                  $this->load->view('home/opp_left',$data1);
                  $this->load->view('home/opportunity_view',$data);
                  $this->load->view('include/footer');
            }
            else
            {
              redirect('user/login');
            }
            
          }
		
    
	}
	function search()
	{
		$log=$this->session->userdata('logged_in');
           // var_dump($log);die();
          if(isset($log))
          {
            // var_dump("Hello");die();
            if($log['email']!='koko@gmail.com' && $log['username']!='koko')
            {
                  $this->form_validation->set_rules('search','Search','required|xss_clean|required');
      if($this->form_validation->run()==FALSE)
      {
       $pag = $this->config->item('pagination');   
        $pag['base_url'] = base_url().'Opportunity/search';
        $data['search']=Null;
        $pag['total_rows'] = $this->Sample_model->count_opp();
        // $this->db->order_by("opp_id",'asc');
        $data['oppo'] = $this->Opportunity_model->search($pag['per_page'],$this->uri->segment(3),'desc');
        $data['pag'] = $pag;
        $data1['oppo']  = $this->Opportunity_model->left_all();
        $this->load->view('include/header');
        $this->load->view('home/opp_search');
        $this->load->view('home/opp_left',$data1);
        $this->load->view('home/opportunity_view',$data);
        $this->load->view('include/footer'); 
      }
      else
      {
        $search = $this->input->post('search'); 
        if ($search) 
        {
             $check = $this->Opportunity_model->check($search);
             // var_dump($check);die();
             if ($check==NULL) 
             {
                $pag = $this->config->item('pagination');   
                $pag['base_url'] = base_url().'Opportunity/index';
                $data2['search']=Null;
                $pag['total_rows'] = $this->Sample_model->count_opp();
                // $this->db->order_by("opp_id",'asc');
                $data2['oppo'] = $this->Sample_model->get_opp($pag['per_page'],$this->uri->segment(3),'desc');
                $data2['pag'] = $pag;

                $data2['res'] = "Do not match";
                $data1['oppo']  = $this->Opportunity_model->left_all();
                // $data['oppo'] = $this->Opportunity_model->search($search);
                $this->load->view('include/header');
                $this->load->view('home/opp_search');
                $this->load->view('home/opp_left',$data1);
                $this->load->view('home/opportunity_view',$data2);
                // $this->load->view('home/opportunity_view',$data);
                $this->load->view('include/footer');
             }
             else
             {
                $pag = $this->config->item('pagination');   
                $pag['base_url'] = base_url().'Opportunity/search';
                $data['search']=Null;
                $pag['total_rows'] = $this->Sample_model->count_opp();
                // $this->db->order_by("opp_id",'asc');
                // $data['oppo'] = $this->Sample_model->get_opp($pag['per_page'],$this->uri->segment(3),'desc');
                $data['pag'] = $pag;
                $data1['oppo']  = $this->Opportunity_model->getall();
                $data['oppo'] = $this->Opportunity_model->search($search);
                $this->load->view('include/header');
                $this->load->view('home/opp_search');
                $this->load->view('home/opp_left',$data1);
                $this->load->view('home/opportunity_view',$data);
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

