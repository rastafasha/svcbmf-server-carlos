<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_Pacientes extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('api_model_paciente');
		$this->load->model('api_model');
		$this->load->helper('url');
		$this->load->helper('text');
	}

	public function pacientes()
	{
		header("Access-Control-Allow-Origin: *");

		$pacientes = $this->api_model_paciente->get_pacientes($featured=false, $recentpost=false);

		$posts = array();
		if(!empty($pacientes)){
			foreach($pacientes as $paciente){

				$short_desc = strip_tags(character_limiter($paciente->description, 70));

				$posts[] = array(
					'id' => $paciente->id,
					'title' => $paciente->title,
					'description' => $paciente->description,
					'is_active' => $paciente->is_active,
					'short_desc' => html_entity_decode($short_desc),
					'image' => base_url('media/images/paciente/'.$paciente->image),
					'created_at' => $paciente->created_at
				);
			}
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($posts));
	}

	public function featured_pacientes()
	{
		header("Access-Control-Allow-Origin: *");

		$pacientes = $this->api_model_paciente->get_pacientes($featured=true, $recentpost=false);

		$posts = array();
		if(!empty($pacientes)){
			foreach($pacientes as $paciente){
				
				$short_desc = strip_tags(character_limiter($paciente->description, 70));

				$posts[] = array(
					'id' => $paciente->id,
					'title' => $paciente->title,
					'description' => $paciente->description,
					'is_active' => $paciente->is_active,
					'short_desc' => html_entity_decode($short_desc),
					'image' => base_url('media/images/paciente/'.$paciente->image),
					'created_at' => $paciente->created_at
				);
			}
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($posts));
	}

	public function paciente($id)
	{
		header("Access-Control-Allow-Origin: *");
		
		$paciente = $this->api_model_paciente->get_paciente($id);

		$post = array(
			'id' => $paciente->id,
			'title' => $paciente->title,
			'description' => $paciente->description,
			'is_active' => $paciente->is_active,
			'description' => $paciente->description,
			'image' => base_url('media/images/paciente/'.$paciente->image),
			'created_at' => $paciente->created_at
		);
		
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($post));
	}

	public function recent_pacientes()
	{
		header("Access-Control-Allow-Origin: *");

		$pacientes = $this->api_model_paciente->get_pacientes($featured=false, $recentpost=5);

		$posts = array();
		if(!empty($pacientes)){
			foreach($pacientes as $paciente){
				
				$short_desc = strip_tags(character_limiter($paciente->description, 70));

				$posts[] = array(
					'id' => $paciente->id,
					'title' => $paciente->title,
					'description' => $paciente->description,
					'is_active' => $paciente->is_active,
					'short_desc' => html_entity_decode($short_desc),
					'image' => base_url('media/images/paciente/'.$paciente->image),
					'created_at' => $paciente->created_at
				);
			}
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($posts));
	}

	//


	//CRUD paciente

	public function adminPacientes()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$pacientes = $this->api_model_paciente->get_admin_pacientes();
			foreach($pacientes as $paciente) {
				$posts[] = array(
					'id' => $paciente->id,
					'title' => $paciente->title,
					'description' => $paciente->description,
					'image' => base_url('media/images/paciente/'.$paciente->image),
					'created_at' => $paciente->created_at
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($posts)); 
		}
	}

	public function adminPaciente($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$paciente = $this->api_model_paciente->get_admin_paciente($id);

			$post = array(
				'id' => $paciente->id,
				'title' => $paciente->title,
				'description' => $paciente->description,
				'image' => base_url('media/images/paciente/'.$paciente->image),
				'is_featured' => $paciente->is_featured,
				'is_active' => $paciente->is_active
			);
			

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($post)); 
		}
	}

	public function createPaciente()
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

				$config['upload_path']          = './media/images/paciente/';
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
	        	$pacienteData = array(
					'title' => $title,
					'user_id' => 1,
					'description' => $description,
					'image' => $filename,
					'is_featured' => $is_featured,
					'is_active' => $is_active,
					'created_at' => date('Y-m-d H:i:s', time())
				);

				$id = $this->api_model_paciente->insertPaciente($pacienteData);

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

	public function updatePaciente($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$paciente = $this->api_model_paciente->get_admin_paciente($id);
			$filename = $paciente->image;

			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$is_featured = $this->input->post('is_featured');
			$is_active = $this->input->post('is_active');

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/paciente/';
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
	   
					if($paciente->image && file_exists(FCPATH.'media/images/paciente/'.$paciente->image))
					{
						unlink(FCPATH.'media/images/paciente/'.$paciente->image);
					}

	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$pacienteData = array(
					'title' => $title,
					'user_id' => 1,
					'description' => $description,
					'image' => $filename,
					'is_featured' => $is_featured,
					'is_active' => $is_active
				);

				$this->api_model_paciente->updatePaciente($id, $pacienteData);

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

	public function deletePaciente($id)
	{
		header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$paciente = $this->api_model_paciente->get_admin_paciente($id);

			if($paciente->image && file_exists(FCPATH.'media/images/paciente/'.$paciente->image))
			{
				unlink(FCPATH.'media/images/paciente/'.$paciente->image);
			}

			$this->api_model_paciente->deletePaciente($id);

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
