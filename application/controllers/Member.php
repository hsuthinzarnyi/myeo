<?php
	/**
	* 
	*/
	class Member extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function index()
		{
			$this->GetAll();
		}
		function GetAll()
		{
			$this->load->model('member_model');
			$data['query']=$this->member_model->member_getall();
			$this->load->view('member_view',$data);
		}
		function Get($memberId='')
		{

			$this->load->model('member_model');
			$data['query']=$this->member_model->member_get($memberId);
			$this->load->view('member_view',$data);
		}
	}
?>