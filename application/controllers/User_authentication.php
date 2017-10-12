<?php defined('BASEPATH') OR exit('No direct script allowed');
/**
* 
*/
class User_authentication extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->library('google');
		$this->load->library('facebook');
		$this->load->model('User','',TRUE);

	}
	public function index()
	{
		if($this->session->userdata('loggedIn')==true)
		{
			redirect('user_authencation/profile');
		}
		if(isset($_GET['code']))
		{
			//authenticate user
			$this->google->getAuthenticate();
			//get user info from google
			$gpInfo=$this->google->getUserInfo();
			//preparing data for databsae insertion
			$userData['oauth_provider']='google';
			$userData['oauth_uid']=$gpInfo['id'];
			$userdata['first_name']=$gpInfo['given_name'];
			$userdata['last_name']=$gpInfo['family_name'];
			$userdata['email']=$gpInfo['email'];
			$userData['gender']=!empty($gpInfo['gender'])?$gpInfo['gender']:'';
			$userData['locale']=!empty($gpInfo['locale'])?$gpInfo['locale']:'';
			$userData['profile_url']=!empty($gpInfo['link'])?$gpInfo['link']:'';
			$userData['picture_url']=!empty($gpInfo['picture'])?$gpInfo['picture']:'';
			//insert or update user data to the database
			$userID=$this->user->checkUser($userData);
			//store status & user info in session
			$this->session->set_userdata('loggedIn',true);
			$this->session->set_userdata('userData',$userData);
			//redirect to profile page
			redirect('user_authencation/profile/');
		}
		//google login url
		$data['loginURL']=$this->google->loginURL();
        //load google login view
        $this->load->view('user_authencation/index',$data);        
	}
	public function profile()
	{
		//redirect to login page if user not logged in
		if (!$this->session->userdata('loggfeedIn'))
		{
			redirect('/user_authencation/');
		}
		//get user info from session
		$data['userData']=$this->session->userdata('userData');
		//load usser profile view
		$this->load->view('user_authencation/profile',$data);
	}
	public function logout()
	{
		//delete login status and user info from session
		$this->session->unset_userdata('loggedIn');
		$this->session->unset_userdata('userData');
		$this->session->sess_destory();
		//redirect to login page 
		redirect('/user_authencation/');
	}
}