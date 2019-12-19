<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model_documentos extends CI_Model 
{
	
		
	
	// documento Get
	public function get_documentos($featured, $recentpost)
	{
		$this->db->select('documento.*');
		$this->db->from('documentos documento');

		$query = $this->db->get();
		return $query->result();
	}

	public function get_documento($id)
	{
		$this->db->select('documento.*');
		$this->db->from('documentos documento');
		$this->db->where('documento.id', $id);
		$query = $this->db->get();
		return $query->row();
	}
	//


	// documento gets

	public function get_admin_documentos()
	{
		$this->db->select('documento.*');
		$this->db->from('documentos documento');

		$query = $this->db->get();
		return $query->result();
	}

	public function get_admin_documento($id)
	{
		$this->db->select('documento.*');
		$this->db->from('documentos documento');
		$this->db->where('documento.id', $id);
		$query = $this->db->get();
		return $query->row();
	}
    //
    
    // CRUD documento

	public function insertDocumento($documentoData)
	{
		$this->db->insert('documentos', $documentoData);
		return $this->db->insert_id();
	}

	public function updateDocumento($id, $documentoData)
	{
		$this->db->where('id', $id);
		$this->db->update('documentos', $documentoData);
	}

	public function deleteDocumento($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('documentos');
	}
	//

	


	
}
