<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mpemasok extends CI_Model {

	var $table='pemasok';

function read()
{
	return $this->db->get('pemasok');

}
	
 function add($data, $pemasok){ // buat fungsi namannya add transaksi
          
            $this->db->insert($pemasok,$data); // ini inti prosenya, yaitu masukin arrray data ke tabel transaksi
        }
  
function delete($id){
		$this->db->where("id",$id);
		$this->db->delete("pemasok");
	}
	function update($id,$data,$pemasok){
		$this->db->where("id",$id);
		$this->db->update($pemasok,$data);
	}	



 
 
	public function get_by_id($id)
	{
		$this->db->from($this->table);
		$this->db->where('id',$id);
		$query = $this->db->get();
 
		return $query->row();
	}

	

}

