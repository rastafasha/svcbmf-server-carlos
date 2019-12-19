<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_Galeria extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('api_model');
		$this->load->helper('url');
		$this->load->helper('text');
	}

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


	
	
}
