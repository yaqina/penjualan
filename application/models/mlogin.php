<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mlogin extends CI_Model {

	public function accountCheck(){
		$qury = $this->db->count_all('admin');
		if($qury == 0){
			return true;
		}else{
			return false;
		}
	}

	public function userCheck(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');



		$kueri = $this->db->where('uname', $username)->where('pass',$password)->get('admin');
		if($kueri->num_rows() > 0){
			$data = array(
				'username'	=> $kueri->row()->uname,
				'logged_in'	=> true,
				'role'		=> $kueri->row()->role,
				
			);
			
			$this->session->set_userdata($data);
			$id = $kueri->row()->id;
			return true;
		}else{
			return false;
		}
	}

	 function add($data, $admin){
	  // buat fungsi namannya add transaksi
	 	
          
            $this->db->insert($admin,$data); // ini inti prosenya, yaitu masukin arrray data ke tabel transaksi
        }
       

}

/* End of file Login_model.php */
/* Location: ./application/models/Login_model.php */