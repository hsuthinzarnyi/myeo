<?php
/**
* 
*/
class Profile extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	  $this->load->helper('security');
    $this->load->helper('form');
		$this->load->model('Profile_model');
    $this->load->model('User_model');
	}

	function index()
	{
		// $this->load->view('include/header');
    // $this->load->view('include/nav');
		// $this->load->view('home/profile_page');
		// $this->load->view('include/footer');
	}

	function create()
  {
     $email=$this->session->userdata('email');
    // var_dump($username,$email);die();
     $result['data']=$this->User_model->getuser($email);
     $this->form_validation->set_rules('name','Name','required');
     $this->form_validation->set_rules('education','Education','required');
     $this->form_validation->set_rules('location','Location','required');
     $this->form_validation->set_rules('sentence','Sentence','required');

     $this->form_validation->set_rules('UG_scholar','UG Scholar');
     $this->form_validation->set_rules('Master','Master');
     $this->form_validation->set_rules('PHD','PHD');
     $this->form_validation->set_rules('Internship','Internship');
     $this->form_validation->set_rules('Conterence','Conterence');
     $this->form_validation->set_rules('Training','Training');
     $this->form_validation->set_rules('Jobs','Jobs');
     $this->form_validation->set_rules('Competition','Competition');

     $this->form_validation->set_rules('1','1');
     $this->form_validation->set_rules('2','2');
     $this->form_validation->set_rules('3','3');
     $this->form_validation->set_rules('4','4');
     $this->form_validation->set_rules('5','5');
     $this->form_validation->set_rules('6','6');
     $this->form_validation->set_rules('7','7');
     $this->form_validation->set_rules('8','8');
     $this->form_validation->set_rules('9','9');
     $this->form_validation->set_rules('0','0');

     if($this->form_validation->run() == FALSE)

     {
       // echo "Hello world";
        $this->load->view('include/header');
        $this->load->view('home/profile_page',$result);
        $this->load->view('include/footer');
     }
     else
     {
      $name      = $this->input->post('name');
      $education = $this->input->post('education');
      $location  = $this->input->post('location');
      $sentence  = $this->input->post('sentence');

      $UG_scholar= $this->input->post('UG_scholar');
      $Master    = $this->input->post('Master');
      $PHD       = $this->input->post('PHD');
      $Internship= $this->input->post('Internship');
      $Conterence= $this->input->post('Conterence');
      $Training  = $this->input->post('Training');
      $Jobs      = $this->input->post('Jobs');
      $Competition= $this->input->post('Competition');

      $Communation = $this->input->post('1');
      $Leadership  = $this->input->post('2');
      $Public      = $this->input->post('3');
      $Application =  $this->input->post('4');
      $Interview   =  $this->input->post('5');
      $critical    = $this->input->post('6');
      $Creative    = $this->input->post('7');
      $Digital     =  $this->input->post('8');
      $Cover       =  $this->input->post('9');
      $Entrepreneurship = $this->input->post('0');
      var_dump($Communation,$Leadership,$Public,$Application,$Interview,$critical,$Creative,$Digital,$Cover,$Entrepreneurship,'hhh');
      $image  = $this->img_upload();
      $cv     = $this->pdf_upload();
      $letter = $this->pdf_upload1();
      $video  = $this->video_upload();
      var_dump($name, $education, $location, $sentence,$UG_scholar,$Master,$PHD,$Internship,$Conterence,$Training,$Jobs,$Competition,$Communation, $Leadership, $Public, $Application,$Interview,$critical,$Creative,$Digital,$Cover,$Entrepreneurship,'kkkk',$image,'img',$cv,$letter,'vd',$video);die();

      $result = $this->Profile_model->create( $image, $cv, $letter, $video);
      $result2=$this->Profile_model->add($UG_scholar,$Master,$PHD,$Internship,$Conterence,$Training,$Jobs,$Competition);
      if($result2)
      {
        $add = $this->db->insert_id();
        $var = $this->Profile->add_id($add);
      }
      $result3=$this->Profile_model->addskill($Communation, $Leadership, $Public, $Application,$Interview,$critical,$Creative,$Digital,$Cover,$Entrepreneurship);

      if($result)
      {
        redirect('Profile','refresh');
      }
      else
      {
        $this->load->view('include/header');
        $this->load->view('include/nav');
        $this->load->view('home/profile_page');
      }

     }
  }

	function img_upload()
    {
      // var_dump('img');
      $config['upload_path']          = './uploads/';
      $config['allowed_types']        = 'gif|jpg|png|jpeg';
      $config['max_size']             = 1000;

      $this->load->library('upload', $config);
      $this->upload->initialize($config);
      if ( ! $this->upload->do_upload('image'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        $this->load->view('home/profile_page',$error);
                        return $error;
                }
                else
                {
                  // var_dump('else');die();
                        $data = array('upload_data' => $this->upload->data());
                        return $data['upload_data']['file_name'];
                }
    }

    function pdf_upload()
    {
      $config['upload_path']          = './pdf/';
      $config['allowed_types']        = 'pdf|PDF';
      $config['max_size']             = 1000;

      $this->load->library('upload', $config);
      $this->upload->initialize($config);

      if ( ! $this->upload->do_upload('cv'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        return $error;
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        return $data['upload_data']['file_name'];
                }
    }
    function pdf_upload1()
    {
      $config['upload_path']          = './pdf/';
      $config['allowed_types']        = 'pdf|PDF';
      $config['max_size']             = 1000;

      $this->load->library('upload', $config);
      $this->upload->initialize($config);

      if ( ! $this->upload->do_upload('letter'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        return $error;
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        return $data['upload_data']['file_name'];
                }
    }

     function video_upload()
     {
    // if (isset($_FILES['video']['name']) && $_FILES['video']['name'] != '') {
    //     unset($config);
    //     $date = date("ymd");
        $configVideo['upload_path'] = './video/';
        $configVideo['max_size'] = '60000';
        $configVideo['allowed_types'] = 'mp4';
        $configVideo['overwrite'] = FALSE;
        $configVideo['remove_spaces'] = TRUE;
        // $video_name = $_FILES['video']['name'];
        // $configVideo['file_name'] = $video_name;

        $this->load->library('upload', $configVideo);
        $this->upload->initialize($configVideo);

        if(!$this->upload->do_upload('video')) 
        {
            // echo $this->upload->display_errors();
            $error = array('error' => $this->upload->display_errors());
                        return $error;
        }
        else
        {
            // $videoDetails = $this->upload->data();
            // $data['video_name']= $configVideo['file_name'];
            // $data['video_detail'] = $videoDetails;
            // $this->load->view('/', $data);
               $data = array('upload_data' => $this->upload->data());
                        return $data['upload_data']['file_name'];
        }

    // }else{
    //     echo "Please select a file";
    // }
  }

}
?>
<!--HTZN-->