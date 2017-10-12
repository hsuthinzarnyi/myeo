<?php defined('BASEPATH') OR exit('No direct script allowed');
/**
* 
*/
class User_authentication1 extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('facebook');
		$this->load->model('User1','',TRUE);
	}
	public function index()
	{
		$userData=array();
		if($this->facebook->is_authenticated())
		{
			$userProfile=$this->facebook->request('get','/me?fields=id,first_name,last_name,email,locale,picture');
			$userData['oauth_provider']='facebook';
			$userData['oauth_id']=$userProfile['id'];
			$userData['first_name']=$userProfile['first_name'];
			$userData['last_name']=$userProfile['last_name'];
			$userData['email']=$userProfile['email'];
			$userData['gender']=$userProfile['gender'];
			$userData['locale']=$userProfile['locale'];
			$userData['profile_url']='http://www.facebook.com/'.$userProfile['id'];
			$userData['picture_url']=$userProfile['picture']['data']['url'];
			$userID=$this->user->checkUser($userData);
			if(!empty($userID))
			{
				$data['userData']=$userData;
				$this->session->set_userdata('userData',$userData);
			}
			else
			{
				$data['userData']=array();
			}
			$data['logoutUrl']=$this->facebook->logout_url();			
		}
		else
		{
			$data['authUrl']=$this->facebook->login_url();
		}
		$this->load->view('user_authentication1/index',$data);
	}
	public function logout()
	{
		$this->facebook->destroy_session();
		$this->session->unset_userdata('userData');
		redirect('/user_authentication1');
	}
}