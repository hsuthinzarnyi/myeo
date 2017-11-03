<?php
 
class Ckeditor extends CI_Controller {
 
	// extends CI_Controller for CI 2.x users
 
	public $data 	= 	array();
 
	public function __construct() {
 
		//parent::Controller();
		 parent::__construct(); 
		 // for CI 2.x users

		$this->load->helper('ckeditor');
		$this->load->library('ckeditor');
        $this->load->library('ckfinder');
        $this->ckeditor->basePath=base_url().'asset/ckeditor/';
        $this->ckeditor->config['toolbar']=array(
        	array('Source','-','Bold','Italic','Underline','-','Cut','Copy','Paste',
        		'PasteText','PastFromWorld','-','Undo','Redo','-','NumberedList','BulletedList'));
        $this->ckeditor->config['language']='it';
        $this->ckeditor->config['width']='730px';
        $this->ckeditor->config['height']='300px';

        //Add Ckfinder to Ckeditor
        $this->ckfinder->SetupCKEditor($this->ckeditor,'../../asset/ckfinder/');
 
		//Ckeditor's configuration
		$this->data['ckeditor'] = array(
 
			//ID of the textarea that will be replaced
			'id' 	=> 	'content',
			'path'	=>	'js/ckeditor',
 
			//Optionnal values
			'config' => array(
				'toolbar' 	=> 	"Full", 	//Using the Full toolbar
				'width' 	=> 	"550px",	//Setting a custom width
				'height' 	=> 	'100px',	//Setting a custom height
 
			),
 
			//Replacing styles from the "Styles tool"
			'styles' => array(
 
				//Creating a new style named "style 1"
				'style 1' => array (
					'name' 		=> 	'Blue Title',
					'element' 	=> 	'h2',
					'styles' => array(
						'color' 	=> 	'Blue',
						'font-weight' 	=> 	'bold'
					)
				),
 
				//Creating a new style named "style 2"
				'style 2' => array (
					'name' 	=> 	'Red Title',
					'element' 	=> 	'h2',
					'styles' => array(
						'color' 		=> 	'Red',
						'font-weight' 		=> 	'bold',
						'text-decoration'	=> 	'underline'
					)
				)				
			)
		);
 
		$this->data['ckeditor_2'] = array(
 
			//ID of the textarea that will be replaced
			'id' 	=> 	'content_2',
			'path'	=>	'js/ckeditor',
 
			//Optionnal values
			'config' => array(
				'width' 	=> 	"550px",	//Setting a custom width
				'height' 	=> 	'100px',	//Setting a custom height
				'toolbar' 	=> 	array(	//Setting a custom toolbar
					array('Bold', 'Italic'),
					array('Underline', 'Strike', 'FontSize'),
					array('Smiley'),
					'/'
				)
			),
 
			//Replacing styles from the "Styles tool"
			'styles' => array(
 
				//Creating a new style named "style 1"
				'style 3' => array (
					'name' 		=> 	'Green Title',
					'element' 	=> 	'h3',
					'styles' => array(
						'color' 	=> 	'Green',
						'font-weight' 	=> 	'bold'
					)
				)
 
			)
		);		
 
 
	}
 
	public function index() {
        $this->load->view('include/header');
		$this->load->view('admin/upload_view', $this->data);
        $this->load->view('include/footer');
	}
}