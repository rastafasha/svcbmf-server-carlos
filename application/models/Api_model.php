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


	// Users get

public function get_users($featured, $recentpost)
{
	$this->db->select('*');
	$this->db->from('users user');
	$this->db->where('user.is_active', 1);

	$query = $this->db->get();
	return $query->result();
}

public function get_user($id)
{
	$this->db->select('user.*');
	$this->db->from('users user');
	$this->db->where('user.id', $id);
	$query = $this->db->get();
	return $query->row();
}


//

	// User gets

    public function get_admin_users()
    {
        $this->db->select('*');
        $this->db->from('users user');
        $this->db->join('users u', 'u.id=user.id');
        $this->db->order_by('user.created_at', 'desc');
        $query = $this->db->get();
        return $query->result();
    }
    
    public function get_admin_user($id)
    {
        $this->db->select('user.*');
        $this->db->from('users user');
        $this->db->join('users u', 'u.id=user.id');
        $this->db->where('user.id', $id);
        $query = $this->db->get();
        return $query->row();
    }
    //


    // CRUD usuario

	public function insertUser($userData)
	{
		$this->db->insert('users', $userData);
		return $this->db->insert_id();
	}

	public function updateUser($id, $userData)
	{
		$this->db->where('id', $id);
		$this->db->update('users', $userData);
	}

	public function deleteUser($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('users');
	}
	//





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



	
// blog Get
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
        $this->db->order_by('blog.created_at', 'asc');
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

//blog gets
public function get_admin_blogs()
{
    $this->db->select('blog.*, u.first_name, u.last_name');
    $this->db->from('blogs blog');
    $this->db->join('users u', 'u.id=blog.user_id');
    $this->db->order_by('blog.created_at', 'asc');
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


	// bancuadrado Get
	public function get_bancuadrados($featured, $recentpost)
	{
		$this->db->select('bancuadrado.*');
		$this->db->from('bancuadrados bancuadrado');

		$query = $this->db->get();
		return $query->result();
	}

	public function get_bancuadrado($id)
	{
		$this->db->select('bancuadrado.*');
		$this->db->from('bancuadrados bancuadrado');
		$this->db->where('bancuadrado.id', $id);
		$query = $this->db->get();
		return $query->row();
	}
	//


	// bancuadrado gets

	public function get_admin_bancuadrados()
	{
		$this->db->select('bancuadrado.*');
		$this->db->from('bancuadrados bancuadrado');

		$query = $this->db->get();
		return $query->result();
	}

	public function get_admin_bancuadrado($id)
	{
		$this->db->select('bancuadrado.*');
		$this->db->from('bancuadrados bancuadrado');
		$this->db->where('bancuadrado.id', $id);
		$query = $this->db->get();
		return $query->row();
	}
    //
    
    // CRUD bancuadrado

	public function insertBancuadrado($bancuadradoData)
	{
		$this->db->insert('bancuadrados', $bancuadradoData);
		return $this->db->insert_id();
	}

	public function updateBancuadrado($id, $bancuadradoData)
	{
		$this->db->where('id', $id);
		$this->db->update('bancuadrados', $bancuadradoData);
	}

	public function deleteBancuadrado($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('bancuadrados');
	}
	//




	// horizontal Get
	public function get_banhorizontals($featured, $recentpost)
	{
		$this->db->select('banhorizontal.*');
		$this->db->from('banhorizontals banhorizontal');

		$query = $this->db->get();
		return $query->result();
	}

	public function get_banhorizontal($id)
	{
		$this->db->select('banhorizontal.*');
		$this->db->from('banhorizontals banhorizontal');
		$this->db->where('banhorizontal.id', $id);
		$query = $this->db->get();
		return $query->row();
	}
	//


	// horizontal gets

	public function get_admin_banhorizontals()
	{
		$this->db->select('banhorizontal.*');
		$this->db->from('banhorizontals banhorizontal');

		$query = $this->db->get();
		return $query->result();
	}

	public function get_admin_banhorizontal($id)
	{
		$this->db->select('banhorizontal.*');
		$this->db->from('banhorizontals banhorizontal');
		$this->db->where('banhorizontal.id', $id);
		$query = $this->db->get();
		return $query->row();
	}
    //
    
    // CRUD horizontal

	public function insertBanhorizontal($banhorizontalData)
	{
		$this->db->insert('banhorizontals', $banhorizontalData);
		return $this->db->insert_id();
	}

	public function updateBanhorizontal($id, $banhorizontalData)
	{
		$this->db->where('id', $id);
		$this->db->update('banhorizontals', $banhorizontalData);
	}

	public function deleteBanhorizontal($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('banhorizontals');
	}
	//

	
	
// horizontal Get
public function get_banverticals($featured, $recentpost)
{
	$this->db->select('banvertical.*');
	$this->db->from('banverticals banvertical');

	$query = $this->db->get();
	return $query->result();
}

public function get_banvertical($id)
{
	$this->db->select('banvertical.*');
	$this->db->from('banverticals banvertical');
	$this->db->where('banvertical.id', $id);
	$query = $this->db->get();
	return $query->row();
}
//


// horizontal gets

public function get_admin_banverticals()
{
	$this->db->select('banvertical.*');
	$this->db->from('banverticals banvertical');

	$query = $this->db->get();
	return $query->result();
}

public function get_admin_banvertical($id)
{
	$this->db->select('banvertical.*');
	$this->db->from('banverticals banvertical');
	$this->db->where('banvertical.id', $id);
	$query = $this->db->get();
	return $query->row();
}
//

// CRUD horizontal

public function insertBanvertical($banverticalData)
{
	$this->db->insert('banverticals', $banverticalData);
	return $this->db->insert_id();
}

public function updateBanvertical($id, $banverticalData)
{
	$this->db->where('id', $id);
	$this->db->update('banverticals', $banverticalData);
}

public function deleteBanvertical($id)
{
	$this->db->where('id', $id);
	$this->db->delete('banverticals');
}
//



	
	
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
	
	



    // contact get
	public function get_contacts()
	{
		$this->db->select('contact.*');
		$this->db->from('contacts contact');

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
	$this->db->select('contact.*');
	$this->db->from('contacts contact');
	$this->db->order_by('contact.created_at', 'asc');
	$query = $this->db->get();
	return $query->result();
}

public function get_admin_contact($id)
{
	$this->db->select('contact.*');
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
