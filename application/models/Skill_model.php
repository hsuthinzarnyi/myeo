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
	function getall($limit=false,$offset=false,$order_by=false)
	{
		$this->db->select('*');
		$this->db->from('skill');
		$this->db->join('skill_detail','skill.skill_id=skill_detail.skill_id');
		$this->db->limit($limit);
		$this->db->offset($offset);
		$this->db->order_by('skill.skill_id',$order_by);
		$result=$this->db->get();
		return $result->result();
	}
	function left_all()
	{
		$this->db->select('*');
		$this->db->from('skill');
		$result=$this->db->get();
		return $result->result();
	}

    function skilldetail($skill_id,$limit=false,$offset=false,$order_by=false)
	{
		// var_dump($skill_id);
		$this->db->select('*');
		$this->db->from('skill');
		$this->db->join('skill_detail','skill.skill_id=skill_detail.skill_id');
		$this->db->where('skill.skill_id',$skill_id);
		// $this->db->limit($limit);
		$this->db->offset($offset);		
		// $this->db->order_by($skill_id,$order_by);
		$skill_detail = $this->db->get();
		return $skill_detail->result();
	}

	function search($search,$limit=false,$offset=false,$order_by=false)
	{
		$this->db->select('*');
		$this->db->from('skill_detail');
		$this->db->like('skill_title',$search);
		// $this->db->limit($limit);
		$this->db->offset($offset);
		$this->db->order_by($order_by);
		$search_res = $this->db->get();
		return $search_res->result();
	}

	function check($search)
  	{
	  	$this->db->select('*');
	  	$this->db->from('skill_detail');
	  	$this->db->like('skill_title',$search);
	  	$data=$this->db->get();
	  	return $data->result();
 	 }
 	 function get_skill($limit=false,$offset=false,$order_by=false) 
	{       
		    $this->db->select('*');
			$this->db->from('skill_detail');		
			$this->db->limit($limit);
			$this->db->offset($offset);
			$this->db->order_by('sdetail_id',$order_by);
			$data=$this->db->get();
			return $data->result();
		
	}
}
?>