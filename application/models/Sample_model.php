<?php
 /**
 * 
 */
 class Sample_model extends CI_Model
 {
 	
 	function __construct()
 	{
 		parent::__construct();
		$this->load->database();
 	}
 	function count_all()
 	{
		$this->db->from('opportunity');	
		return $this->db->count_all_results();
    }
	function get_all($limit=false,$offset=false,$order_by=false) 
	{       
		    $this->db->select('*');
			$this->db->from('opportunity');		
			$this->db->limit($limit);
			$this->db->offset($offset);
			$this->db->order_by('opp_id',$order_by);
			$data=$this->db->get();
			return $data->result();
		
	}
	function count_opp()
 	{
		$this->db->from('opp_detail');	
		return $this->db->count_all_results();
    }
	function get_opp($limit=false,$offset=false,$order_by=false) 
	{       
		    $this->db->select('*');
			$this->db->from('opp_detail');		
			$this->db->limit($limit);
			$this->db->offset($offset);
			$this->db->order_by('oppdetail_id',$order_by);
			$data=$this->db->get();
			return $data->result();
		
	}
	function count_skill()
 	{
		$this->db->from('skill_detail');	
		return $this->db->count_all_results();
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