<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_Miembro extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('api_model');
		$this->load->helper('url');
		$this->load->helper('text');
    }
    
	public function miembros()
	{
		header("Access-Control-Allow-Origin: *");

		$miembros = $this->api_model->get_miembros($featured=false, $recentpost=false);

		$posts = array();
		if(!empty($miembros)){
			foreach($miembros as $miembro){

				$posts[] = array(
					'id' => $miembro->id,
					'username' => $miembro->username,
					'password' => $miembro->password,
					'first_name' => $miembro->first_name,
					'last_name' => $miembro->last_name,
					'role' => $miembro->role,
					'is_active' => $miembro->is_active,
					'token' => $miembro->token,
					'image' => base_url('media/images/miembros/'.$miembro->image),
					'created_at' => $miembro->created_at
				);
			}
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($posts));
	}

	public function featured_miembros()
	{
		header("Access-Control-Allow-Origin: *");

		$miembros = $this->api_model->get_miembros($featured=true, $recentpost=false);

		$posts = array();
		if(!empty($miembros)){
			foreach($miembros as $miembro){
				

				$posts[] = array(
					'id' => $miembro->id,
					'username' => $miembro->username,
					'password' => $miembro->password,
					'first_name' => $miembro->first_name,
					'last_name' => $miembro->last_name,
					'role' => $miembro->role,
					'is_active' => $miembro->is_active,
					'token' => $miembro->token,
					'image' => base_url('media/images/miembros/'.$miembro->image),
					'created_at' => $miembro->created_at
				);
			}
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($posts));
	}

	public function miembro($id)
	{
		header("Access-Control-Allow-Origin: *");
		
		$miembro = $this->api_model->get_miembro($id);

		$post = array(
			'id' => $miembro->id,
					'username' => $miembro->username,
					'password' => $miembro->password,
					'first_name' => $miembro->first_name,
					'last_name' => $miembro->last_name,
					'role' => $miembro->role,
					'is_active' => $miembro->is_active,
					'token' => $miembro->token,
					'image' => base_url('media/images/miembros/'.$miembro->image),
					'created_at' => $miembro->created_at
		);
		
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($post));
	}

	public function recent_miembros()
	{
		header("Access-Control-Allow-Origin: *");

		$miembros = $this->api_model->get_miembros($featured=false, $recentpost=5);

		$posts = array();
		if(!empty($miembros)){
			foreach($miembros as $miembro){
				

				$posts[] = array(
					'id' => $miembro->id,
					'username' => $miembro->username,
					'password' => $miembro->password,
					'first_name' => $miembro->first_name,
					'last_name' => $miembro->last_name,
					'role' => $miembro->role,
					'is_active' => $miembro->is_active,
					'token' => $miembro->token,
					'image' => base_url('media/images/miembros/'.$miembro->image),
					'created_at' => $miembro->created_at
				);
			}
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($posts));
	}

	//


	//CRUD users

	public function adminMiembros()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkTokenMiembro($token);

		$posts = array();
		if($isValidToken) {
			$miembros = $this->api_model->get_admin_miembros();
			foreach($miembros as $miembro) {
				$posts[] = array(
					'id' => $miembro->id,
					'username' => $miembro->username,
					'password' => $miembro->password,
					'first_name' => $miembro->first_name,
					'last_name' => $miembro->last_name,
					'role' => $miembro->role,
					'is_active' => $miembro->is_active,
					'token' => $miembro->token,
					'image' => base_url('media/images/miembros/'.$miembro->image),
					'created_at' => $miembro->created_at
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($posts)); 
		}
	}

	public function adminMiembro($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkTokenMiembro($token);

		if($isValidToken) {

			$miembro = $this->api_model->get_admin_miembro($id);

			$post = array(
				'id' => $miembro->id,
					'username' => $miembro->username,
					'password' => $miembro->password,
					'first_name' => $miembro->first_name,
					'last_name' => $miembro->last_name,
					'role' => $miembro->role,
					'is_active' => $miembro->is_active,
					'token' => $miembro->token,
					'image' => base_url('media/images/miembros/'.$miembro->image),
					'created_at' => $miembro->created_at,
				'is_active' => $user->is_active
			);
			

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($post)); 
		}
	}

	public function createMiembro()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkTokenMiembro($token);

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

				$config['upload_path']          = './media/images/miembros/';
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
	        	$miembroData = array(
					'username' => $username,
					'password' => $password,
					'first_name' => $first_name,
					'last_name' => $last_name,
					'role' => $role,
					'image' => $filename,
					'is_active' => $is_active,
					'created_at' => date('Y-m-d H:i:s', time())
				);

				$id = $this->api_model->insertMiembro($miembroData);

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

	public function updateMiembro($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkTokenMiembro($token);

		if($isValidToken) {

			$miembro = $this->api_model->get_admin_miembro($id);
			$filename = $miembro->image;

			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$first_name = $this->input->post('first_name');
			$last_name = $this->input->post('last_name');
			$role = $this->input->post('role');
			$is_active = $this->input->post('is_active');

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/miembros/';
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
	   
					if($miembro->image && file_exists(FCPATH.'media/images/miembros/'.$miembro->image))
					{
						unlink(FCPATH.'media/images/miembros/'.$miembro->image);
					}

	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$miembroData = array(
					'username' => $username,
					'password' => $password,
					'first_name' => $first_name,
					'last_name' => $last_name,
					'role' => $role,
					'image' => $filename,
					'is_active' => $is_active
				);

				$this->api_model->updateMiembro($id, $miembroData);

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

	public function deleteMiembro($id)
	{
		header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkTokenMiembro($token);

		if($isValidToken) {

			$miembro = $this->api_model->get_admin_miembro($id);

			if($miembro->image && file_exists(FCPATH.'media/images/miembros/'.$miembro->image))
			{
				unlink(FCPATH.'media/images/miembro/'.$miembro->image);
			}

			$this->api_model->deleteMiembro($id);

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
	
	
}
