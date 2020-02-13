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

	//Users

	public function users()
	{
		header("Access-Control-Allow-Origin: *");

		$users = $this->api_model->get_users($featured=false, $recentpost=false);

		$posts = array();
		if(!empty($users)){
			foreach($users as $user){

				$posts[] = array(
					'id' => $user->id,
					'username' => $user->username,
					'password' => $user->password,
					'first_name' => $user->first_name,
					'last_name' => $user->last_name,
					'role' => $user->role,
					'is_active' => $user->is_active,
					'token' => $user->token,
					'image' => base_url('media/images/users/'.$user->image),
					'created_at' => $user->created_at
				);
			}
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($posts));
	}

	public function featured_users()
	{
		header("Access-Control-Allow-Origin: *");

		$users = $this->api_model->get_users($featured=true, $recentpost=false);

		$posts = array();
		if(!empty($users)){
			foreach($users as $user){
				

				$posts[] = array(
					'id' => $user->id,
					'username' => $user->username,
					'password' => $user->password,
					'first_name' => $user->first_name,
					'last_name' => $user->last_name,
					'role' => $user->role,
					'is_active' => $user->is_active,
					'token' => $user->token,
					'image' => base_url('media/images/users/'.$user->image),
					'created_at' => $user->created_at
				);
			}
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($posts));
	}

	public function user($id)
	{
		header("Access-Control-Allow-Origin: *");
		
		$user = $this->api_model->get_user($id);

		$post = array(
			'id' => $user->id,
			'username' => $user->username,
			'password' => $user->password,
			'first_name' => $user->first_name,
			'last_name' => $user->last_name,
			'role' => $user->role,
			'is_active' => $user->is_active,
			'token' => $user->token,
			'image' => base_url('media/images/users/'.$user->image),
			'created_at' => $user->created_at
		);
		
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($post));
	}

	public function recent_users()
	{
		header("Access-Control-Allow-Origin: *");

		$users = $this->api_model->get_users($featured=false, $recentpost=5);

		$posts = array();
		if(!empty($users)){
			foreach($users as $user){
				

				$posts[] = array(
					'id' => $user->id,
					'username' => $user->username,
					'password' => $user->password,
					'first_name' => $user->first_name,
					'last_name' => $user->last_name,
					'role' => $user->role,
					'is_active' => $user->is_active,
					'token' => $user->token,
					'image' => base_url('media/images/users/'.$user->image),
					'created_at' => $user->created_at
				);
			}
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($posts));
	}

	//


	//CRUD users

	public function adminUsers()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$users = $this->api_model->get_admin_users();
			foreach($users as $user) {
				$posts[] = array(
					'id' => $user->id,
					'username' => $user->username,
					'password' => $user->password,
					'first_name' => $user->first_name,
					'last_name' => $user->last_name,
					'role' => $user->role,
					'is_active' => $user->is_active,
					'token' => $user->token,
					'image' => base_url('media/images/users/'.$user->image),
					'created_at' => $user->created_at
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($posts)); 
		}
	}

	public function adminUser($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$user = $this->api_model->get_admin_user($id);

			$post = array(
				'id' => $user->id,
					'username' => $user->username,
					'password' => $user->password,
					'first_name' => $user->first_name,
					'last_name' => $user->last_name,
					'role' => $user->role,
					'is_active' => $user->is_active,
					'token' => $user->token,
					'image' => base_url('media/images/users/'.$user->image),
					'created_at' => $user->created_at,
				'is_active' => $user->is_active
			);
			

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($post)); 
		}
	}

	public function createUser()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$first_name = $this->input->post('first_name');
			$last_name = $this->input->post('last_name');
			$role = $this->input->post('role');
			$is_active = $this->input->post('is_active');

			$filename = NULL;

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/users/';
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
	        	$userData = array(
					'username' => $username,
					'password' => $password,
					'first_name' => $first_name,
					'last_name' => $last_name,
					'role' => $role,
					'image' => $filename,
					'is_active' => $is_active,
					'created_at' => date('Y-m-d H:i:s', time())
				);

				$id = $this->api_model->insertUSer($userData);

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

	public function updateUser($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$user = $this->api_model->get_admin_user($id);
			$filename = $user->image;

			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$first_name = $this->input->post('first_name');
			$last_name = $this->input->post('last_name');
			$role = $this->input->post('role');
			$is_active = $this->input->post('is_active');

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/users/';
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
	   
					if($user->image && file_exists(FCPATH.'media/images/users/'.$user->image))
					{
						unlink(FCPATH.'media/images/user/'.$user->image);
					}

	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$userData = array(
					'username' => $username,
					'password' => $password,
					'first_name' => $first_name,
					'last_name' => $last_name,
					'role' => $role,
					'image' => $filename,
					'is_active' => $is_active
				);

				$this->api_model->updateUser($id, $userData);

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

	public function deleteUser($id)
	{
		header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$user = $this->api_model->get_admin_user($id);

			if($user->image && file_exists(FCPATH.'media/images/users/'.$user->image))
			{
				unlink(FCPATH.'media/images/user/'.$user->image);
			}

			$this->api_model->deleteUser($id);

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
	
	//
	


	//blogs
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
					'image' => base_url('media/images/blog/'.$blog->image),
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
					'image' => base_url('media/images/blog/'.$blog->image),
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
			'image' => base_url('media/images/blog/'.$blog->image),
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
					'image' => base_url('media/images/blog/'.$blog->image),
					'created_at' => $blog->created_at
				);
			}
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($posts));
	}

	public function categories()
	{
		header("Access-Control-Allow-Origin: *");

		$categories = $this->api_model->get_categories();

		$category = array();
		if(!empty($categories)){
			foreach($categories as $cate){
				$category[] = array(
					'id' => $cate->id,
					'name' => $cate->category_name
				);
			}
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($category));
	}

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

	public function loginmiembro() 
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
		header('Access-Control-Allow-Headers: Accept,Accept-Language,Content-Language,Content-Type');

		$formdata = json_decode(file_get_contents('php://input'), true);

		$username = $formdata['username'];
		$password = $formdata['password'];

		$miembro = $this->api_model->loginmiembro($username, $password);

		if($miembro) {
			$response = array(
				'user_id' => $miembro->id,
				'first_name' => $miembro->first_name,
				'last_name' => $miembro->last_name,
				'token' => $miembro->token
			);
		}
		else {
			$response = array();
		}

		$this->output
				->set_content_type('application/json')
				->set_output(json_encode($response));
	}

	//Crud Blog

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
					'image' => base_url('media/images/blog/'.$blog->image),
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
				'image' => base_url('media/images/blog/'.$blog->image),
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

				$config['upload_path']          = './media/images/blog/';
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

				$config['upload_path']          = './media/images/blog/';
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
	   
					if($blog->image && file_exists(FCPATH.'media/images/blog/'.$blog->image))
					{
						unlink(FCPATH.'media/images/blog/'.$blog->image);
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

			if($blog->image && file_exists(FCPATH.'media/images/blog/'.$blog->image))
			{
				unlink(FCPATH.'media/images/blog/'.$blog->image);
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

	///



		
// directorio

public function directorios()
{
    header("Access-Control-Allow-Origin: *");

    $directorios = $this->api_model->get_directorios($featured=false, $recentpost=false);

    $posts = array();
    if(!empty($directorios)){
        foreach($directorios as $directorio){


            $posts[] = array(
                'id' => $directorio->id,
                'nombre' => $directorio->nombre,
                'especialidad' => $directorio->especialidad,
                'universidad' => $directorio->universidad,
                'ano' => $directorio->ano,
                'website' => $directorio->website,
                'email' => $directorio->email,
                'direccion' => $directorio->direccion,
                'estado' => $directorio->estado,
                'telefonos' => $directorio->telefonos,
                'facebook' => $directorio->facebook,
                'instagram' => $directorio->instagram,
                'twitter' => $directorio->twitter,
                'linkedin' => $directorio->linkedin,
                'image' => base_url('media/images/directorio/'.$directorio->image),
                'created_at' => $directorio->created_at
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
                'id' => $directorio->id,
                'nombre' => $directorio->nombre,
                'especialidad' => $directorio->especialidad,
                'universidad' => $directorio->universidad,
                'ano' => $directorio->ano,
                'website' => $directorio->website,
                'email' => $directorio->email,
                'direccion' => $directorio->direccion,
                'estado' => $directorio->estado,
                'telefonos' => $directorio->telefonos,
                'facebook' => $directorio->facebook,
                'instagram' => $directorio->instagram,
                'twitter' => $directorio->twitter,
                'linkedin' => $directorio->linkedin,
                'image' => base_url('media/images/directorio/'.$directorio->image),
                'created_at' => $directorio->created_at
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
                'id' => $directorio->id,
                'nombre' => $directorio->nombre,
                'especialidad' => $directorio->especialidad,
                'universidad' => $directorio->universidad,
                'ano' => $directorio->ano,
                'website' => $directorio->website,
                'email' => $directorio->email,
                'direccion' => $directorio->direccion,
                'estado' => $directorio->estado,
                'telefonos' => $directorio->telefonos,
                'facebook' => $directorio->facebook,
                'instagram' => $directorio->instagram,
                'twitter' => $directorio->twitter,
                'linkedin' => $directorio->linkedin,
                'image' => base_url('media/images/directorio/'.$directorio->image),
                'created_at' => $directorio->created_at
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
                'id' => $directorio->id,
                'nombre' => $directorio->nombre,
                'especialidad' => $directorio->especialidad,
                'universidad' => $directorio->universidad,
                'ano' => $directorio->ano,
                'website' => $directorio->website,
                'email' => $directorio->email,
                'direccion' => $directorio->direccion,
                'estado' => $directorio->estado,
                'telefonos' => $directorio->telefonos,
                'facebook' => $directorio->facebook,
                'instagram' => $directorio->instagram,
                'twitter' => $directorio->twitter,
                'linkedin' => $directorio->linkedin,
                'image' => base_url('media/images/directorio/'.$directorio->image),
                'created_at' => $directorio->created_at
            );
        }
    }

    $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($posts));
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
                'id' => $directorio->id,
                'nombre' => $directorio->nombre,
                'especialidad' => $directorio->especialidad,
                'universidad' => $directorio->universidad,
                'ano' => $directorio->ano,
                'website' => $directorio->website,
                'email' => $directorio->email,
                'direccion' => $directorio->direccion,
                'estado' => $directorio->estado,
                'telefonos' => $directorio->telefonos,
                'facebook' => $directorio->facebook,
                'instagram' => $directorio->instagram,
                'twitter' => $directorio->twitter,
                'linkedin' => $directorio->linkedin,
                'image' => base_url('media/images/directorio/'.$directorio->image),
                'created_at' => $directorio->created_at
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
            'id' => $directorio->id,
                'nombre' => $directorio->nombre,
                'especialidad' => $directorio->especialidad,
                'universidad' => $directorio->universidad,
                'ano' => $directorio->ano,
                'website' => $directorio->website,
                'email' => $directorio->email,
                'direccion' => $directorio->direccion,
                'estado' => $directorio->estado,
                'telefonos' => $directorio->telefonos,
                'facebook' => $directorio->facebook,
                'instagram' => $directorio->instagram,
                'twitter' => $directorio->twitter,
                'linkedin' => $directorio->linkedin,
                'image' => base_url('media/images/directorio/'.$directorio->image),
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
        $facebook = $this->input->post('facebook');
        $instagram = $this->input->post('instagram');
        $twitter = $this->input->post('twitter');
        $linkedin = $this->input->post('linkedin');

        $filename = NULL;

        $isUploadError = FALSE;

        if ($_FILES && $_FILES['image']['name']) {

            $config['upload_path']          = './media/images/directorio/';
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
            $directorioData = array(
                'nombre' => $nombre,
                'image' => $filename,
                'especialidad' => $especialidad,
                'universidad' => $universidad,
                'ano' => $ano,
                'website' => $website,
                'email' => $email,
                'direccion' => $direccion,
                'estado' => $estado,
                'telefonos' => $telefonos,
                'facebook' => $facebook,
                'instagram' => $instagram,
                'twitter' => $twitter,
                'linkedin' => $linkedin,
                'created_at' => date('Y-m-d H:i:s', time())
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
        $filename = $directorio->image;

        $nombre = $this->input->post('nombre');
        $especialidad = $this->input->post('especialidad');
        $universidad = $this->input->post('universidad');
        $ano = $this->input->post('ano');
        $website = $this->input->post('website');
        $email = $this->input->post('email');
        $direccion = $this->input->post('direccion');
        $estado = $this->input->post('estado');
        $telefonos = $this->input->post('telefonos');
        $facebook = $this->input->post('facebook');
        $instagram = $this->input->post('instagram');
        $twitter = $this->input->post('twitter');
        $linkedin = $this->input->post('linkedin');

        $isUploadError = FALSE;

        if ($_FILES && $_FILES['image']['name']) {

            $config['upload_path']          = './media/images/directorio/';
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
   
                if($directorio->image && file_exists(FCPATH.'media/images/directorio/'.$directorio->image))
                {
                    unlink(FCPATH.'media/images/directorio/'.$directorio->image);
                }

                $uploadData = $this->upload->data();
                $filename = $uploadData['file_name'];
            }
        }

        if( ! $isUploadError) {
            $directorioData = array(
                'nombre' => $nombre,
                'image' => $filename,
                'especialidad' => $especialidad,
                'universidad' => $universidad,
                'ano' => $ano,
                'website' => $website,
                'email' => $email,
                'direccion' => $direccion,
                'estado' => $estado,
                'telefonos' => $telefonos,
                'facebook' => $facebook,
                'instagram' => $instagram,
                'twitter' => $twitter,
                'linkedin' => $linkedin,
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

        if($directorio->image && file_exists(FCPATH.'media/images/directorio/'.$directorio->image))
        {
            unlink(FCPATH.'media/images/directorio/'.$directorio->image);
        }

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






// Ads cuadrado
public function bancuadrados()
{
	header("Access-Control-Allow-Origin: *");

	$bancuadrados = $this->api_model->get_bancuadrados($featured=false, $recentpost=false);

	$posts = array();
	if(!empty($bancuadrados)){
		foreach($bancuadrados as $bancuadrado){


			$posts[] = array(
				'id' => $bancuadrado->id,
				'titulo' => $bancuadrado->titulo,
				'target' => $bancuadrado->target,
				'enlace' => $bancuadrado->enlace,
				'image' => base_url('media/images/ads/cuadrado/'.$bancuadrado->image),
				'created_at' => $bancuadrado->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function featured_bancuadrados()
{
	header("Access-Control-Allow-Origin: *");

	$bancuadrados = $this->api_model->get_bancuadrados($featured=true, $recentpost=false);

	$posts = array();
	if(!empty($bancuadrados)){
		foreach($bancuadrados as $bancuadrado){
			

			$posts[] = array(
				'id' => $bancuadrado->id,
				'titulo' => $bancuadrado->titulo,
				'target' => $bancuadrado->target,
				'enlace' => $bancuadrado->enlace,
				'image' => base_url('media/images/ads/cuadrado/'.$bancuadrado->image),
				'created_at' => $bancuadrado->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function bancuadrado($id)
{
	header("Access-Control-Allow-Origin: *");
	
	$bancuadrado = $this->api_model->get_bancuadrado($id);


	$post = array(
		'id' => $bancuadrado->id,
		'titulo' => $bancuadrado->titulo,
		'target' => $bancuadrado->target,
		'enlace' => $bancuadrado->enlace,
		'image' => base_url('media/images/ads/cuadrado/'.$bancuadrado->image),
		'created_at' => $bancuadrado->created_at
	);
	
	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($post));
}

public function recent_bancuadrados()
{
	header("Access-Control-Allow-Origin: *");

	$bancuadrados = $this->api_model->get_bancuadrados($featured=false, $recentpost=5);

	$posts = array();
	if(!empty($bancuadrados)){
		foreach($bancuadrados as $bancuadrado){
			

			$posts[] = array(
				'id' => $bancuadrado->id,
				'titulo' => $bancuadrado->titulo,
				'target' => $bancuadrado->target,
				'enlace' => $bancuadrado->enlace,
				'image' => base_url('media/images/ads/cuadrado/'.$bancuadrado->image),
				'created_at' => $bancuadrado->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

//


//CRUD bancuadrado

public function adminBancuadrados()
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	$posts = array();
	if($isValidToken) {
		$bancuadrados = $this->api_model->get_admin_bancuadrados();
		foreach($bancuadrados as $bancuadrado) {
			$posts[] = array(
				'id' => $bancuadrado->id,
				'titulo' => $bancuadrado->titulo,
				'target' => $bancuadrado->target,
				'enlace' => $bancuadrado->enlace,
				'image' => base_url('media/images/ads/cuadrado/'.$bancuadrado->image),
				'created_at' => $bancuadrado->created_at
			);
		}

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($posts)); 
	}
}

public function adminBancuadrado($id)
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$bancuadrado = $this->api_model->get_admin_bancuadrado($id);

		$post = array(
			'id' => $bancuadrado->id,
			'titulo' => $bancuadrado->titulo,
			'target' => $bancuadrado->target,
			'enlace' => $bancuadrado->enlace,
			'image' => base_url('media/images/ads/cuadrado/'.$bancuadrado->image),
			'created_at' => $bancuadrado->created_at,
			'is_active' => $bancuadrado->is_active
		);
		

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($post)); 
	}
}

public function createBancuadrado()
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$titulo = $this->input->post('titulo');
		$target = $this->input->post('target');
		$enlace = $this->input->post('enlace');
		$is_active = $this->input->post('is_active');

		$filename = NULL;

		$isUploadError = FALSE;

		if ($_FILES && $_FILES['image']['name']) {

			$config['upload_path']          = './media/images/ads/cuadrado/';
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
			$bancuadradoData = array(
				'titulo' => $titulo,
				'target' => $target,
				'enlace' => $enlace,
				'image' => $filename,
				'is_active' => $is_active,
				'created_at' => date('Y-m-d H:i:s', time())
			);

			$id = $this->api_model->insertBancuadrado($bancuadradoData);

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

public function updateBancuadrado($id)
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: authorization, Content-Type");
	header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$bancuadrado = $this->api_model->get_admin_bancuadrado($id);
		$filename = $bancuadrado->image;


		$titulo = $this->input->post('titulo');
		$target = $this->input->post('target');
		$enlace = $this->input->post('enlace');
		$is_active = $this->input->post('is_active');

		$isUploadError = FALSE;

		if ($_FILES && $_FILES['image']['name']) {

			$config['upload_path']          = './media/images/ads/cuadrado/';
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
   
				if($bancuadrado->image && file_exists(FCPATH.'media/images/ads/cuadrado/'.$bancuadrado->image))
				{
					unlink(FCPATH.'media/images/ads/cuadrado/'.$bancuadrado->image);
				}

				$uploadData = $this->upload->data();
				$filename = $uploadData['file_name'];
			}
		}

		if( ! $isUploadError) {
			$bancuadradoData = array(
				
				'titulo' => $titulo,
				'target' => $target,
				'enlace' => $enlace,
				'image' => $filename,
				'is_active' => $is_active
			);

			$this->api_model->updateBancuadrado($id, $bancuadradoData);

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

public function deleteBancuadrado($id)
{
	header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$bancuadrado = $this->api_model->get_admin_bancuadrado($id);

		if($bancuadrado->image && file_exists(FCPATH.'media/images/ads/cuadrado/'.$bancuadrado->image))
		{
			unlink(FCPATH.'media/images/ads/cuadrado/'.$bancuadrado->image);
		}

		$this->api_model->deleteBancuadrado($id);

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


// Ads horizontal
public function banhorizontals()
{
	header("Access-Control-Allow-Origin: *");

	$banhorizontals = $this->api_model->get_banhorizontals($featured=false, $recentpost=false);

	$posts = array();
	if(!empty($banhorizontals)){
		foreach($banhorizontals as $banhorizontal){


			$posts[] = array(
				'id' => $banhorizontal->id,
				'titulo' => $banhorizontal->titulo,
				'target' => $banhorizontal->target,
				'enlace' => $banhorizontal->enlace,
				'image' => base_url('media/images/ads/horizontal/'.$banhorizontal->image),
				'created_at' => $banhorizontal->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function featured_banhorizontals()
{
	header("Access-Control-Allow-Origin: *");

	$banhorizontals = $this->api_model->get_banhorizontals($featured=true, $recentpost=false);

	$posts = array();
	if(!empty($banhorizontals)){
		foreach($banhorizontals as $banhorizontal){
			

			$posts[] = array(
				'id' => $banhorizontal->id,
				'titulo' => $banhorizontal->titulo,
				'target' => $banhorizontal->target,
				'enlace' => $banhorizontal->enlace,
				'image' => base_url('media/images/ads/horizontal/'.$banhorizontal->image),
				'created_at' => $banhorizontal->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function banhorizontal($id)
{
	header("Access-Control-Allow-Origin: *");
	
	$banhorizontal = $this->api_model->get_banhorizontal($id);


	$post = array(
		'id' => $banhorizontal->id,
		'titulo' => $banhorizontal->titulo,
		'target' => $banhorizontal->target,
		'enlace' => $banhorizontal->enlace,
		'image' => base_url('media/images/ads/horizontal/'.$banhorizontal->image),
		'created_at' => $banhorizontal->created_at
	);
	
	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($post));
}

public function recent_banhorizontals()
{
	header("Access-Control-Allow-Origin: *");

	$banhorizontals = $this->api_model->get_banhorizontals($featured=false, $recentpost=5);

	$posts = array();
	if(!empty($banhorizontals)){
		foreach($banhorizontals as $banhorizontal){
			

			$posts[] = array(
				'id' => $banhorizontal->id,
				'titulo' => $banhorizontal->titulo,
				'target' => $banhorizontal->target,
				'enlace' => $banhorizontal->enlace,
				'image' => base_url('media/images/ads/horizontal/'.$banhorizontal->image),
				'created_at' => $banhorizontal->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

//


//CRUD ban horizontal

public function adminBanhorizontals()
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	$posts = array();
	if($isValidToken) {
		$banhorizontals = $this->api_model->get_admin_banhorizontals();
		foreach($banhorizontals as $banhorizontal) {
			$posts[] = array(
				'id' => $banhorizontal->id,
				'titulo' => $banhorizontal->titulo,
				'target' => $banhorizontal->target,
				'enlace' => $banhorizontal->enlace,
				'image' => base_url('media/images/ads/horizontal/'.$banhorizontal->image),
				'created_at' => $banhorizontal->created_at
			);
		}

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($posts)); 
	}
}

public function adminBanhorizontal($id)
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$banhorizontal = $this->api_model->get_admin_banhorizontal($id);

		$post = array(
			'id' => $banhorizontal->id,
			'titulo' => $banhorizontal->titulo,
			'target' => $banhorizontal->target,
			'enlace' => $banhorizontal->enlace,
			'image' => base_url('media/images/ads/horizontal/'.$banhorizontal->image),
			'created_at' => $banhorizontal->created_at,
			'is_active' => $banhorizontal->is_active
		);
		

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($post)); 
	}
}

public function createBanhorizontal()
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$titulo = $this->input->post('titulo');
		$target = $this->input->post('target');
		$enlace = $this->input->post('enlace');
		$is_active = $this->input->post('is_active');

		$filename = NULL;

		$isUploadError = FALSE;

		if ($_FILES && $_FILES['image']['name']) {

			$config['upload_path']          = './media/images/ads/horizontal/';
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
			$banhorizontalData = array(
				'titulo' => $titulo,
				'target' => $target,
				'enlace' => $enlace,
				'image' => $filename,
				'is_active' => $is_active,
				'created_at' => date('Y-m-d H:i:s', time())
			);

			$id = $this->api_model->insertBanhorizontal($banhorizontalData);

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

public function updateBanhorizontal($id)
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: authorization, Content-Type");
	header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$banhorizontal = $this->api_model->get_admin_banhorizontal($id);
		$filename = $banhorizontal->image;


		$titulo = $this->input->post('titulo');
		$target = $this->input->post('target');
		$enlace = $this->input->post('enlace');
		$is_active = $this->input->post('is_active');

		$isUploadError = FALSE;

		if ($_FILES && $_FILES['image']['name']) {

			$config['upload_path']          = './media/images/ads/horizontal/';
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
   
				if($banhorizontal->image && file_exists(FCPATH.'media/images/ads/horizontal/'.$banhorizontal->image))
				{
					unlink(FCPATH.'media/images/ads/horizontal/'.$banhorizontal->image);
				}

				$uploadData = $this->upload->data();
				$filename = $uploadData['file_name'];
			}
		}

		if( ! $isUploadError) {
			$banhorizontalData = array(
				
				'titulo' => $titulo,
				'target' => $target,
				'enlace' => $enlace,
				'image' => $filename,
				'is_active' => $is_active
			);

			$this->api_model->updateBanhorizontal($id, $banhorizontalData);

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

public function deleteBanhorizontal($id)
{
	header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$banhorizontal = $this->api_model->get_admin_banhorizontal($id);

		if($banhorizontal->image && file_exists(FCPATH.'media/images/ads/horizontal/'.$banhorizontal->image))
		{
			unlink(FCPATH.'media/images/ads/horizontal/'.$banhorizontal->image);
		}

		$this->api_model->deleteBanhorizontal($id);

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



// Ads vertical
public function banverticals()
{
	header("Access-Control-Allow-Origin: *");

	$banverticals = $this->api_model->get_banverticals($featured=false, $recentpost=false);

	$posts = array();
	if(!empty($banverticals)){
		foreach($banverticals as $banvertical){


			$posts[] = array(
				'id' => $banvertical->id,
				'titulo' => $banvertical->titulo,
				'target' => $banvertical->target,
				'enlace' => $banvertical->enlace,
				'image' => base_url('media/images/ads/vertical/'.$banvertical->image),
				'created_at' => $banvertical->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function featured_banverticals()
{
	header("Access-Control-Allow-Origin: *");

	$banverticals = $this->api_model->get_banverticals($featured=true, $recentpost=false);

	$posts = array();
	if(!empty($banverticals)){
		foreach($banverticals as $banvertical){
			

			$posts[] = array(
				'id' => $banvertical->id,
				'titulo' => $banvertical->titulo,
				'target' => $banvertical->target,
				'enlace' => $banvertical->enlace,
				'image' => base_url('media/images/ads/vertical/'.$banvertical->image),
				'created_at' => $banvertical->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function banvertical($id)
{
	header("Access-Control-Allow-Origin: *");
	
	$banvertical = $this->api_model->get_banvertical($id);


	$post = array(
		'id' => $banvertical->id,
		'titulo' => $banvertical->titulo,
		'target' => $banvertical->target,
		'enlace' => $banvertical->enlace,
		'image' => base_url('media/images/ads/vertical/'.$banvertical->image),
		'created_at' => $banvertical->created_at
	);
	
	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($post));
}

public function recent_banverticals()
{
	header("Access-Control-Allow-Origin: *");

	$banverticals = $this->api_model->get_banverticals($featured=false, $recentpost=5);

	$posts = array();
	if(!empty($banverticals)){
		foreach($banverticals as $banvertical){
			

			$posts[] = array(
				'id' => $banvertical->id,
				'titulo' => $banvertical->titulo,
				'target' => $banvertical->target,
				'enlace' => $banvertical->enlace,
				'image' => base_url('media/images/ads/vertical/'.$banvertical->image),
				'created_at' => $banvertical->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

//


//CRUD vertical

public function adminBanverticals()
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	$posts = array();
	if($isValidToken) {
		$banverticals = $this->api_model->get_admin_banverticals();
		foreach($banverticals as $banvertical) {
			$posts[] = array(
				'id' => $banvertical->id,
				'titulo' => $banvertical->titulo,
				'target' => $banvertical->target,
				'enlace' => $banvertical->enlace,
				'image' => base_url('media/images/ads/vertical/'.$banvertical->image),
				'created_at' => $banvertical->created_at
			);
		}

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($posts)); 
	}
}

public function adminBanvertical($id)
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$banvertical = $this->api_model->get_admin_banvertical($id);

		$post = array(
			'id' => $banvertical->id,
			'titulo' => $banvertical->titulo,
			'target' => $banvertical->target,
			'enlace' => $banvertical->enlace,
			'image' => base_url('media/images/ads/vertical/'.$banvertical->image),
			'created_at' => $banvertical->created_at,
			'is_active' => $banvertical->is_active
		);
		

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($post)); 
	}
}

public function createBanvertical()
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$titulo = $this->input->post('titulo');
		$target = $this->input->post('target');
		$enlace = $this->input->post('enlace');
		$is_active = $this->input->post('is_active');

		$filename = NULL;

		$isUploadError = FALSE;

		if ($_FILES && $_FILES['image']['name']) {

			$config['upload_path']          = './media/images/ads/vertical/';
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
			$banverticalData = array(
				'titulo' => $titulo,
				'target' => $target,
				'enlace' => $enlace,
				'image' => $filename,
				'is_active' => $is_active,
				'created_at' => date('Y-m-d H:i:s', time())
			);

			$id = $this->api_model->insertBanvertical($banverticalData);

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

public function updateBanvertical($id)
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: authorization, Content-Type");
	header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$banvertical = $this->api_model->get_admin_banvertical($id);
		$filename = $banvertical->image;


		$titulo = $this->input->post('titulo');
		$target = $this->input->post('target');
		$enlace = $this->input->post('enlace');
		$is_active = $this->input->post('is_active');

		$isUploadError = FALSE;

		if ($_FILES && $_FILES['image']['name']) {

			$config['upload_path']          = './media/images/ads/vertical/';
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
   
				if($banvertical->image && file_exists(FCPATH.'media/images/ads/vertical/'.$banvertical->image))
				{
					unlink(FCPATH.'media/images/ads/vertical/'.$banvertical->image);
				}

				$uploadData = $this->upload->data();
				$filename = $uploadData['file_name'];
			}
		}

		if( ! $isUploadError) {
			$banverticalData = array(
				
				'titulo' => $titulo,
				'target' => $target,
				'enlace' => $enlace,
				'image' => $filename,
				'is_active' => $is_active
			);

			$this->api_model->updateBanvertical($id, $banverticalData);

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

public function deleteBanvertical($id)
{
	header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$banvertical = $this->api_model->get_admin_banvertical($id);

		if($banvertical->image && file_exists(FCPATH.'media/images/ads/vertical/'.$banvertical->image))
		{
			unlink(FCPATH.'media/images/ads/vertical/'.$banvertical->image);
		}

		$this->api_model->deleteBanvertical($id);

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


// Galeria
public function galerias()
{
	header("Access-Control-Allow-Origin: *");

	$galerias = $this->api_model->get_galerias($featured=false, $recentpost=false);

	$posts = array();
	if(!empty($galerias)){
		foreach($galerias as $galeria){


			$posts[] = array(
				'id' => $galeria->id,
				'titulo' => $galeria->titulo,
				'image' => base_url('media/images/galeria/'.$galeria->image),
				'created_at' => $galeria->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function featured_galerias()
{
	header("Access-Control-Allow-Origin: *");

	$galerias = $this->api_model->get_galerias($featured=true, $recentpost=false);

	$posts = array();
	if(!empty($galerias)){
		foreach($galerias as $galeria){
			

			$posts[] = array(
				'id' => $galeria->id,
				'titulo' => $galeria->titulo,
				'image' => base_url('media/images/galeria/'.$galeria->image),
				'created_at' => $galeria->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function galeria($id)
{
	header("Access-Control-Allow-Origin: *");
	
	$galeria = $this->api_model->get_galeria($id);


	$post = array(
		'id' => $galeria->id,
		'titulo' => $galeria->titulo,
		'image' => base_url('media/images/galeria/'.$galeria->image),
		'created_at' => $galeria->created_at
	);
	
	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($post));
}

public function recent_galerias()
{
	header("Access-Control-Allow-Origin: *");

	$galerias = $this->api_model->get_galerias($featured=false, $recentpost=5);

	$posts = array();
	if(!empty($galerias)){
		foreach($galerias as $galeria){
			

			$posts[] = array(
				'id' => $galeria->id,
				'titulo' => $galeria->titulo,
				'image' => base_url('media/images/galeria/'.$galeria->image),
				'created_at' => $galeria->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

//


//CRUD galeria

public function admingalerias()
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	$posts = array();
	if($isValidToken) {
		$galerias = $this->api_model->get_admin_galerias();
		foreach($galerias as $galeria) {
			$posts[] = array(
				'id' => $galeria->id,
				'titulo' => $galeria->titulo,
				'image' => base_url('media/images/galeria/'.$galeria->image),
				'created_at' => $galeria->created_at
			);
		}

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($posts)); 
	}
}

public function adminGaleria($id)
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$galeria = $this->api_model->get_admin_galeria($id);

		$post = array(
			'id' => $galeria->id,
			'titulo' => $galeria->titulo,
			'image' => base_url('media/images/galeria/'.$galeria->image),
			'created_at' => $galeria->created_at
		);
		

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($post)); 
	}
}

public function createGaleria()
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$titulo = $this->input->post('titulo');

		$filename = NULL;

		$isUploadError = FALSE;

		if ($_FILES && $_FILES['image']['name']) {

			$config['upload_path']          = './media/images/galeria/';
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
			$galeriaData = array(
				'titulo' => $titulo,
				'image' => $filename,
				'created_at' => date('Y-m-d H:i:s', time())
			);

			$id = $this->api_model->insertGaleria($galeriaData);

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

public function updateGaleria($id)
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: authorization, Content-Type");
	header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$galeria = $this->api_model->get_admin_galeria($id);
		$filename = $galeria->image;


		$titulo = $this->input->post('titulo');

		$isUploadError = FALSE;

		if ($_FILES && $_FILES['image']['name']) {

			$config['upload_path']          = './media/images/galeria/';
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
   
				if($galeria->image && file_exists(FCPATH.'media/images/galeria/'.$galeria->image))
				{
					unlink(FCPATH.'media/images/galeria/'.$galeria->image);
				}

				$uploadData = $this->upload->data();
				$filename = $uploadData['file_name'];
			}
		}

		if( ! $isUploadError) {
			$galeriaData = array(
				
				'titulo' => $titulo,
				'image' => $filename,
			);

			$this->api_model->updateGaleria($id, $galeriaData);

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

public function deleteGaleria($id)
{
	header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$galeria = $this->api_model->get_admin_galeria($id);

		if($galeria->image && file_exists(FCPATH.'media/images/galeria/'.$galeria->image))
		{
			unlink(FCPATH.'media/images/galeria/'.$galeria->image);
		}

		$this->api_model->deleteGaleria($id);

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



public function afiliaciones()
	{
		header("Access-Control-Allow-Origin: *");

		$afiliaciones = $this->api_model->get_afiliaciones($featured=false, $recentpost=false);

		$posts = array();
		if(!empty($afiliaciones)){
			foreach($afiliaciones as $afiliacione){


				$posts[] = array(
					'id' => $afiliacione->id,
					'nombres' => $afiliacione->nombres,
					'apellidos' => $afiliacione->apellidos,
					'titulo' => $afiliacione->titulo,
					'universidad' => $afiliacione->universidad,
					'graduacion' => $afiliacione->graduacion,
					'ciudad' => $afiliacione->ciudad,
					'estado' => $afiliacione->estado,
					'telefono' => $afiliacione->telefono,
					'email' => $afiliacione->email,
					'archivo' => base_url('media/pdf/afiliaciones/'.$afiliacione->file),
					'created_at' => $afiliacione->created_at
				);
			}
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($posts));
	}


	public function afiliacione($id)
	{
		header("Access-Control-Allow-Origin: *");
		
		$afiliacione = $this->api_model->get_afiliacione($id);

		$post = array(
			'id' => $afiliacione->id,
					'nombres' => $afiliacione->nombres,
					'apellidos' => $afiliacione->apellidos,
					'titulo' => $afiliacione->titulo,
					'universidad' => $afiliacione->universidad,
					'graduacion' => $afiliacione->graduacion,
					'ciudad' => $afiliacione->ciudad,
					'estado' => $afiliacione->estado,
					'telefono' => $afiliacione->telefono,
					'email' => $afiliacione->email,
					'archivo' => base_url('media/pdf/afiliaciones/'.$afiliacione->file),
					'created_at' => $afiliacione->created_at
		);
		
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($post));
	}

	public function recent_afiliaciones()
	{
		header("Access-Control-Allow-Origin: *");

		$afiliaciones = $this->api_model->get_afiliaciones($featured=false, $recentpost=5);

		$posts = array();
		if(!empty($afiliaciones)){
			foreach($afiliaciones as $afiliacione){
				

				$posts[] = array(
					'id' => $afiliacione->id,
					'nombres' => $afiliacione->nombres,
					'apellidos' => $afiliacione->apellidos,
					'titulo' => $afiliacione->titulo,
					'universidad' => $afiliacione->universidad,
					'graduacion' => $afiliacione->graduacion,
					'ciudad' => $afiliacione->ciudad,
					'estado' => $afiliacione->estado,
					'telefono' => $afiliacione->telefono,
					'email' => $afiliacione->email,
					'archivo' => base_url('media/pdf/afiliaciones/'.$afiliacione->file),
					'created_at' => $afiliacione->created_at
				);
			}
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($posts));
	}

	//


	//CRUD Afiliaciones

	public function adminAfiliaciones()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$afiliaciones = $this->api_model->get_admin_afiliaciones();
			foreach($afiliaciones as $afiliacione) {
				$posts[] = array(
					'id' => $afiliacione->id,
					'nombres' => $afiliacione->nombres,
					'apellidos' => $afiliacione->apellidos,
					'titulo' => $afiliacione->titulo,
					'universidad' => $afiliacione->universidad,
					'graduacion' => $afiliacione->graduacion,
					'ciudad' => $afiliacione->ciudad,
					'estado' => $afiliacione->estado,
					'telefono' => $afiliacione->telefono,
					'email' => $afiliacione->email,
					'archivo' => base_url('media/pdf/afiliaciones/'.$afiliacione->file),
					'created_at' => $afiliacione->created_at
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($posts)); 
		}
	}

	public function adminAfiliacione($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$afiliacione = $this->api_model->get_admin_afiliacione($id);

			$post = array(
				'id' => $afiliacione->id,
					'nombres' => $afiliacione->nombres,
					'apellidos' => $afiliacione->apellidos,
					'titulo' => $afiliacione->titulo,
					'universidad' => $afiliacione->universidad,
					'graduacion' => $afiliacione->graduacion,
					'ciudad' => $afiliacione->ciudad,
					'estado' => $afiliacione->estado,
					'telefono' => $afiliacione->telefono,
					'email' => $afiliacione->email,
					'archivo' => base_url('media/pdf/afiliaciones/'.$afiliacione->file),
					'created_at' => $afiliacione->created_at
			);
			

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($post)); 
		}
	}

	public function createAfiliacione()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$nombres = $this->input->post('nombres');
			$apellidos = $this->input->post('apellidos');
			$titulo = $this->input->post('titulo');
			$universidad = $this->input->post('universidad');
			$graduacion = $this->input->post('graduacion');
			$ciudad = $this->input->post('ciudad');
			$estado = $this->input->post('estado');
			$telefono = $this->input->post('telefono');
			$email = $this->input->post('email');

			$filename = NULL;

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['archivo']['name']) {

				$config['upload_path']          = './media/pdf/afiliaciones/';
	            $config['allowed_types']        = 'pdf';
	            $config['max_size']             = 3000;

	            $this->load->library('upload', $config);
	            if ( ! $this->upload->do_upload('archivo')) {

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
	        	$afiliacioneData = array(
					'nombres' => $nombres,
					'apellidos' => $apellidos,
					'titulo' => $titulo,
					'universidad' => $universidad,
					'graduacion' => $graduacion,
					'ciudad' => $ciudad,
					'estado' => $estado,
					'telefono' => $telefono,
					'archivo' => $filename,
					'email' => $email,
					'created_at' => date('Y-m-d H:i:s', time())
				);

				$id = $this->api_model->insertAfiliacione($afiliacioneData);

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

	public function updateAfiliacione($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$afiliacione = $this->api_model->get_admin_afiliacione($id);
			$filename = $afiliacione->file;

			$nombres = $this->input->post('nombres');
			$apellidos = $this->input->post('apellidos');
			$titulo = $this->input->post('titulo');
			$universidad = $this->input->post('universidad');
			$graduacion = $this->input->post('graduacion');
			$ciudad = $this->input->post('ciudad');
			$estado = $this->input->post('estado');
			$telefono = $this->input->post('telefono');
			$email = $this->input->post('email');

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['archivo']['name']) {

				$config['upload_path']          = './media/pdf/afiliaciones/';
	            $config['allowed_types']        = 'pdf';
	            $config['max_size']             = 500;

	            $this->load->library('upload', $config);
	            if ( ! $this->upload->do_upload('archivo')) {

	            	$isUploadError = TRUE;

					$response = array(
						'status' => 'error',
						'message' => $this->upload->display_errors()
					);
	            }
	            else {
	   
					if($afiliacione->file && file_exists(FCPATH.'media/pdf/afiliaciones/'.$afiliacione->file))
					{
						unlink(FCPATH.'media/pdf/afiliaciones/'.$afiliacione->file);
					}

	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$afiliacioneData = array(
					'nombres' => $nombres,
					'apellidos' => $apellidos,
					'titulo' => $titulo,
					'universidad' => $universidad,
					'graduacion' => $graduacion,
					'ciudad' => $ciudad,
					'estado' => $estado,
					'telefono' => $telefono,
					'archivo' => $filename,
					'email' => $email,
				);

				$this->api_model->updateAfiliacione($id, $afiliacioneData);

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

	public function deleteAfiliacione($id)
	{
		header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$afiliacione = $this->api_model->get_admin_afiliacione($id);

			if($afiliacione->file && file_exists(FCPATH.'media/pdf/afiliacione/'.$afiliacione->file))
			{
				unlink(FCPATH.'media/pdf/afiliacione/'.$afiliacione->file);
			}

			$this->api_model->deleteAfiliacione($id);

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



// buscar 


public function search()
{
	header("Access-Control-Allow-Origin: *");
	header("Content-Type:application/json; charset=UTF-8");


	$text = $this->input->get('text');


	$data['doctores'] = $this->api_model->search_products($text);
	// echo $text;
	 //print_r($data); // traemos el array
	$data = json_encode( $data, JSON_FORCE_OBJECT );// se convierte a json
	echo $data."\n";



	$this->output
		->set_content_type('application/json');
	
}

public function adminSearch (){

$text = $this->input->get('text');

$this->load->view('doctores');


}

	
}
