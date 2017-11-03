<?php
/**
* 
*/
class Videoplayer extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->load->view('user/video_view');
	}
}
?>



