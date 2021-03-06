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
			 $log=$this->session->userdata('logged_in');
           // var_dump($log);die();
			    if(isset($log))
			    {
			      // var_dump("Hello");die();
			      if($log['email']=='koko@gmail.com' && $log['username']=='koko')
			      {
			            $data['all_opp']=$this->Admin_model->opportunity();
						$data['all_skill']=$this->Admin_model->skill();
						$this->load->view('include/header');
						$this->load->view('admin/upload_view',$data);
						$this->load->view('include/footer');
			      }
			      else
			      {
			        redirect('user/login');
			      }
			      
			    }
						
        }

///////////////////myatmonmonkyi/////////////////////
		function get_oppdetail()
		{  
            $log=$this->session->userdata('logged_in');
           // var_dump($log);die();
			    if(isset($log))
			    {
			      // var_dump("Hello");die();
			      if($log['email']=='koko@gmail.com' && $log['username']=='koko')
			      {
			            $data['query']=$this->Admin_model->oppdetail_getall();
						$this->load->view('include/header');
						$this->load->view('admin/getopportunity_view',$data);
						$this->load->view('include/footer');
			      }
			      else
			      {
			        redirect('user/login');
			      }
			      
			    }

			 /////END_OF_FIRST_IF
		}//////END_OF_upload_FUNCTION

		function upload()
		{
			$log=$this->session->userdata('logged_in');
           // var_dump($log);die();
			    if(isset($log))
			    {
			      // var_dump("Hello");die();
			      if($log['email']=='koko@gmail.com' && $log['username']=='koko')
			      {
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
								//var_dump($data);die();
								$result=$this->Admin_model->opportunity_upload($data);
								if($result){
									// echo "Successful Uploading Opportunity";
									redirect('admin/get_oppdetail');
								}else{
									echo "Fail Uploading Opportunity";
								}
							}
						}elseif($uploadchoiceid == "2"){
							$this->form_validation->set_rules('videouploadchoice','VideoUploadChoice','required');
							if($this->form_validation->run()==FALSE){
								$this->load->view('include/header');
								$this->load->view('admin/upload_view',$data);
								$this->load->view('include/footer');
							}else{
								$data=array("opp_id"=>$this->input->post("opportunitychoice"),
											"opp_vdlink"=>$this->input->post("videouploadchoice"),
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
								//var_dump($data);die();
								$result=$this->Admin_model->skill_upload($data);
								if($result){
									// echo "Successful Uploading Skill";
									redirect('admin/get_skilldetail');
								}else{
									echo "Fail Uploading Skill";
								}
							}
						}elseif($uploadchoiceid=="2"){
							$this->form_validation->set_rules('videouploadchoice','VideoUploadChoice','required');
							if($this->form_validation->run()==FALSE){
								$this->load->view('include/header');
								$this->load->view('admin/upload_view',$data);
								$this->load->view('include/footer');
							}else{
								$data=array("skill_id"=>$this->input->post("skillchoice"),
											"skill_vdlink"=>$this->input->post("videouploadchoice"),
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
			}
			      }
			      else
			      {
			        redirect('user/login');
			      }
			      
			    }
			
		}
		function edit_opportunity($oppdetail_id)
		{
		$log=$this->session->userdata('logged_in');
       // var_dump($log);die();
		    if(isset($log))
		    {
		      // var_dump("Hello");die();
		      if($log['email']=='koko@gmail.com' && $log['username']=='koko')
		      {
			    $this->form_validation->set_rules('title','Title', 'trim|required');
				$this->form_validation->set_rules('subtitle','Subtitle','trim|required');
				$this->form_validation->set_rules('description','Description','trim|required');
				$this->form_validation->set_rules('choice','Choice','required');
				//$this->form_validation->set_rules('opportunitychoice','OpportunityChoice','required'); 
				//need or not for select
				$this->form_validation->set_rules('uploadchoice','UploadChoice','required');  
				//need or not for two upload choice

				if($this->form_validation->run()==FALSE){  
					$data['edit']=$this->Admin_model->oppdetail_get($oppdetail_id);
					// var_dump($data); die();
					$data['all_opp']=$this->Admin_model->opportunity();
					$data['all_skill']=$this->Admin_model->skill();
					$this->load->view('include/header');
					$this->load->view('admin/editopportunity_view',$data);
					$this->load->view('include/footer');
				}else{ //no filled condition for opportunity choice and two upload choice 
					$uploadchoiceid=$this->input->post("uploadchoice");
					if($uploadchoiceid=="1"){
						$opp_id=$this->input->post("opportunitychoice");
						$opp_image=$this->input->post("imageuploadchoice");
						$opp_image1=$this->input->post("imageuploadchoice1");
						$opp_description=$this->input->post("description");
	                    $opp_title=$this->input->post("title");
	                    $opp_subtitle=$this->input->post("subtitle");
						
						if($opp_image==NULL)
						{
							$opp_img=$opp_image1;
						  // var_dump($opp_id,$opp_image,$opp_image1,$opp_description,$opp_title,$opp_subtitle);die();
						}
						else
						{
							$opp_img=$opp_image;
						}
						// var_dump($opp_img);die();
						$data=array("opp_id"=>$opp_id,
									"opp_image"=>$opp_img,
									"opp_description"=>$opp_description,
									"opp_title"=>$opp_title,
									"opp_subtitle"=>$opp_subtitle);
						$result=$this->Admin_model->opportunity_edit($data,$oppdetail_id);
						if($result){
							// echo "Successful Editing Opportunity";
							redirect('admin/get_oppdetail');
						}else{
							echo "Fail Editing Opportunity";
						}
					}elseif($uploadchoiceid=="2"){
						$data=array("opp_id"=>$this->input->post("opportunitychoice"),
									//"opp_image"=>$this->input->post("null"),
									"opp_vdlink"=>$this->input->post("videouploadchoice"),
									"opp_description"=>$this->input->post("description"),
									"opp_title"=>$this->input->post("title"),
									"opp_subtitle"=>$this->input->post("subtitle"));
						$result=$this->Admin_model->opportunity_edit($data,$oppdetail_id);
						if($result){
							// echo "Successful Editing Opportunity";
							redirect('admin/get_oppdetail');
						}else{
							echo "Fail Editing Opportunity";
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
		function delete_opportunity($oppdetail_id)
		{
			$log=$this->session->userdata('logged_in');
           // var_dump($log);die();
			    if(isset($log))
			    {
			      // var_dump("Hello");die();
			      if($log['email']=='koko@gmail.com' && $log['username']=='koko')
			      {
			            $result=$this->Admin_model->opportunity_delete($oppdetail_id);
						if($result){
							// echo "Successful Deleting Opportunity";
							redirect('admin/get_oppdetail');
						}else{
							echo "Fail Deleting Opportunity";
						}
			      }
			      else
			      {
			        redirect('user/login');
			      }
			      
			    }
			
			
		}
		function get_skilldetail()
		{
			$log=$this->session->userdata('logged_in');
           // var_dump($log);die();
			    if(isset($log))
			    {
			      // var_dump("Hello");die();
			      if($log['email']=='koko@gmail.com' && $log['username']=='koko')
			      {
			            $data['query']=$this->Admin_model->skilldetail_getall();
						$this->load->view('include/header');
						$this->load->view('admin/getskill_view',$data);
						$this->load->view('include/footer');
			      }
			      else
			      {
			        redirect('user/login');
			      }
			    }
			
		}

function edit_skill($sdetail_id)
{
	$log=$this->session->userdata('logged_in');
   // var_dump($log);die();
	    if(isset($log))
	    {
	      // var_dump("Hello");die();
	      if($log['email']=='koko@gmail.com' && $log['username']=='koko')
	      {
	        $this->form_validation->set_rules('title','Title', 'trim|required');
			$this->form_validation->set_rules('subtitle','Subtitle','trim|required');
			$this->form_validation->set_rules('description','Description','trim|required');
			$this->form_validation->set_rules('choice','Choice','required');
			//$this->form_validation->set_rules('skillchoice','SkillChoice','required'); 
			//need or not for select
			$this->form_validation->set_rules('uploadchoice','UploadChoice','required');  
			//need or not for two upload choice

			if($this->form_validation->run()==FALSE)
			{  
				$data['edit']=$this->Admin_model->skilldetail_get($sdetail_id);
				// var_dump($data); die();
				$data['all_opp']=$this->Admin_model->opportunity();
				$data['all_skill']=$this->Admin_model->skill();
				$this->load->view('include/header');
				$this->load->view('admin/editskill_view',$data);
				$this->load->view('include/footer');
			}
			else
			{ //no filled condition for two upload choice 
				$uploadchoiceid=$this->input->post("uploadchoice");
				if($uploadchoiceid=="1")
				{

					$skill_id=$this->input->post("skillchoice");
					$skill_image=$this->input->post("imageuploadchoice");
					$skill_image1=$this->input->post("imageuploadchoice1");
					$skill_description=$this->input->post("description");
					$skill_title=$this->input->post("title");
					$skill_subtitle=$this->input->post("subtitle");
					
					if($skill_image==NULL)
					{
						$skill_img=$skill_image1;
					  
					}
					else
					{
						$skill_img=$skill_image;
					}
					// var_dump($opp_img);die();
					$data=array("skill_id"=>$skill_id,
								"skill_image"=>$skill_img,
								"skill_description"=>$skill_description,
								"skill_title"=>$skill_title,
								"skill_subtitle"=>$skill_subtitle);
					$result=$this->Admin_model->skill_edit($data,$sdetail_id);
					if($result){
						// echo "Successful Editing Skill";
						redirect('admin/get_skilldetail');
					}else{
						echo "Fail Editing Skill";
					}
				}
				elseif($uploadchoiceid=="2")
				{
					//var_dump($uploadchoiceid);die();
					$data=array("skill_id"=>$this->input->post("skillchoice"),
								//"skill_image"=>$this->input->post("null"),
								"skill_vdlink"=>$this->input->post("videouploadchoice"),
								"skill_description"=>$this->input->post("description"),
								"skill_title"=>$this->input->post("title"),
								"skill_subtitle"=>$this->input->post("subtitle"));
					//var_dump($data);die();

					$result=$this->Admin_model->skill_edit($data,$sdetail_id);
					if($result){
						// echo "Successful Editing Skill";
						redirect('admin/get_skilldetail');
					}else{
						echo "Fail Editing Skill";
					}
				}
			}//nofilled
			} 

			      else
			      {
			        redirect('user/login');
			      }
		}
			
}
		function delete_skill($sdetail_id)
		{

			  $log=$this->session->userdata('logged_in');
           // var_dump($log);die();
			    if(isset($log))
			    {
			      // var_dump("Hello");die();
			      if($log['email']=='koko@gmail.com' && $log['username']=='koko')
			      {
			            $result=$this->Admin_model->skill_delete($sdetail_id);
						if($result)
						{
							// echo "Successful Deleting Skill";
							redirect('admin/get_skilldetail');
						}else
						{
							echo "Fail Deleting Skill";
						}
			      }
			      else
			      {
			        redirect('user/login');
			      }
				}
		}
}	 
?>