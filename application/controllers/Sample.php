<?php
/**
* 
*/
class Sample extends CI_Controller
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
		    $this->load->model('Sample_model','',TRUE);
		    $this->load->helper('form');
		    // $this->load->library('ckeditor');
		    // $this->load->library('ckfinder');
		    $this->load->helper('security');
		    $this->load->library('encrypt');
		    $this->load->library('pagination');
	}
	function index()
	{
		$pag = $this->config->item('pagination');		
		$pag['base_url'] = base_url().'sample/index';
		$data['search']=Null;
		$pag['total_rows'] = $this->Sample_model->count_all();
	    $this->db->order_by("opp_id",'asc');
		$data['books'] = $this->Sample_model->get_all($pag['per_page'],$this->uri->segment(3),'desc');
		$data['pag'] = $pag;
		// var_dump($data)		;die();
		$this->load->view('include/header');
		$this->load->view('sample_view',$data);	
		$this->load->view('include/footer');
	}

}
?>