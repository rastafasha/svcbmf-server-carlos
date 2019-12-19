<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model_afiliaciones extends CI_Model 
{
	
	
// Afiliaciones Get
public function get_afiliaciones($recentpost)
{
    $this->db->select('afiliacione.*');
    $this->db->from('afiliaciones afiliacione');

    if($recentpost){ 
        $this->db->order_by('afiliacione.created_at', 'asc');
        $this->db->limit($recentpost);
    }
    $query = $this->db->get();
    return $query->result();
}

public function get_afiliacione($id)
{
    $this->db->select('afiliacione.*');
    $this->db->from('afiliaciones afiliacione');
    $this->db->where('afiliacione.id', $id);
    $query = $this->db->get();
    return $query->row();
}
//

//Afiliaciones gets
public function get_admin_afiliaciones()
{
    $this->db->select('afiliacione.*');
    $this->db->from('afiliaciones afiliacione');
    $this->db->order_by('afiliacione.created_at', 'asc');
    $query = $this->db->get();
    return $query->result();
}

public function get_admin_afiliacione($id)
{
    $this->db->select('afiliacione.*');
    $this->db->from('afiliaciones afiliacione');
    $this->db->where('afiliacione.id', $id);
    $query = $this->db->get();
    return $query->row();
}
//





// CRUD Afliaciones

public function insertAfiliacione($afiliacioneData)
	{
		$this->db->insert('afiliaciones', $afiliacioneData);
		return $this->db->insert_id();
	}

	public function updateAfiliacione($id, $afiliacioneData)
	{
		$this->db->where('id', $id);
		$this->db->update('afiliaciones', $afiliacioneData);
	}

	public function deleteAfiliacione($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('afiliaciones');
	}
//



	
}
