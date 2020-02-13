<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model_congresopago extends CI_Model 
{
	
	
// blog Get
public function get_congresos($featured, $recentpost)
{
    $this->db->select('congreso.*');
    $this->db->from('congresos congreso');
    $this->db->where('congreso.is_active', 1);

    if($featured) {
        $this->db->where('congreso.is_featured', 1);
    }
    if($recentpost){ 
        $this->db->order_by('congreso.createdAt', 'asc');
        $this->db->limit($recentpost);
    }
    $query = $this->db->get();
    return $query->result();
}

public function get_congreso($id)
{
    $this->db->select('congreso.*');
    $this->db->from('congresos congreso');
    $this->db->where('congreso.is_active', 1);
    $this->db->where('congreso.id', $id);
    $query = $this->db->get();
    return $query->row();
}
//

//blog gets
public function get_admin_congresos()
{
    $this->db->select('congreso.*');
    $this->db->from('congresos congreso');
    $this->db->order_by('congreso.createdAt', 'asc');
    $query = $this->db->get();
    return $query->result();
}

public function get_admin_congreso($id)
{
    $this->db->select('congreso.*');
    $this->db->from('congresos congreso');
    $this->db->where('congreso.id', $id);
    $query = $this->db->get();
    return $query->row();
}
//





// CRUD congreso


	public function deleteCongreso($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('congresos');
    }
    
    public function insertCongreso($congresoData)
	{
		$this->db->insert('congresos', $congresoData);
		return $this->db->insert_id();
	}
//




	
}
