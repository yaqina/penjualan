<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class master_barang extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('mmbarang');
		$this->load->helper('url');
		if($this->session->userdata('logged_in') == false)
		{
				redirect('login');
		}
		if($this->session->userdata('role') == 'pegawai'){
			$this->session->set_flashdata('announce', 'anda bukan admin');
			redirect('home/index');
		}
		
	}
	function index()
	{
		$data['main_view']="vmbarang";
		$data['pemasok']=$this->mmbarang->tampilp()->result();
		$data['jenis']=$this->mmbarang->tampiljb()->result();
		$data['mm']=$this->mmbarang->hh()->result();
		$data['a']=$this->mmbarang->get();
		$this->load->view('template', $data);
	}

function add(){ 
		
		
			
		$data = array( //array yang buat masukin data
                        'nama_barang'=>$this->input->post('nama_barang'),
						'stok'=>$this->input->post('stok'),
						'harga'=>$this->input->post('harga'),
						'id_pemasok' => $this->input->post('id_pemasok'),
						'id_jbarang' => $this->input->post('id_jbarang'),
			
     

			);
		
		$this->mmbarang->add($data,'master_barang');
		echo json_encode(array("status" => TRUE));
		//redirect('pemasok/index');
	}

        function delete()
        {
        	$id=$_GET['id'];
		
		$this->mmbarang->delete($id,'master_barang');

		echo json_encode(array("status" => TRUE)); //setelah selesai redirect ke halaman awal

        }
function edit()
	{
		//$nim=$this->uri->segment(3);
		$id=$this->input->post('id');
		$data=array(
				
				'nama_barang'=>$this->input->post('nama_barang'),
						'stok'=>$this->input->post('stok'),
						'harga'=>$this->input->post('harga'),
						'id_pemasok' => $this->input->post('id_pemasok'),
						'id_jbarang' => $this->input->post('id_jbarang'),
			
				
				
			);
	
		$this->mmbarang->update($id,$data,'master_barang');
		echo json_encode(array("status" => TRUE));
		//redirect('pemasok/index');
		
	}
	
	
	 function ajax_edit($id)
		{
			$data = $this->mmbarang->get_by_id($id);
 
 
 
			echo json_encode($data);
		}
        
}

/* End of file cc.php */
/* Location: ./application/controllers/cc.php */