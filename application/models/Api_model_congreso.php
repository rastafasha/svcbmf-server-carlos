<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model_congreso extends CI_Model 
{
	
    public function insert_congreso($congresoData)
	{
		$this->db->insert('congresos', $congresoData);
		return $this->db->insert_id();
	}



	
}
