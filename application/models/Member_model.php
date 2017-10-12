<?php
	class Member_model extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		function member_getall()
		{
			$this->load->database();
			$query=$this->db->get('member');
			return $query->result();

		}
		function member_get($member='')
		{
			$memId=($member) ? $member : 2;
			$this->load->database();
			$query=$this->db->get_where('member',array('id'=>$memId));
			return $query->row_array();
			
		}
		function member_login($username,$password)
		{
			$this->db->select('id,username,password');
			$this->db->from('member');
			$this->db->where('username',$username);
			$this->db->where('password',$password);

			$this->db->limit(1);

			$query=$this->db->get();
			if ($query->num_rows()==1) {
				$res= $query->result();
				return $res;
			}
			else
			{
				return false;
			}

		}
	}

?>