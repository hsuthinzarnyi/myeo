<?php
/**
* 
*/
class Skill_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	function getall()
	{
		$this->db->select('*');
		$this->db->from('skill');
		$this->db->join('skill_detail','skill.skill_id=skill_detail.skill_id');
		$result=$this->db->get();
		return $result->result();
	}

    function skilldetail($skill_id)
	{
		$this->db->select('*');
		$this->db->from('skill');
		$this->db->join('skill_detail','skill.skill_id=skill_detail.skill_id');
		$this->db->where('skill.skill_id',$skill_id);
		$skill_detail = $this->db->get();
		// var_dump($opp_detail->result());die();
		return $skill_detail->result();
	}
	function search($search)
	{
		$this->db->select('*');
		$this->db->from('skill_detail');
		// $this->db->join('opportunity','opportunity.opp_id=opp_detail.opp_id');
		$this->db->like('skill_title',$search);
		$search_res = $this->db->get();
		// var_dump($search_res->result());
		return $search_res->result();
	}

	function add()
	{
		
	}
}
?>