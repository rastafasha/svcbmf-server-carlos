<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model_formacion extends CI_Model 
{
	
	
// formacion Get
public function get_formacions($featured, $recentpost)
{
    $this->db->select('formacion.*');
    $this->db->from('formacions formacion');
    $this->db->where('formacion.is_active', 1);

    if($featured) {
        $this->db->where('formacion.is_featured', 1);
    }
    if($recentpost){ 
        $this->db->order_by('formacion.created_at', 'asc');
        $this->db->limit($recentpost);
    }
    $query = $this->db->get();
    return $query->result();
}

public function get_formacion($id)
{
    $this->db->select('formacion.*');
    $this->db->from('formacions formacion');
    $this->db->where('formacion.is_active', 1);
    $this->db->where('formacion.id', $id);
    $query = $this->db->get();
    return $query->row();
}
//

//formacion gets
public function get_admin_formacions()
{
    $this->db->select('formacion.*');
    $this->db->from('formacions formacion');
    $query = $this->db->get();
    return $query->result();
}

public function get_admin_formacion($id)
{
    $this->db->select('formacion.*');
    $this->db->from('formacions formacion');
    $this->db->where('formacion.id', $id);
    $query = $this->db->get();
    return $query->row();
}
//





// CRUD Formacion

public function insertFormacion($formacionData)
	{
		$this->db->insert('formacions', $formacionData);
		return $this->db->insert_id();
	}

	public function updateFormacion($id, $formacionData)
	{
		$this->db->where('id', $id);
		$this->db->update('formacions', $formacionData);
	}

	public function deleteFormacion($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('formacions');
	}
//



	
}
