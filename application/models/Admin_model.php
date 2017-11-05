<?php
	/**
	* 
	*/
	class Admin_model extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		function opportunity_upload($data){
			$result=$this->db->insert('opp_detail',$data);
			return $result;
		}
		function skill_upload($data)
		{
			$result=$this->db->insert('skill_detail',$data);
			return $result;
		}
		function oppdetail_getall(){
			$this->load->database();
			$query=$this->db->get('opp_detail');
			return $query->result_array();
		}
		function oppdetail_get($oppdetail_id){
			// $this->db->select('*,opp_detail.opp_id,opp_detail.opp_title,opp_detail.opp_subtitle,opp_detail.opp_description,opp_detail.opp_vdlink,opp-detail.opp_image,opportunity.type');
			// $this->db->from('opp_detail');
			// $this->db->join('opportunity','opp_detail.opp_id=opportunity.opp_id');
			// $this->db->where('opp_detail.oppdetail_id',$oppdetail_id);
			$query=$this->db->get_where('opp_detail',array('oppdetail_id'=>$oppdetail_id));
			return $query->row();
		}
		function opportunity(){
			$all_opp=$this->db->get('opportunity');
			return $all_opp->result();
		}
		function opportunity_edit($data,$oppdetail_id){
			$this->db->where('oppdetail_id',$oppdetail_id);
			$result=$this->db->update('opp_detail',$data); //to check with values alreay added
			return $result;
		}
		function opportunity_delete($oppdetail_id){
			$this->db->where('oppdetail_id',$oppdetail_id);
			$result=$this->db->delete('opp_detail');
			return $result;
		}
		function skilldetail_getall(){
			$this->load->database();
			$query=$this->db->get("skill_detail");
			return $query->result_array();
		}
		function skilldetail_get($sdetail_id){
			$query=$this->db->get_where('skill_detail',array('sdetail_id'=>$sdetail_id));
			return $query->row();
		}
		function skill(){
			$all_skill=$this->db->get('skill');
			return $all_skill->result();
		}
		function skill_edit($data,$skilldetail_id){
			$this->db->where('sdetail_id',$skilldetail_id);
			$result=$this->db->update('skill_detail',$data); //to check with values alreay added
			return $result;
		}
		function skill_delete($sdetail_id){
			$this->db->where('sdetail_id',$sdetail_id);
			$result=$this->db->delete('skill_detail');
			return $result;
		}
	}
?>