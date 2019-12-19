<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model_revista extends CI_Model 
{
	
	
	// revista get
	public function get_revistas($featured, $recentpost)
	{
		$this->db->select('revista.*');
		$this->db->from('revistas revista');

		
		$query = $this->db->get();
		return $query->result();
	}

	public function get_revista($id)
	{
		$this->db->select('revista.*');
		$this->db->from('revistas revista');
		$query = $this->db->get();
		return $query->row();
	}
    //
    

	// revista gets

	public function get_admin_revistas()
	{
		$this->db->select('revista.*');
		$this->db->from('revistas revista');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_admin_revista($id)
	{
		$this->db->select('revista.*');
		$this->db->from('revistas revista');
		$query = $this->db->get();
		return $query->row();
	}
    //
    

	// CRUD Revista

	public function insertRevista($revistaData)
	{
		$this->db->insert('revistas', $revistaData);
		return $this->db->insert_id();
	}

	public function updateRevista($id, $revistaData)
	{
		$this->db->where('id', $id);
		$this->db->update('revistas', $revistaData);
	}

	public function deleteRevista($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('revistas');
	}
	//




	
}
