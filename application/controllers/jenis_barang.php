<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class jenis_barang extends CI_Controller {

	 function __construct()
	{
		parent::__construct();
		$this->load->model('mjenis_barang');
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
	{	$data['main_view']="vjbarang";
		$data['jbarang']=$this->mjenis_barang->read()->result();
		$this->load->view('template', $data);
	}
	
	
	

        function add(){ // buat fungsi namannya add transaksi
           
            
           
            $data = array( //array yang buat masukin data
                        'jenis_barang'=>$this->input->post('jenis_barang'), // yang ditangkep dimasukin
                        
     
                        //'status'=>$status // gak aktif ini
                );
           
            $this->mjenis_barang->add($data,'jenis_barang'); //mengakses fungsi addTransaski di model mtransaski
           echo json_encode($data);
            //redirect('pemasok/index'); //setelah selesai redirect ke halaman awal
        
        }

        function delete(){
		$id=$_GET['id'];
		
		$this->mjenis_barang->delete($id,'jenis_barang');
		//echo json_encode(array("status" => TRUE));
		//redirect('jenis_barang/index'); //setelah selesai redirect ke halaman awal


		
	}

function edit()
	{
		//$nim=$this->uri->segment(3);
		$id=$this->input->post('id');

		$data=array(
				
				'jenis_barang'=>$this->input->post('jenis_barang'), // yang ditangkep dimasukin
				
				
			);
	
		$this->mjenis_barang->update($id,$data,'jenis_barang');
		echo json_encode(array("status" => TRUE));
		//redirect('pemasok/index');
		
	}
	
	
	public function ajax_edit($id)
		{
			$data = $this->mjenis_barang->get_by_id($id);
 
 
 
			echo json_encode($data);
		}
 
		
      
}

/* End of file pemasok.php */
/* Location: ./application/controllers/pemasok.php */

