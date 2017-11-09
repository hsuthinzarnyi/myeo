<?php
/**
* 
*/
class Profile_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function update($name,$location,$education,$sentence,$image,$cv, $letter, $video)
	{
		// var_dump($name,'ji',$location,$education,$sentence,$image,$cv, $letter, $video);die();
		$array  = array('location' => $location,'education'=>$education,'sentence'=>$sentence,'picture'=>$image,'cv'=>$cv,'cover_letter'=>$letter,'intro_video'=>$video );
		// var_dump($array);die();
		$this->db->where('name',$name);
		$res = $this->db->update('user',$array);
		// var_dump($res);die();
		return $res ;
	}

	// function add($UG_scholar,$Master,$PHD,$Internship,$Conterence,$Training,$Jobs,$Competition)
	// {
	// 	$array = array('UG_scholar'=>$UG_scholar,'Master'=>$Master,'PHD'=>$PHD,'Internship'=>$Internship,'Conterence'=>$Conterence,'Training'=>$Training,'Jobs'=>$Jobs,'Competition'=>$Competition );
	// 	// var_dump($array);die();
	// 	$this->db->insert('user_opp',$array);
	// }
	// function addskill($Communation, $Leadership, $Public, $Application,$Interview,$critical,$Creative,$Digital,$CV,$Entrepreneurship)
	// {
	// 	$array = array('Communation' =>$Communation ,'Leadership'=>$Leadership,'Public'=>$Public,'Application'=>$Application,'Interview'=>$Interview,'critical'=>$critical,'Creative'=>$Creative,'Digital'=>$Digital,'Cover'=>$Cover,'Training'=>$Training );
	// 	// var_dump($array);die();
	// 	$this->db->insert('user_skill',$array);
	// }

	function getall()
	{
		$all = $this->db->select('user');
		return $all;
	}

	function check($UG_scholar,$Master,$PHD,$Internship,$Conference,$Training,$Jobs,$Competition)
	{
		$this->db->select('*');
		$this->db->from('opportunity');
		$this->db->where('type',$UG_scholar);
		$this->db->where('type',$Master);
		$this->db->where('type',$PHD);
		$this->db->where('type',$Internship);
		$this->db->where('type',$Conference);
		$this->db->where('type',$Training);
		$this->db->where('type',$Jobs);
		$this->db->where('type',$Competition);
		$data = $this->db->get();
		var_dump($data->result());
		return $data->result();
	}

}
?>