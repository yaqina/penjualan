<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemasok extends CI_Controller {

	 function __construct()
	{
		parent::__construct();
		$this->load->model('mpemasok');
		$this->load->helper('url');
		if($this->session->userdata('role') == 'pegawai'){
			$this->session->set_flashdata('announce', 'anda bukan admin');
			redirect('home/index');
		}
		if($this->session->userdata('logged_in') == false)
		{
				redirect('login');
		}
	}



	function index()
	{	$data['main_view']="vpemasok";
		$data['pemasok']=$this->mpemasok->read()->result();
		$this->load->view('template', $data);

	}

	function add(){
		 
            //$status = $this->input->post('status'); //kebetulan status di databasenya udah ada defaultnya jadi ga usah ditangkep, biar mysql yang ngisi sendiri
            $data = array( //array yang buat masukin data
                        'nama'=> $this->input->post('nama'), // yang ditangkep dimasukin
                        'alamat'=>$this->input->post('alamat'), // yang ditangkep dimasukin
                        'telepon'=>$this->input->post('telepon') // yang ditangkep dimasukin
     
                        //'status'=>$status // gak aktif ini
                );
            
            echo json_encode(array("status" => TRUE));
            $this->mpemasok->add($data,'pemasok'); //mengakses fungsi addTransaski di model mtransaski
            //redirect('pemasok/index'); //setelah selesai redirect ke halaman awal
        }

    function delete(){
		$id=$_GET['id'];
		
		$this->mpemasok->delete($id,'pemasok');
		echo json_encode(array("status" => TRUE));
		//redirect('pemasok/index'); //setelah selesai redirect ke halaman awal


		
	}

	function edit()
	{
		//$nim=$this->uri->segment(3);
		$id=$this->input->post('id');
		$data=array(
				
				'nama'=>$this->input->post('nama'),
				'alamat'=>$this->input->post('alamat'),
				'telepon'=>$this->input->post('telepon'),
				
				
			);
	
		$this->mpemasok->update($id,$data,'pemasok');
		echo json_encode(array("status" => TRUE));
		//redirect('pemasok/index');
		
	}
	
	
	public function ajax_edit($id)
		{
			$data = $this->mpemasok->get_by_id($id);
 
 
 
			echo json_encode($data);
		}
 
		
 

}

/* End of file pemasok.php */
/* Location: ./application/controllers/pemasok.php */

