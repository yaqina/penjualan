<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('mtransaksi');
		$this->load->helper('url');
		
		if($this->session->userdata('logged_in') == false)
		{
				redirect('login');
		}
	}

	function index()
	{	$data['main_view']="vtransaksi";
		$data['pemasok']=$this->mtransaksi->tampilp()->result();
		
		$data['bar']=$this->mtransaksi->tt()->result();
		$this->load->view('template', $data);

	}

	function addview()
	{
		# code...
	}

	function add(){
		
		$val1= $this->input->post('jumlah');
		$val2= $this->mtransaksi->total();
		$val3= $this->mtransaksi->stok_lama();
		$total= $val1*$val2;

		
		$data = array( //array yang buat masukin data
                        'tanggal'=>$this->input->post('tanggal'),
						'total'=>$total,
						'harga'=>$val2,
						'jumlah' => $val1,
						'id_barang' => $this->input->post('id_barang'),
			
     

			);

		if ($val3 >= $val1) {
			$this->mtransaksi->a( $val1,$val3);
		$this->mtransaksi->input_data($data,'transaksi');
		echo json_encode(array("status" => TRUE));
		//$this->session->set_flashdata('announce', 'Done');
		}

		else{
		//$this->session->set_flashdata('announce', 'Stok Tidak Cukup');
			echo json_encode(array("status" => error));
		
		}
	}
	 function delete()
        {
        	$id=$_GET['id'];
		
		$this->mtransaksi->delete($id,'transaksi');
		echo json_encode(array("status" => TRUE));
		//redirect('transaksi/index'); //setelah selesai redirect ke halaman awal

        }


	
	 function ajax_edit($id)
	{
		$data = $this->mtransaksi->get_by_id($id);
		echo json_encode($data);
	}

	

	function update()
	{
		$id=$this->input->post('id');
		$stok_lama= $this->mtransaksi->stok_lama();
		$stok_lama1= $this->mtransaksi->stok_lama1();
		$jumlah_lama=$this->mtransaksi->jumlah_lama();
		$jumlah_baru= $this->input->post('jumlah');
		$emboh= $this->input->post('id_barang');
		$embo=$this->input->post('id_barang1');
		$val2= $this->mtransaksi->total();
		//$val= $this->mtransaksi->edit_dataa($id,"id_barang");
		//$val4= $this->mtransaksi->edit_dataa($id,"jumlah");
		//$val5= $this->mtransaksi->edit_dataaa($val,"stok");
		$total= $jumlah_baru*$val2;

		$data = array
	( //array yang buat masukin data
						
                        'tanggal'=>$this->input->post('tanggal'),
						'total'=>$total,
						'harga'=>$val2,
						'jumlah' => $jumlah_baru,
						'id_barang' =>  $emboh,
	);

		if ($emboh==$embo) 
		{
			$stok_baru= $stok_lama-$jumlah_baru+$jumlah_lama;

						if ($stok_lama+$jumlah_lama >= $jumlah_baru) 
					{
						$this->mtransaksi->f( $stok_baru,$stok_lama,$jumlah_lama,'master_barang');
						
						$this->mtransaksi->update($id,$data,'transaksi');
						echo json_encode(array("status" => TRUE));
					}

					else
					{	
						
						echo json_encode(array("status" => error));
					}
		}
		else
		{
			$stok_baru1= $stok_lama1+$jumlah_lama;
			$stok_baru= $stok_lama-$jumlah_baru;


					if ($stok_lama+$jumlah_lama >= $jumlah_baru) 
				{
					$this->mtransaksi->f( $stok_baru,$stok_lama,$jumlah_lama,'master_barang');
					$this->mtransaksi->g( $stok_baru1,$stok_lama,$jumlah_lama,'master_barang');
					$this->mtransaksi->update($id,$data,'transaksi');
					echo json_encode(array("status" => TRUE));
				}

				else
				{	
					
					echo json_encode(array("status" => error));
				}
		}

		
		//$this->mtransaksi->c( $val5,$val4,'master_barang',$val);
		
	
	

		

	}

}


/* End of file transaksi.php */
/* Location: ./application/controllers/transaksi.php */