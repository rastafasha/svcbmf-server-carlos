<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model_directorio extends CI_Model 
{
	
	
	// directorio Get
	public function get_directorios($featured, $recentpost)
	{
		$this->db->select('directorio.*');
		$this->db->from('directorios directorio');

		$query = $this->db->get();
		return $query->result();
	}

	public function get_directorio($id)
	{
		$this->db->select('directorio.*');
		$this->db->from('directorios directorio');
		$this->db->where('directorio.id', $id);
		$query = $this->db->get();
		return $query->row();
	}
	//


	// directorio gets

	public function get_admin_directorios()
	{
		$this->db->select('directorio.*');
		$this->db->from('directorios directorio');

		$query = $this->db->get();
		return $query->result();
	}

	public function get_admin_directorio($id)
	{
		$this->db->select('directorio.*');
		$this->db->from('directorios directorio');
		$this->db->where('directorio.id', $id);
		$query = $this->db->get();
		return $query->row();
	}
    //
    
    // CRUD directorio

	public function insertDirectorio($directorioData)
	{
		$this->db->insert('directorios', $directorioData);
		return $this->db->insert_id();
	}

	public function updateDirectorio($id, $directorioData)
	{
		$this->db->where('id', $id);
		$this->db->update('directorios', $directorioData);
	}

	public function deleteDirectorio($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('directorios');
	}
	//

	// resultados get

	public function search_products($text)
	{
		$this->db->select('*');
		$this->db->from('doctores doctore');
		$this->db->like('nombre', $text, 'both');
		$this->db->or_like('estado', $text, 'both');
		$this->db->or_like('especialidad', $text, 'both');

		$query = $this->db->get();
		return $query->result();
	}

	//
	



	
}
