<?php
/**
* 
*/
class User_model extends CI_Model
{
  
  function __construct()
  {
    parent:: __construct();
    $this->load->database();
  }
  function check($name,$email,$password)
  {
    // var_dump($name,$email,$password);
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('name',$name);
    $this->db->where('email',$email);
    $this->db->where('password',$password);
    $data=$this->db->get();
    // var_dump($data->result());die();

    return $data->result();

  }
  function signup($name,$email,$password )
  {
    $this->db->insert('user',array('name'=>$name,'email'=>$email,'password'=>$password));
    
  }
    function login($email,$password)
  {
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('email',$email);
    $this->db->where('password',$password);
    // $this->db->limit(1);
    $data=$this->db->get();
    // if($data->num_rows()==1)
    // {
      // return $data->result();
    // }
    // else
    // {
      // return false;
    // }
    return $data->row_array();
  }
  function getuser($email)
  {
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('email',$email);
    $data=$this->db->get();
    // var_dump($data->row());die();
    return $data->row();
  }
 
}
?>