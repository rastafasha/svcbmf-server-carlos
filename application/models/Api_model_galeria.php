<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model_galeria extends CI_Model 
{
	
	// galeria get
	public function get_galerias($featured, $recentpost)
	{
		$this->db->select('galeria.*');
		$this->db->from('galerias galeria');

		$query = $this->db->get();
		return $query->result();
	}

	public function get_galeria($id)
	{
		$this->db->select('galeria.*');
		$this->db->from('galerias galeria');
		$this->db->where('galeria.id', $id);
		$query = $this->db->get();
		return $query->row();
	}
	//


	// galeria gets

	public function get_admin_galerias()
	{
		$this->db->select('galeria.*');
		$this->db->from('galerias galeria');

		$query = $this->db->get();
		return $query->result();
	}

	public function get_admin_galeria($id)
	{
		$this->db->select('galeria.*');
		$this->db->from('galerias galeria');
		$this->db->where('galeria.id', $id);
		$query = $this->db->get();
		return $query->row();
	}
	//



	// CRUD Galeria

	public function insertGaleria($galeriaData)
	{
		$this->db->insert('galerias', $galeriaData);
		return $this->db->insert_id();
	}

	public function updateGaleria($id, $galeriaData)
	{
		$this->db->where('id', $id);
		$this->db->update('galerias', $galeriaData);
	}

	public function deleteGaleria($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('galerias');
	}
    //
    
    
	
	



	
}
