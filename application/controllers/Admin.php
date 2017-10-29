<?php
	/**
	* 
	*/
	class Admin extends CI_Controller
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
			$data['all_opp']=$this->Admin_model->opportunity();
			$data['all_skill']=$this->Admin_model->skill();
			$this->load->view('include/header');
			$this->load->view('admin/upload_view',$data);
			$this->load->view('include/footer');
		}

///////////////////myatmonmonkyi/////////////////////
		function upload()
		{
			 $log=$this->session->userdata('logged_in');
			if(!isset($log))
			{
				$this->load->view('home/login');
             }
             else{    
			
			$data['all_opp']=$this->Admin_model->opportunity();
			$data['all_skill']=$this->Admin_model->skill();
			$this->form_validation->set_rules('title','Title', 'trim|required');
			$this->form_validation->set_rules('subtitle','Subtitle','trim|required');
			$this->form_validation->set_rules('description','Description','trim|required');
			$this->form_validation->set_rules('choice','Choice','required');
			$this->form_validation->set_rules('uploadchoice','UploadChoice','required');
			if($this->form_validation->run()==FALSE)
			{
				$this->load->view('include/header');
				$this->load->view('admin/upload_view',$data);
				$this->load->view('include/footer');
			}else{

				$choiceid=$this->input->post("choice"); //////FIRST_RADIO_CHOICE
				if($choiceid=="1"){ 
					//var_dump($choiceid);
					//echo "Opp" +  $choiceid; 
					$this->form_validation->set_rules('opportunitychoice','OpportunityChoice','required');
					if($this->form_validation->run()==FALSE){
						$this->load->view('include/header');
						$this->load->view('admin/upload_view',$data); //maketoremainfilleddata
						$this->load->view('include/footer');
					}else{
						$uploadchoiceid=$this->input->post("uploadchoice"); //////SECOND_RADIO_CHOICE
						if($uploadchoiceid == "1"){  
							$this->form_validation->set_rules('imageuploadchoice','ImageUploadChoice','required');
							if($this->form_validation->run()==FALSE){
								$this->load->view('include/header');
								$this->load->view('admin/upload_view',$data);
								$this->load->view('include/footer');
							}else{
								$data=array("opp_id"=>$this->input->post("opportunitychoice"),
											"opp_image"=>$this->input->post("imageuploadchoice"),
											"opp_description"=>$this->input->post("description"),
											"opp_title"=>$this->input->post("title"),
											"opp_subtitle"=>$this->input->post("subtitle"));
								$result=$this->Admin_model->opportunity_upload($data);
								if($result){
									echo "Successful Uploading Opportunity";
								}else{
									echo "Fail Uploading Opportunity";
								}
							}
						}elseif($uploadchoiceid == "2"){
							$this->form_validation->set_rules('vediouploadchoice','VedioUploadChoice','required');
							if($this->form_validation->run()==FALSE){
								$this->load->view('include/header');
								$this->load->view('admin/upload_view',$data);
								$this->load->view('include/footer');
							}else{
								$data=array("opp_id"=>$this->input->post("opportunitychoice"),
											"opp_vdlink"=>$this->input->post("vediouploadchoice"),
											"opp_description"=>$this->input->post("description"),
											"opp_title"=>$this->input->post("title"),
											"opp_subtitle"=>$this->input->post("subtitle"));
								$result=$this->Admin_model->opportunity_upload($data);
								if($result){
									echo "Successful Uploading Opportunity";
								}else{
									echo "Fail Uploading Opportunity";
								}
							}
						}  //////END_OF_SECOND_RADIO_CHOICE
					}
				}else if($choiceid=="2"){ 
					//var_dump($choiceid);
					//echo "Skill"  + $choiceid;
					$this->form_validation->set_rules('skillchoice','SkillChoice','required');
					if($this->form_validation->run()==FALSE){
						$this->load->view('include/header');
						$this->load->view('admin/upload_view',$data); //maketoremainfilleddata
						$this->load->view('include/footer');
					}else{
						$uploadchoiceid=$this->input->post("uploadchoice");
						if($uploadchoiceid == "1"){
							$this->form_validation->set_rules('imageuploadchoice','ImageUploadChoice','required');
							if($this->form_validation->run()==FALSE){
								$this->load->view('include/header');
								$this->load->view('admin/upload_view',$data);
								$this->load->view('include/footer');
							}else{
								$data=array("skill_id"=>$this->input->post("skillchoice"),
											"skill_image"=>$this->input->post("imageuploadchoice"),
											"skill_description"=>$this->input->post("description"),
											"skill_title"=>$this->input->post("title"),
											"skill_subtitle"=>$this->input->post("subtitle"));
								$result=$this->Admin_model->skill_upload($data);
								if($result){
									echo "Successful Uploading Skill";
								}else{
									echo "Fail Uploading Skill";
								}
							}
						}elseif($uploadchoiceid=="2"){
							$this->form_validation->set_rules('vediouploadchoice','VedioUploadChoice','required');
							if($this->form_validation->run()==FALSE){
								$this->load->view('include/header');
								$this->load->view('admin/upload_view',$data);
								$this->load->view('include/footer');
							}else{
								$data=array("skill_id"=>$this->input->post("skillchoice"),
											"skill_vdlink"=>$this->input->post("vediouploadchoice"),
											"skill_description"=>$this->input->post("description"),
											"skill_title"=>$this->input->post("title"),
											"skill_subtitle"=>$this->input->post("subtitle"));
								$result=$this->Admin_model->skill_upload($data);
								if($result){
									echo "Successful Uploading Skill";
								}else{
									echo "Fail Uploading Skill";
								}
							}
						}
					}
				}//////END_OF_FIRST_RADIO_CHOICE
			} /////END_OF_FIRST_IF
		 }//session
		 
		}//////END_OF_upload_FUNCTION

		function get_oppdetail(){
			$data['query']=$this->Admin_model->oppdetail_getall();
			$this->load->view('include/header');
			$this->load->view('admin/getopportunity_view',$data);
			$this->load->view('include/footer');
		}
		function edit_opportunity($oppdetail_id){
			$data['edit']=$this->Admin_model->oppdetail_get($oppdetail_id);
			// var_dump($data); die();
			$data['all_opp']=$this->Admin_model->opportunity();
			$data['all_skill']=$this->Admin_model->skill();
			$this->load->view('include/header');
			$this->load->view('admin/editopportunity_view',$data);
			$this->load->view('include/footer');
		}
		function delete_opportunity($oppdetail_id){

		}
		function get_skilldetail(){
			$data['query']=$this->Admin_model->skilldetail_getall();
			$this->load->view('include/header');
			$this->load->view('admin/getskill_view',$data);
			$this->load->view('include/footer');
		}
		function edit_skill($sdetail_id){
			$data['edit']=$this->Admin_model->skilldetail_get($sdetail_id);
			// var_dump($data); die();
			$data['all_opp']=$this->Admin_model->opportunity();
			$data['all_skill']=$this->Admin_model->skill();
			$this->load->view('include/header');
			$this->load->view('admin/editskill_view',$data);
			$this->load->view('include/footer');
		}
	}
?>