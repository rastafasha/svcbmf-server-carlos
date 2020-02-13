<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model extends CI_Model 
{
	
	// pages 

	public function get_page($slug)
	{
		$this->db->where('slug', $slug);
		$query = $this->db->get('pages');
		return $query->row();
	}
	// 

	
	// login

	public function login($username, $password) 
	{
		$this->db->where('username', $username);
		$this->db->where('password', md5($password));
		$query = $this->db->get('users');

		if($query->num_rows() == 1) {
			return $query->row();
		}
	}
	//
	// login

	public function loginmiembro($username, $password) 
	{
		$this->db->where('username', $username);
		$this->db->where('password', md5($password));
		$query = $this->db->get('miembros');

		if($query->num_rows() == 1) {
			return $query->row();
		}
	}
	//



	// token

	public function checkToken($token)
	{
		$this->db->where('token', $token);
		$query = $this->db->get('users');

		if($query->num_rows() == 1) {
			return true;
		}
		return false;
	}

	//
	// token

	public function checkTokenMiembro($token)
	{
		$this->db->where('token', $token);
		$query = $this->db->get('miembros');

		if($query->num_rows() == 1) {
			return true;
		}
		return false;
	}

	//



	
}
