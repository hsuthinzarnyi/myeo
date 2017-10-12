<?php
 
  class Hello extends CI_controller
  { var $name;
  	var $country;
  	var $fav_color;
  	
  	function __construct()
  	{
  		parent::__construct();
  		$this->name='Thet';
  		$this->country='Sing';
  		$this->fav_color='green';
  	}
  	public function index()
  	{
  		echo " Hello World!";
  		$this->load->view('hello_view');
  	}
  	function test()
  	{
  		$data['name']=$this->name;
  		$data['country']=$this->country;
  		$data['fav_color']=$this->fav_color;
  		$this->load->view('test_view',$data);
  	}
  	function TestGET($fullname='',$countryname='',$favcolor='')
  	{
  		$data['name']=($fullname)? $fullname: $this->name;
  		$data['country']=($countryname)? $countryname: $this->country;
  		$data['fav_color']=($favcolor)? $favcolor: $this->fav_color;
  		$this->load->view('test_view',$data);
  	}
  }
 ?>