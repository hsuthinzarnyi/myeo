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

	function create($image,$cv, $letter, $video)
	{
		// var_dump($image, $letter, $video);
		$array   = array('picture' => $image,'cv' =>$cv, 'cover_letter' => $letter,'intro_video' => $video);
		// var_dump($add);die();
		$res = $this->db->insert('user',$array);
		return $res ;
	}

	function add($UG_scholar,$Master,$PHD,$Internship,$Conterence,$Training,$Jobs,$Competition)
	{
		$array = array('UG_scholar'=>$UG_scholar,'Master'=>$Master,'PHD'=>$PHD,'Internship'=>$Internship,'Conterence'=>$Conterence,'Training'=>$Training,'Jobs'=>$Jobs,'Competition'=>$Competition );
		var_dump($array);die();
		$this->db->insert('user_opp',$array);
	}
	function addskill($Communation, $Leadership, $Public, $Application,$Interview,$critical,$Creative,$Digital,$CV,$Entrepreneurship)
	{
		$array = array('Communation' =>$Communation ,'Leadership'=>$Leadership,'Public'=>$Public,'Application'=>$Application,'Interview'=>$Interview,'critical'=>$critical,'Creative'=>$Creative,'Digital'=>$Digital,'Cover'=>$Cover,'Training'=>$Training );
		var_dump($array);die();
		$this->db->insert('profile',$array);
	}

	function getall()
	{
		$all = $this->db->select('user');
		return $all;
	}

}
?>