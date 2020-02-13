<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_Revista extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('api_model');
		$this->load->model('api_model_revista');
		$this->load->helper('url');
		$this->load->helper('text');
	}


//Revista

public function revistas()
	{
		header("Access-Control-Allow-Origin: *");

		$revistas = $this->api_model_revista->get_revistas($featured=false, $recentpost=false);

		$posts = array();
		if(!empty($revistas)){
			foreach($revistas as $revista){


				$posts[] = array(
					'id' => $revista->id,
					'volumen' => $revista->volumen,
					'numero' => $revista->numero,
					'fecha' => $revista->fecha,
					'archivo' => base_url('media/pdf/revista/'.$revista->archivo),
					'image' => base_url('media/images/revista/'.$revista->image),
					'created_at' => $revista->created_at
				);
			}
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($posts));
	}


	public function revista($id)
	{
		header("Access-Control-Allow-Origin: *");
		
		$revista = $this->api_model_revista->get_revista($id);

		$post = array(
			'id' => $revista->id,
			'volumen' => $revista->volumen,
			'numero' => $revista->numero,
			'fecha' => $revista->fecha,
			'archivo' => base_url('media/pdf/revista/'.$revista->archivo),
			'image' => base_url('media/images/revista/'.$revista->image),
			'created_at' => $revista->created_at
		);
		
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($post));
	}

	public function recent_revistas()
	{
		header("Access-Control-Allow-Origin: *");

		$revistas = $this->api_model_revista->get_revistas($featured=false, $recentpost=5);

		$posts = array();
		if(!empty($revistas)){
			foreach($revistas as $revista){

				$posts[] = array(
					'id' => $revista->id,
					'volumen' => $revista->volumen,
					'numero' => $revista->numero,
					'fecha' => $revista->fecha,
					'archivo' => base_url('media/pdf/revista/'.$revista->archivo),
					'image' => base_url('media/images/revista/'.$revista->image),
					'created_at' => $revista->created_at
				);
			}
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($posts));
	}

	//


	//CRUD Afiliaciones

	public function adminRevistas()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$revistas = $this->api_model_revista->get_admin_revistas();
			foreach($revistas as $revista) {
				$posts[] = array(
					'id' => $revista->id,
					'volumen' => $revista->volumen,
					'numero' => $revista->numero,
					'fecha' => $revista->fecha,
					'archivo' => base_url('media/pdf/revista/'.$revista->archivo),
					'image' => base_url('media/images/revista/'.$revista->image),
					'created_at' => $revista->created_at
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($posts)); 
		}
	}

	public function adminRevista($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$revista = $this->api_model_revista->get_admin_revista($id);

			$post = array(
				'id' => $revista->id,
					'volumen' => $revista->volumen,
					'numero' => $revista->numero,
					'fecha' => $revista->fecha,
					'archivo' => base_url('media/pdf/revista/'.$revista->archivo),
					'image' => base_url('media/images/revista/'.$revista->image),
					'created_at' => $revista->created_at
			);
			

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($post)); 
		}
	}

	public function createRevista()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$volumen = $this->input->post('volumen');
			$numero = $this->input->post('numero');
			$fecha = $this->input->post('fecha');

			$archivoname = NULL;
			$filename = NULL;

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['archivo']['name']) {

				$config['upload_path']          = './media/pdf/revista/';
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
            		$archivoname = $uploadData['file_name'];
	            }
			}
			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/revista/';
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
	        	$revistaData = array(
					'volumen' => $volumen,
					'numero' => $numero,
					'fecha' => $fecha,
					'archivo' => $archivoname,
					'image' => $filename,
					'created_at' => date('Y-m-d H:i:s', time())
				);

				$id = $this->api_model_revista->insertRevista($revistaData);

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

	public function updateRevista($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$revista = $this->api_model_revista->get_admin_revista($id);
			$archivoname = $revista->archivo;
			$filename = $revista->image;

			$volumen = $this->input->post('volumen');
			$numero = $this->input->post('numero');
			$fecha = $this->input->post('fecha');

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['archivo']['name']) {

				$config['upload_path']          = './media/pdf/revista/';
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
	   
					if($revista->archivo && file_exists(FCPATH.'media/pdf/revista/'.$revista->archivo))
					{
						unlink(FCPATH.'media/pdf/revista/'.$revista->archivo);
					}

	            	$uploadData = $this->upload->data();
            		$archivoname = $uploadData['file_name'];
	            }
			}
			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/revista/';
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
	   
					if($revista->image && file_exists(FCPATH.'media/images/revista/'.$revista->image))
					{
						unlink(FCPATH.'media/images/revista/'.$revista->image);
					}

	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$revistaData = array(
					'volumen' => $volumen,
					'numero' => $numero,
					'fecha' => $fecha,
					'archivo' => $archivoname,
					'image' => $filename,
				);

				$this->api_model_revista->updateRevista($id, $revistaData);

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

	public function deleteRevista($id)
	{
		header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$revista = $this->api_model_revista->get_admin_revista($id);

			if($revista->archivo && file_exists(FCPATH.'media/pdf/revista/'.$revista->archivo))
			{
				unlink(FCPATH.'media/pdf/revista/'.$revista->archivo);
			}
			if($revista->image && file_exists(FCPATH.'media/images/revista/'.$revista->image))
			{
				unlink(FCPATH.'media/images/revista/'.$revista->image);
			}

			$this->api_model_revista->deleteRevista($id);

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
