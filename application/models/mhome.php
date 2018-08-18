
	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Mhome extends CI_Model {
	
		public function getpemCount()
	{
		return $this->db->count_all('pemasok');
	}

	public function getjbCount()
	{
		return $this->db->count_all('jenis_barang');
	}
	public function getmbCount()
	{
		return $this->db->count_all('master_barang');
	}
	public function getTrCount()
	{
		return $this->db->count_all('transaksi');
	}
	
	

	
	}
	
	/* End of file mhome.php */
	/* Location: ./application/models/mhome.php */
?>