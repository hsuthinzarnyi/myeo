<?php
/**
* 
*/
class Opportunity_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	function getall()
	{
		$this->db->select('*');
		$this->db->from('opportunity');
		$this->db->join('opp_detail','opp_detail.opp_id=opportunity.opp_id');
		$result=$this->db->get();
		return $result->result();
	}
	function left_all()
	{
		$this->db->select('*');
		$this->db->from('opportunity');
		$result=$this->db->get();
		return $result->result();
	}
	function oppdetail($opp_id,$limit=false,$offset=false,$order_by=false)
	{
		$this->db->select('*');
		$this->db->from('opportunity');
		$this->db->join('opp_detail','opportunity.opp_id=opp_detail.opp_id');
		$this->db->where('opportunity.opp_id',$opp_id);
		$this->db->offset($offset);		
		$opp_detail = $this->db->get();
		return $opp_detail->result();
	}
	function search($search,$limit=false,$offset=false,$order_by=false)
	{
		$this->db->select('*');
		$this->db->from('opp_detail');
		$this->db->like('opp_title',$search);
		// $this->db->limit($limit);
		$this->db->offset($offset);
		$this->db->order_by($order_by);
		$search_res = $this->db->get();
		return $search_res->result();
	}
	function check($search)
  	{
	  	$this->db->select('*');
	  	$this->db->from('opp_detail');
	  	$this->db->like('opp_title',$search);
	  	$data=$this->db->get();
	  	return $data->result();
 	 }
}
?>