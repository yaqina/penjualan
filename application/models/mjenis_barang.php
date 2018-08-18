<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mjenis_barang extends CI_Model {

	var $table='jenis_barang';

function read()
{
	return $this->db->get('jenis_barang');

}
	
    function add($data, $jenis_barang){ // buat fungsi namannya add transaksi
          
            $this->db->insert($jenis_barang,$data); // ini inti prosenya, yaitu masukin arrray data ke tabel transaksi
        }
        function delete($id){

        	$this->db->where("id",$id);
		$this->db->delete("jenis_barang");
	}
        
       	
function update($id,$data,$jenis_barang)
{
		$this->db->where("id",$id);
		$this->db->update($jenis_barang,$data);
	}	


 
 
	public function get_by_id($id)
	{
		$this->db->from($this->table);
		$this->db->where('id',$id);
		$query = $this->db->get();
 
		return $query->row();
	}



}

/* End of file mpemasok.php */
/* Location: ./application/models/mpemasok.php */