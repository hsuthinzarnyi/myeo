<?php
/**
* 
*/
class Custom_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database(); 
	}
  
	function oppdetail($opp_id)
	{
		$this->db->select('*');
		$this->db->from('opportunity');
		$this->db->join('opp_detail','opportunity.opp_id=opp_detail.opp_id');
		$this->db->where('opportunity.opp_id',$opp_id);
		$opp_detail = $this->db->get();
		return $opp_detail->result();
	}

	function skilldetail($skill_id)
	{
		$this->db->select('*');
		$this->db->from('skill');
		$this->db->join('skill_detail','skill.skill_id=skill_detail.skill_id');
		$this->db->where('skill.skill_id',$skill_id);
		$skill_detail = $this->db->get();
		return $skill_detail->result();
	}

	
}
?>