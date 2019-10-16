<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('api_model');
		$this->load->helper('url');
		$this->load->helper('text');
	}
// blog
	public function blogs()
	{
		header("Access-Control-Allow-Origin: *");

		$blogs = $this->api_model->get_blogs($featured=false, $recentpost=false);

		$posts = array();
		if(!empty($blogs)){
			foreach($blogs as $blog){

				$short_desc = strip_tags(character_limiter($blog->description, 70));
				$author = $blog->first_name.' '.$blog->last_name;

				$posts[] = array(
					'id' => $blog->id,
					'title' => $blog->title,
					'short_desc' => html_entity_decode($short_desc),
					'author' => $author,
					'image' => base_url('media/images/'.$blog->image),
					'created_at' => $blog->created_at
				);
			}
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($posts));
	}

	public function featured_blogs()
	{
		header("Access-Control-Allow-Origin: *");

		$blogs = $this->api_model->get_blogs($featured=true, $recentpost=false);

		$posts = array();
		if(!empty($blogs)){
			foreach($blogs as $blog){
				
				$short_desc = strip_tags(character_limiter($blog->description, 70));
				$author = $blog->first_name.' '.$blog->last_name;

				$posts[] = array(
					'id' => $blog->id,
					'title' => $blog->title,
					'short_desc' => html_entity_decode($short_desc),
					'author' => $author,
					'image' => base_url('media/images/'.$blog->image),
					'created_at' => $blog->created_at
				);
			}
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($posts));
	}

	public function blog($id)
	{
		header("Access-Control-Allow-Origin: *");
		
		$blog = $this->api_model->get_blog($id);

		$author = $blog->first_name.' '.$blog->last_name;

		$post = array(
			'id' => $blog->id,
			'title' => $blog->title,
			'description' => $blog->description,
			'author' => $author,
			'image' => base_url('media/images/'.$blog->image),
			'created_at' => $blog->created_at
		);
		
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($post));
	}

	public function recent_blogs()
	{
		header("Access-Control-Allow-Origin: *");

		$blogs = $this->api_model->get_blogs($featured=false, $recentpost=5);

		$posts = array();
		if(!empty($blogs)){
			foreach($blogs as $blog){
				
				$short_desc = strip_tags(character_limiter($blog->description, 70));
				$author = $blog->first_name.' '.$blog->last_name;

				$posts[] = array(
					'id' => $blog->id,
					'title' => $blog->title,
					'short_desc' => html_entity_decode($short_desc),
					'author' => $author,
					'image' => base_url('media/images/'.$blog->image),
					'created_at' => $blog->created_at
				);
			}
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($posts));
	}

	//

