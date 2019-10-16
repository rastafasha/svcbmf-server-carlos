<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model extends CI_Model 
{
	// blog
	public function get_blogs($featured, $recentpost)
	{
		$this->db->select('blog.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('blogs blog');
		$this->db->join('users u', 'u.id=blog.user_id');
		$this->db->join('categories cat', 'cat.id=blog.category_id', 'left');
		$this->db->where('blog.is_active', 1);

		if($featured) {
			$this->db->where('blog.is_featured', 1);
		}
		if($recentpost){
			$this->db->order_by('blog.created_at', 'desc');
			$this->db->limit($recentpost);
		}
		$query = $this->db->get();
		return $query->result();
	}

	public function get_blog($id)
	{
		$this->db->select('blog.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('blogs blog');
		$this->db->join('users u', 'u.id=blog.user_id');
		$this->db->join('categories cat', 'cat.id=blog.category_id', 'left');
		$this->db->where('blog.is_active', 1);
		$this->db->where('blog.id', $id);
		$query = $this->db->get();
		return $query->row();
	}
	//

	// directorio
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
		// $this->db->where('directorio.id', $id);
		$query = $this->db->get();
		return $query->row();
	}
	//
	// Especialidades

	public function get_especialidades()
	{
		$query = $this->db->get('especialidades');
		return $query->result();
	}

	//

	// Estados

	public function get_estados()
	{
		$query = $this->db->get('estados');
		return $query->result();
	}

	//

	// pages 

	public function get_page($slug)
	{
		$this->db->where('slug', $slug);
		$query = $this->db->get('pages');
		return $query->row();
	}
	// 
	// contact
	public function insert_contact($contactData)
	{
		$this->db->insert('contacts', $contactData);
		return $this->db->insert_id();
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
	// blog

	public function get_admin_blogs()
	{
		$this->db->select('blog.*, u.first_name, u.last_name');
		$this->db->from('blogs blog');
		$this->db->join('users u', 'u.id=blog.user_id');
		$this->db->order_by('blog.created_at', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_admin_blog($id)
	{
		$this->db->select('blog.*, u.first_name, u.last_name');
		$this->db->from('blogs blog');
		$this->db->join('users u', 'u.id=blog.user_id');
		$this->db->where('blog.id', $id);
		$query = $this->db->get();
		return $query->row();
	}
	//

	// directorio

	public function get_admin_directorios()
	{
		$this->db->select('directorio.*');
		$this->db->from('directorios directorio');
		$this->db->order_by('directorio.estado', 'asc');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_admin_directorio($id)
	{
		$this->db->select('directorio.*');
		$this->db->from('directorios directorio');
		// $this->db->where('directorio.estado', $estado);
		$query = $this->db->get();
		return $query->row();
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

	// CRUD blog

	public function insertBlog($blogData)
	{
		$this->db->insert('blogs', $blogData);
		return $this->db->insert_id();
	}

	public function updateBlog($id, $blogData)
	{
		$this->db->where('id', $id);
		$this->db->update('blogs', $blogData);
	}

	public function deleteBlog($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('blogs');
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
}
