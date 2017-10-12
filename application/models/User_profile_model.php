<?php

/**
* 
*/
class User_Profile_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function create($user_id, $education, $location, $sentence)
	{
		$add    = array('user_id'=>$user_id , 'education' => $education, 'location'=>$location, 'sentence'=>$sentence);
		$result = $this->db->insert('profile');
		return $result;
	}
}
?>