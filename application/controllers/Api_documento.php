<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_Documento extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('api_model');
		$this->load->model('api_model_documento');
		$this->load->helper('url');
		$this->load->helper('text');
	}


	//Documentos

	public function documentos()
	{
		header("Access-Control-Allow-Origin: *");

		$documentos = $this->api_model_documento->get_documentos($featured=false, $recentpost=false);

		$posts = array();
		if(!empty($documentos)){
			foreach($documentos as $documento){


				$posts[] = array(
					'id' => $documento->id,
					'titulo' => $documento->titulo,
					'archivo' => base_url('media/pdf/documento/'.$documento->archivo),
					'created_at' => $documento->created_at
				);
			}
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($posts));
	}


	public function documento($id)
	{
		header("Access-Control-Allow-Origin: *");
		
		$documento = $this->api_model_documento->get_documento($id);

		$post = array(
			'id' => $documento->id,
			'titulo' => $documento->titulo,
			'archivo' => base_url('media/pdf/documento/'.$documento->archivo),
			'created_at' => $documento->created_at
		);
		
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($post));
	}

	public function recent_documentos()
	{
		header("Access-Control-Allow-Origin: *");

		$afiliaciones = $this->api_model_documento->get_documentos($featured=false, $recentpost=5);

		$posts = array();
		if(!empty($documentos)){
			foreach($documentos as $documento){
				

				$posts[] = array(
					'id' => $documento->id,
					'titulo' => $documento->titulo,
					'archivo' => base_url('media/pdf/documento/'.$documento->archivo),
					'created_at' => $documento->created_at
				);
			}
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($posts));
	}

	//


	//CRUD Afiliaciones

	public function adminDocumentos()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$documentos = $this->api_model_documento->get_admin_documentos();
			foreach($documentos as $documento) {
				$posts[] = array(
					'id' => $documento->id,
					'titulo' => $documento->titulo,
					'archivo' => base_url('media/pdf/documento/'.$documento->archivo),
					'created_at' => $documento->created_at
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($posts)); 
		}
	}

	public function adminDocumento($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$documento = $this->api_model_documento->get_admin_documento($id);

			$post = array(
				'id' => $documento->id,
					'titulo' => $documento->titulo,
					'archivo' => base_url('media/pdf/documento/'.$documento->archivo),
					'created_at' => $documento->created_at
			);
			

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($post)); 
		}
	}

	public function createDocumento()
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

			if ($_FILES && $_FILES['archivo']['name']) {

				$config['upload_path']          = './media/pdf/documento/';
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
	        	$documentoData = array(
					'titulo' => $titulo,
					'archivo' => $filename,
					'created_at' => date('Y-m-d H:i:s', time())
				);

				$id = $this->api_model_documento->insertDocumento($documentoData);

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

	public function updateDocumento($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$documento = $this->api_model_documento->get_admin_documento($id);
			$filename = $documento->archivo;

			$titulo = $this->input->post('titulo');
			

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['archivo']['name']) {

				$config['upload_path']          = './media/pdf/documento/';
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
	   
					if($documento->archivo && file_exists(FCPATH.'media/pdf/documento/'.$documento->archivo))
					{
						unlink(FCPATH.'media/pdf/documento/'.$documento->archivo);
					}

	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$documentoData = array(
					'titulo' => $titulo,
					'archivo' => $filename,
				);

				$this->api_model_documento->updateDocumento($id, $documentoData);

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

	public function deleteDocumento($id)
	{
		header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$documento = $this->api_model_documento->get_admin_documento($id);

			if($documento->archivo && file_exists(FCPATH.'media/pdf/documento/'.$documento->archivo))
			{
				unlink(FCPATH.'media/pdf/documento/'.$documento->archivo);
			}

			$this->api_model_documento->deleteDocumento($id);

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
