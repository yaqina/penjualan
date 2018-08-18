<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mtransaksi extends CI_Model {

	var $table='transaksi';

		
	function input_data($data,$transaksi){
		$this->db->insert($transaksi,$data);
	}

       


        function tt()
	{

	return $this->db
				->select("t.id,m.nama_barang,t.jumlah,t.harga,t.total,m.stok,t.tanggal")
				->join('master_barang m', 'm.id = t.id_barang')
				->get('transaksi t');
	}	

	function total()
	{
	$val = $this->input->post('id_barang');
	$query = $this->db->select('harga')->from('master_barang')->where('id', $val)->get();
    return $query->row()->harga;
	}
	
	
	function stok_lama()
	{
		$val= $this->input->post('id_barang');
		$q= $this->db->select('stok')->from('master_barang')->where('id',$val)->get();
		return $q->row()->stok;
	}
	function stok_lama1()
	{
		$val= $this->input->post('id_barang1');
		$q= $this->db->select('stok')->from('master_barang')->where('id',$val)->get();
		return $q->row()->stok;
	}
	function jumlah_lama()
	{
		$val= $this->input->post('id');
		$q= $this->db->select('jumlah')->from('transaksi')->where('id',$val)->get();
		return $q->row()->jumlah;
	}
	function e()
	{
		$val= $this->input->post('id_barang');
		$q= $this->db->select('stok')->from('master_barang')->where('id',$val)->get();
		return $q->row()->stok;
	}
	
		
	
	function tampilp()
	{
	return $this->db->get('master_barang');
	}	
	
	function a($val3,$val1)
	{
		$sisa= $val1-$val3;
		$data= array(
			'stok' =>$sisa ,
		 );
		$val = $this->input->post('id_barang');
		$this->db->where('id', $val)
				->update('master_barang', $data);

	}
	function f($stok_baru,$stok_lama,$jumlah_lama)
	{
		$val = $this->input->post('id_barang');
	
		$data= array(
			'stok' =>$stok_baru ,
		 );
		
		$this->db->where('id', $val)
				->update('master_barang', $data);

	}
	function g($stok_baru1,$stok_lama,$jumlah_lama)
	{
		$val = $this->input->post('id_barang1');
	
		$data= array(
			'stok' =>$stok_baru1 ,
		 );
		
		$this->db->where('id', $val)
				->update('master_barang', $data);

	}
	function c($val5,$val4,$master_barang,$val)
	{

		$sisa= $val4+$val5;
		$data = array( //array yang buat masukin da	
			'stok' =>$sisa ,
			);
		
		$this->db->where('id', $val)
				->update('master_barang', $data);


	}
	 function delete($id)
    {
    	$this->db->where("id",$id);
		$this->db->delete("transaksi");
	}

	

	function update($id,$data,$transaksi){
		$this->db->where("id",$id);
		$this->db->update($transaksi,$data);
	}	





	public function get_by_id($id)
	{
		$this->db->from($this->table);
		$this->db->where('id',$id);
		$query = $this->db->get();
 
		return $query->row();
	}


	
 function edit_data($where,$transaksi){		
	return $this->db->get_where($transaksi,$where);
}


function edit_dataa($id,$output){		
	$this->load->library('database_library');
		$this->database_library->pake_table('transaksi');
		$isdata=$this->database_library->ambil_satu_data('id',$id,$output);
		if(!empty($isdata))
		{
			return $isdata;
		}else{
			return null;
		}
}

function edit_dataaa($id,$output){		
	$this->load->library('database_library');
		$this->database_library->pake_table('master_barang');
		$isdata=$this->database_library->ambil_satu_data('id',$id,$output);
		if(!empty($isdata))
		{
			return $isdata;
		}else{
			return null;
		}
}
	
	


}

/* End of file mtransaksi.php */
/* Location: ./application/models/mtransaksi.php */