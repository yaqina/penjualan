<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('mlogin');
		$this->load->helper('url');
		$this->load->library('session','form_validation');
		
	}

	public function index(){
		$this->load->view('vlogin');

	}

	public function dologin(){
		if($this->input->post('login'))
		{
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');

			if ($this->form_validation->run() == true) 
			{
				if($this->mlogin->userCheck() == true)
				{
					$src = $this->input->get('src');
					if(!empty($src))
					{
						redirect($src);
					}else
					{
						redirect('home/index');
					}
				}

				else
				{
					$this->session->set_flashdata('announce', 'Invalid username or password');
					redirect('login');
				}

			} 	else 
				{
					$this->session->set_flashdata('announce', validation_errors());
					redirect('login');
				}
		} 
				else
				 {
					$this->session->set_flashdata('announce', 'Account disabled');
					redirect('login');
				}
	}
	public function logout(){
		$data = array(
			'username'	=> '',
			'logged_in'	=> false,
			'role'		=> ''
		);

		$this->session->sess_destroy();
		redirect('login');
	}

	function register(){
		
		$this->load->view('vregister');

	}
	function add(){
		
		
            //$status = $this->input->post('status'); //kebetulan status di databasenya udah ada defaultnya jadi ga usah ditangkep, biar mysql yang ngisi sendiri
            $data = array( //array yang buat masukin data
                        'uname'=> $this->input->post('uname'), // yang ditangkep dimasukin
                        'pass'=>$this->input->post('pass'), // yang ditangkep dimasukin
                        'role'=>$this->input->post('role'), // yang ditangkep dimasukin
                        
     					
                        //'status'=>$status // gak aktif ini
                );
            
            $this->load->model('mlogin'); //meload atau memanggil model mtransaski
            $this->mlogin->add($data,'admin'); //mengakses fungsi addTransaski di model mtransaski
            redirect('login/index'); //setelah selesai redirect ke halaman awal
        }
}


/* End of file Login.php */
/* Location: ./application/controllers/Login.php */