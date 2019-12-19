<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model_contact extends CI_Model 
{
	
	

    // contact get
	public function get_contacts($featured, $recentpost)
	{
		$this->db->select('contact.*');
		$this->db->from('contacts contact');

		if($featured) {
			$this->db->where('contact.is_featured', 1);
		}
		if($recentpost){ 
			$this->db->order_by('contact.created_at', 'asc');
			$this->db->limit($recentpost);
		}
		$query = $this->db->get();
		return $query->result();
	}

	public function get_contact($id)
	{
		$this->db->select('contact.*');
		$this->db->from('contacts contact');
		$this->db->where('contact.id', $id);
		$query = $this->db->get();
		return $query->row();
	}


    //contacto gets
public function get_admin_contacts()
{
	$this->db->select('contact.*, u.first_name, u.last_name');
	$this->db->from('contacts contact');
	$this->db->join('users u', 'u.id=contact.user_id');
	$this->db->order_by('contact.created_at', 'asc');
	$query = $this->db->get();
	return $query->result();
}

public function get_admin_contact($id)
{
	$this->db->select('contact.*, u.first_name, u.last_name');
	$this->db->from('contacts contact');
	$this->db->join('users u', 'u.id=contact.user_id');
	$this->db->where('contact.id', $id);
	$query = $this->db->get();
	return $query->row();
}
//

//crud mail contact
public function insert_contact($contactData)
{
    $this->db->insert('contacts', $contactData);
    return $this->db->insert_id();
}

public function deleteContact($id)
{
	$this->db->where('id', $id);
	$this->db->delete('contacts');
}
//






	
}
