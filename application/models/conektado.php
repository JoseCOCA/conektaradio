<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conektado extends CI_Model {

	public function get($table)
	{
		$query = $this->db->get($table);
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
					$data[] = $row;
			}
				return $data;
		}else{
			return NULL;
		}
	}
	
}

/* End of file conektado.php */
/* Location: ./application/models/conektado.php */