	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Database_library {

	private $table_name;

		

	function pake_table($table)

	{			

			$CI=& get_instance();

			

			$CI->table_name=$table;

			return true;

		

	}
	
		function ambil_satu_data($field,$kode,$output)

	{

		$CI=& get_instance();

		

		$CI->db->where($field, $kode);



		if($this->pake_table($CI->table_name)==true)

		{	

			$sql = $CI->db->get($CI->table_name);

			if($sql->num_rows() > 0){							

				return $sql->row()->$output;

			} else {

				return null;

			}

		}

	}
	
		
	
	}
	
	/* End of file database_library.php */
	/* Location: ./application/libraries/database_library.php */
	
?>