// directorio
public function directorios()
{
	header("Access-Control-Allow-Origin: *");

	$directorios = $this->api_model->get_directorios($featured=false, $recentpost=false);

	$posts = array();
	if(!empty($directorios)){
		foreach($directorios as $directorio){


			$posts[] = array(
				'userID' => $directorio->userID,
				'nombre' => $directorio->nombre,
				'especialidad' => $directorio->especialidad,
				'universidad' => $directorio->universidad,
				'ano' => $directorio->ano,
				'website' => $directorio->website,
				'email' => $directorio->email,
				'direccion' => $directorio->direccion,
				'estado' => $directorio->estado,
				'telefonos' => $directorio->telefonos,
				'email' => $directorio->email
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function featured_directorios()
{
	header("Access-Control-Allow-Origin: *");

	$directorios = $this->api_model->get_directorios($featured=true, $recentpost=false);

	$posts = array();
	if(!empty($directorios)){
		foreach($directorios as $directorio){
			

			$posts[] = array(
				'userID' => $directorio->userID,
				'nombre' => $directorio->nombre,
				'especialidad' => $directorio->especialidad,
				'universidad' => $directorio->universidad,
				'ano' => $directorio->ano,
				'website' => $directorio->website,
				'email' => $directorio->email,
				'direccion' => $directorio->direccion,
				'estado' => $directorio->estado,
				'telefonos' => $directorio->telefonos,
				'email' => $directorio->email
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function directorio($id)
{
	header("Access-Control-Allow-Origin: *");
	
	$directorio = $this->api_model->get_directorio($id);


	$post = array(
		'userID' => $directorio->userID,
		'nombre' => $directorio->nombre,
		'especialidad' => $directorio->especialidad,
		'universidad' => $directorio->universidad,
		'ano' => $directorio->ano,
		'website' => $directorio->website,
		'email' => $directorio->email,
		'direccion' => $directorio->direccion,
		'estado' => $directorio->estado,
		'telefonos' => $directorio->telefonos,
		'email' => $directorio->email
	);
	
	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($post));
}

public function recent_directorios()
{
	header("Access-Control-Allow-Origin: *");

	$directorios = $this->api_model->get_directorios($featured=false, $recentpost=5);

	$posts = array();
	if(!empty($directorios)){
		foreach($directorios as $directorio){
			

			$posts[] = array(
				'userID' => $directorio->userID,
				'nombre' => $directorio->nombre,
				'especialidad' => $directorio->especialidad,
				'universidad' => $directorio->universidad,
				'ano' => $directorio->ano,
				'website' => $directorio->website,
				'email' => $directorio->email,
				'direccion' => $directorio->direccion,
				'estado' => $directorio->estado,
				'telefonos' => $directorio->telefonos,
				'email' => $directorio->email
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

//

	// especialidades

	public function especialidades()
{
	header("Access-Control-Allow-Origin: *");

	$especialidades = $this->api_model->get_especialidades($featured=false, $recentpost=false);

	$posts = array();
	if(!empty($especialidades)){
		foreach($especialidades as $especialidad){


			$posts[] = array(
				'id' => $especialidad->id,
				'nombre' => $especialidad->nombre,
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function especialidad($id)
{
	header("Access-Control-Allow-Origin: *");
	
	$especialidad = $this->api_model->get_especialidad($id);


	$post = array(
		'id' => $especialidad->id,
		'nombre' => $especialidad->nombre,
	);
	
	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($post));
}

//

// estados

public function estados()
{
	header("Access-Control-Allow-Origin: *");

	$estados = $this->api_model->get_estados($featured=false, $recentpost=false);

	$posts = array();
	if(!empty($estados)){
		foreach($estados as $estado){


			$posts[] = array(
				'id' => $estado->id,
				'nombre' => $estado->nombre,
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function estado($id)
{
	header("Access-Control-Allow-Origin: *");
	
	$estado = $this->api_model->get_estado($id);


	$post = array(
		'id' => $estado->id,
		'nombre' => $estado->nombre,
	);
	
	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($post));
}

//

	// page

	public function page($slug)
	{
		header("Access-Control-Allow-Origin: *");
		
		$page = $this->api_model->get_page($slug);

		$pagedata = array(
			'id' => $page->id,
			'title' => $page->title,
			'description' => $page->description
		);
		
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($pagedata));
	}

	//
	// contact

	public function contact()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
		header('Access-Control-Allow-Headers: Accept,Accept-Language,Content-Language,Content-Type');

		$formdata = json_decode(file_get_contents('php://input'), true);

		if( ! empty($formdata)) {

			$name = $formdata['name'];
			$email = $formdata['email'];
			$phone = $formdata['phone'];
			$message = $formdata['message'];

			$contactData = array(
				'name' => $name,
				'email' => $email,
				'phone' => $phone,
				'message' => $message,
				'created_at' => date('Y-m-d H:i:s', time())
			);
			
			$id = $this->api_model->insert_contact($contactData);

			$this->sendemail($contactData);
			
			$response = array('id' => $id);
		}
		else {
			$response = array('id' => '');
		}
		
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($response));
	}

	public function sendemail($contactData)
	{
		$message = '<p>Hi, <br />Some one has submitted contact form.</p>';
		$message .= '<p><strong>Name: </strong>'.$contactData['name'].'</p>';
		$message .= '<p><strong>Email: </strong>'.$contactData['email'].'</p>';
		$message .= '<p><strong>Phone: </strong>'.$contactData['phone'].'</p>';
		$message .= '<p><strong>Name: </strong>'.$contactData['message'].'</p>';
		$message .= '<br />Thanks';

		$this->load->library('email');

		$config['protocol'] = 'sendmail';
		$config['mailpath'] = '/usr/sbin/sendmail';
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;
		$config['mailtype'] = 'html';

		$this->email->initialize($config);

		$this->email->from('mercadocreativo@gmail.com', 'RSGiTECH');
		$this->email->to('mercadocreativo@gmail.com');
		$this->email->cc('mercadocreativo@hotmail.com');
		$this->email->bcc('mercadocreativo@gmail.com');

		$this->email->subject('Contact Form');
		$this->email->message($message);

		$this->email->send();
	}
//

	// login
	public function login() 
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
		header('Access-Control-Allow-Headers: Accept,Accept-Language,Content-Language,Content-Type');

		$formdata = json_decode(file_get_contents('php://input'), true);

		$username = $formdata['username'];
		$password = $formdata['password'];

		$user = $this->api_model->login($username, $password);

		if($user) {
			$response = array(
				'user_id' => $user->id,
				'first_name' => $user->first_name,
				'last_name' => $user->last_name,
				'token' => $user->token
			);
		}
		else {
			$response = array();
		}

		$this->output
				->set_content_type('application/json')
				->set_output(json_encode($response));
	}

	//

	//CRUD Blog

	public function adminBlogs()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$blogs = $this->api_model->get_admin_blogs();
			foreach($blogs as $blog) {
				$posts[] = array(
					'id' => $blog->id,
					'title' => $blog->title,
					'image' => base_url('media/images/'.$blog->image),
					'created_at' => $blog->created_at
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($posts)); 
		}
	}

	public function adminBlog($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$blog = $this->api_model->get_admin_blog($id);

			$post = array(
				'id' => $blog->id,
				'title' => $blog->title,
				'description' => $blog->description,
				'image' => base_url('media/images/'.$blog->image),
				'is_featured' => $blog->is_featured,
				'is_active' => $blog->is_active
			);
			

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($post)); 
		}
	}

	public function createBlog()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$is_featured = $this->input->post('is_featured');
			$is_active = $this->input->post('is_active');

			$filename = NULL;

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/';
	            $config['allowed_types']        = 'gif|jpg|png|jpeg';
	            $config['max_size']             = 500;

	            $this->load->library('upload', $config);
	            if ( ! $this->upload->do_upload('image')) {

	            	$isUploadError = TRUE;

					$response = array(
						'status' => 'error',
						'message' => $this->upload->display_errors()
					);
	            }
	            else {
	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$blogData = array(
					'title' => $title,
					'user_id' => 1,
					'description' => $description,
					'image' => $filename,
					'is_featured' => $is_featured,
					'is_active' => $is_active,
					'created_at' => date('Y-m-d H:i:s', time())
				);

				$id = $this->api_model->insertBlog($blogData);

				$response = array(
					'status' => 'success'
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function updateBlog($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$blog = $this->api_model->get_admin_blog($id);
			$filename = $blog->image;

			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$is_featured = $this->input->post('is_featured');
			$is_active = $this->input->post('is_active');

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/';
	            $config['allowed_types']        = 'gif|jpg|png|jpeg';
	            $config['max_size']             = 500;

	            $this->load->library('upload', $config);
	            if ( ! $this->upload->do_upload('image')) {

	            	$isUploadError = TRUE;

					$response = array(
						'status' => 'error',
						'message' => $this->upload->display_errors()
					);
	            }
	            else {
	   
					if($blog->image && file_exists(FCPATH.'media/images/'.$blog->image))
					{
						unlink(FCPATH.'media/images/'.$blog->image);
					}

	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$blogData = array(
					'title' => $title,
					'user_id' => 1,
					'description' => $description,
					'image' => $filename,
					'is_featured' => $is_featured,
					'is_active' => $is_active
				);

				$this->api_model->updateBlog($id, $blogData);

				$response = array(
					'status' => 'success'
				);
           	}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function deleteBlog($id)
	{
		header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$blog = $this->api_model->get_admin_blog($id);

			if($blog->image && file_exists(FCPATH.'media/images/'.$blog->image))
			{
				unlink(FCPATH.'media/images/'.$blog->image);
			}

			$this->api_model->deleteBlog($id);

			$response = array(
				'status' => 'success'
			);

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}
	//

	//CRUD Directorio

	public function adminDirectorios()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$directorios = $this->api_model->get_admin_directorios();
			foreach($directorios as $directorio) {
				$posts[] = array(
					'userID' => $directorio->userID,
					'nombre' => $directorio->nombre,
					'especialidad' => $directorio->especialidad,
					'universidad' => $directorio->universidad,
					'ano' => $directorio->ano,
					'website' => $directorio->website,
					'email' => $directorio->email,
					'direccion' => $directorio->direccion,
					'estado' => $directorio->estado,
					'telefonos' => $directorio->telefonos,
					'email' => $directorio->email
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($posts)); 
		}
	}

	public function adminDirectorio($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$directorio = $this->api_model->get_admin_directorio($id);

			$post = array(
				'userID' => $directorio->userID,
				'nombre' => $directorio->nombre,
				'especialidad' => $directorio->especialidad,
				'universidad' => $directorio->universidad,
				'ano' => $directorio->ano,
				'website' => $directorio->website,
				'email' => $directorio->email,
				'direccion' => $directorio->direccion,
				'estado' => $directorio->estado,
				'telefonos' => $directorio->telefonos,
				'email' => $directorio->email
			);
			

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($post)); 
		}
	}

	public function createDirectorio()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$nombre = $this->input->post('nombre');
			$especialidad = $this->input->post('especialidad');
			$universidad = $this->input->post('universidad');
			$ano = $this->input->post('ano');
			$website = $this->input->post('website');
			$email = $this->input->post('email');
			$direccion = $this->input->post('direccion');
			$estado = $this->input->post('estado');
			$telefonos = $this->input->post('telefonos');


			if( ! $isUploadError) {
	        	$directorioData = array(
					'userID' => $directorio->userID,
					'nombre' => $directorio->nombre,
					'especialidad' => $directorio->especialidad,
					'universidad' => $directorio->universidad,
					'ano' => $directorio->ano,
					'website' => $directorio->website,
					'email' => $directorio->email,
					'direccion' => $directorio->direccion,
					'estado' => $directorio->estado,
					'telefonos' => $directorio->telefonos,
					'email' => $directorio->email
				);

				$id = $this->api_model->insertDirectorio($directorioData);

				$response = array(
					'status' => 'success'
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function updateDirectorio($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$directorio = $this->api_model->get_admin_directorio($id);

			$nombre = $this->input->post('nombre');
			$especialidad = $this->input->post('especialidad');
			$universidad = $this->input->post('universidad');
			$ano = $this->input->post('ano');
			$website = $this->input->post('website');
			$email = $this->input->post('email');
			$direccion = $this->input->post('direccion');
			$estado = $this->input->post('estado');
			$telefonos = $this->input->post('telefonos');

			$isUploadError = FALSE;

			

			if( ! $isUploadError) {
	        	$directorioData = array(
					'userID' => $directorio->userID,
					'nombre' => $directorio->nombre,
					'especialidad' => $directorio->especialidad,
					'universidad' => $directorio->universidad,
					'ano' => $directorio->ano,
					'website' => $directorio->website,
					'email' => $directorio->email,
					'direccion' => $directorio->direccion,
					'estado' => $directorio->estado,
					'telefonos' => $directorio->telefonos,
					'email' => $directorio->email
				);

				$this->api_model->updateDirectorio($id, $directorioData);

				$response = array(
					'status' => 'success'
				);
           	}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function deleteDirectorio($id)
	{
		header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$directorio = $this->api_model->get_admin_directorio($id);


			$this->api_model->deleteDirectorio($id);

			$response = array(
				'status' => 'success'
			);

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	//

	//CRUD Especialidad

	public function adminEspecialidades()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$especialidades = $this->api_model->get_admin_especialidades();
			foreach($especialidades as $especialidad) {
				$posts[] = array(
					'id' => $especialidad->id,
					'nombre' => $especialidad->nombre,
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($posts)); 
		}
	}

	public function adminEspecialidad($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$especialidad = $this->api_model->get_admin_especialidad($id);

			$post = array(
				'id' => $especialidad->id,
				'nombre' => $especialidad->nombre,
			);
			

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($post)); 
		}
	}

	//CRUD Estado

	public function adminEstados()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$estados = $this->api_model->get_admin_estados();
			foreach($estados as $estado) {
				$posts[] = array(
					'id' => $estado->id,
					'nombre' => $estado->nombre,
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($posts)); 
		}
	}

	public function adminEstado($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$estado = $this->api_model->get_admin_estado($id);

			$post = array(
				'id' => $estado->id,
				'nombre' => $estado->nombre,
			);
			

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($post)); 
		}
	}

	
	
}
