<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mmbarang extends CI_Model {

	var $table='master_barang';

	function tampilp()
	{
	return $this->db->get('pemasok');
	}	
	function tampiljb()
	{
	return $this->db->get('jenis_barang');
	}	

	function hh()
	{
		return $this->db
					->select('m.id,p.nama,j.jenis_barang, m.nama_barang, m.harga, m.stok')
					->join('pemasok p', 'p.id = m.id_pemasok')
				 	->join('jenis_barang j', 'j.id=m.id_jbarang')
					->get('master_barang m');

	}

	function add($data, $master_barang){ 
	
		$this->db->insert($master_barang,$data);
        }

    function delete($id)
    {
    	$this->db->where("id",$id);
		$this->db->delete("master_barang");
	}
	function get()
	{
	$this->db->get('master_barang');	
	}

 	function update($id,$data,$master_barang){
		$this->db->where("id",$id);
		$this->db->update($master_barang,$data);
	}	



	public function get_by_id($id)
	{
		$this->db->from($this->table);
		$this->db->where('id',$id);
		$query = $this->db->get();
 
		return $query->row();
	}




}


/* End of file mm.php */
/* Location: ./application/models/mm.php */