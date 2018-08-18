<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller

 {

 function __construct()
	{
		parent::__construct();
		$this->load->model('mhome');
		$this->load->helper('url');
		if($this->session->userdata('logged_in') == false)
		{
				redirect('login');
		}


	}

	
	function index()
	{
		
		
		$data = array(
			
			'obtCount'		=> $this->mhome->getpemCount(),
			'psnCount'		=> $this->mhome->getjbCount(),
			'akunCount'		=> $this->mhome->getmbCount(),
			'trCount'		=> $this->mhome->getTrCount(),
			
		);
		$data['main_view'] = 'vhome';
		$this->load->view('vregister', $data);
	}	


}
/* End of file home.php */
/* Location: ./application/controllers/home.php */