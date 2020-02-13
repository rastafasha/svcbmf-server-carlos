<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_Afiliaciones extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('api_model');
		$this->load->model('api_model_afiliaciones');
		$this->load->helper('url');
		$this->load->helper('text');
	}

	public function afiliaciones()
	{
		header("Access-Control-Allow-Origin: *");

		$afiliaciones = $this->api_model_afiliaciones->get_afiliaciones($featured=false, $recentpost=false);

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
					'telefonos' => $afiliacione->telefonos,
					'email' => $afiliacione->email,
					'archivo' => base_url('media/pdf/afiliaciones/'.$afiliacione->archivo),
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
		
		$afiliacione = $this->api_model_afiliaciones->get_afiliacione($id);

		$post = array(
			'id' => $afiliacione->id,
					'nombres' => $afiliacione->nombres,
					'apellidos' => $afiliacione->apellidos,
					'titulo' => $afiliacione->titulo,
					'universidad' => $afiliacione->universidad,
					'graduacion' => $afiliacione->graduacion,
					'ciudad' => $afiliacione->ciudad,
					'estado' => $afiliacione->estado,
					'telefonos' => $afiliacione->telefonos,
					'email' => $afiliacione->email,
					'archivo' => base_url('media/pdf/afiliaciones/'.$afiliacione->archivo),
					'created_at' => $afiliacione->created_at
		);
		
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($post));
	}

	public function recent_afiliaciones()
	{
		header("Access-Control-Allow-Origin: *");

		$afiliaciones = $this->api_model_afiliaciones->get_afiliaciones($featured=false, $recentpost=5);

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
					'telefonos' => $afiliacione->telefonos,
					'email' => $afiliacione->email,
					'archivo' => $afiliacione->archivo,
					'archivo' => base_url('media/pdf/afiliaciones/'.$afiliacione->archivo),
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
			$afiliaciones = $this->api_model_afiliaciones->get_admin_afiliaciones();
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
					'telefonos' => $afiliacione->telefonos,
					'email' => $afiliacione->email,
					'archivo' => base_url('media/pdf/afiliaciones/'.$afiliacione->archivo),
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

			$afiliacione = $this->api_model_afiliaciones->get_admin_afiliacione($id);

			$post = array(
				'id' => $afiliacione->id,
					'nombres' => $afiliacione->nombres,
					'apellidos' => $afiliacione->apellidos,
					'titulo' => $afiliacione->titulo,
					'universidad' => $afiliacione->universidad,
					'graduacion' => $afiliacione->graduacion,
					'ciudad' => $afiliacione->ciudad,
					'estado' => $afiliacione->estado,
					'telefonos' => $afiliacione->telefonos,
					'email' => $afiliacione->email,
					'archivo' => base_url('media/pdf/afiliaciones/'.$afiliacione->archivo),
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
			$telefonos = $this->input->post('telefonos');
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
					'telefonos' => $telefonos,
					'archivo' => $filename,
					'email' => $email,
					'created_at' => date('Y-m-d H:i:s', time())
				);

				$id = $this->api_model_afiliaciones->insertAfiliacione($afiliacioneData);

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

			$afiliacione = $this->api_model_afiliaciones->get_admin_afiliacione($id);
			$filename = $afiliacione->archivo;

			$nombres = $this->input->post('nombres');
			$apellidos = $this->input->post('apellidos');
			$titulo = $this->input->post('titulo');
			$universidad = $this->input->post('universidad');
			$graduacion = $this->input->post('graduacion');
			$ciudad = $this->input->post('ciudad');
			$estado = $this->input->post('estado');
			$telefonos = $this->input->post('telefonos');
			$email = $this->input->post('email');

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
	   
					if($afiliacione->archivo && file_exists(FCPATH.'media/pdf/afiliaciones/'.$afiliacione->archivo))
					{
						unlink(FCPATH.'media/pdf/afiliaciones/'.$afiliacione->archivo);
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
					'telefonos' => $telefonos,
					'archivo' => $filename,
					'email' => $email,
				);

				$this->api_model_afiliaciones->updateAfiliacione($id, $afiliacioneData);

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

			$afiliacione = $this->api_model_afiliaciones->get_admin_afiliacione($id);

			if($afiliacione->archivo && file_exists(FCPATH.'media/pdf/afiliaciones/'.$afiliacione->archivo))
			{
				unlink(FCPATH.'media/pdf/afiliaciones/'.$afiliacione->archivo);
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


	
	
}
