<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class api_model_miembros extends CI_Model 
{
	
	// Miembro get

public function get_miembros($featured, $recentpost)
{
	$this->db->select('*');
	$this->db->from('miembros miembro');
	$this->db->where('miembro.is_active', 1);

	$query = $this->db->get();
	return $query->result();
}

public function get_miembro($id)
{
	$this->db->select('miembro.*');
	$this->db->from('miembros miembro');
	$this->db->where('miembro.id', $id);
	$query = $this->db->get();
	return $query->row();
}


//

	// Miembro gets

    public function get_admin_miembros()
    {
        $this->db->select('*');
        $this->db->from('miembros miembro');
        $this->db->join('miembros u', 'u.id=miembro.id');
        $this->db->order_by('miembro.created_at', 'desc');
        $query = $this->db->get();
        return $query->result();
    }
    
    public function get_admin_miembro($id)
    {
        $this->db->select('miembro.*');
        $this->db->from('miembros miembro');
        $this->db->join('miembros u', 'u.id=miembro.id');
        $this->db->where('miembro.id', $id);
        $query = $this->db->get();
        return $query->row();
    }
    //


    // CRUD miembro

	public function insertMiembro($miembroData)
	{
		$this->db->insert('miembros', $miembroData);
		return $this->db->insert_id();
	}

	public function updateMiembro($id, $miembroData)
	{
		$this->db->where('id', $id);
		$this->db->update('miembros', $miembroData);
	}

	public function deleteMiembro($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('miembros');
	}
	//



	
}
