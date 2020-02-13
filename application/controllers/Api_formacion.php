<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_Formacion extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('api_model');
		$this->load->model('api_model_formacion');
		$this->load->helper('url');
		$this->load->helper('text');
	}

	public function formacions()
	{
		header("Access-Control-Allow-Origin: *");

		$formacions = $this->api_model_formacion->get_formacions($featured=false, $recentpost=false);

		$posts = array();
		if(!empty($formacions)){
			foreach($formacions as $formacion){


				$posts[] = array(
					'id' => $formacion->id,
					'title' => $formacion->title,
					'tipoPrograma' => $formacion->tipoPrograma,
					'aval' => $formacion->aval,
					'tiempoFormacion' => $formacion->tiempoFormacion,
					'frecuencia' => $formacion->frecuencia,
					'director' => $formacion->director,
					'is_active' => $formacion->is_active,
					'created_at' => $formacion->created_at
				);
			}
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($posts));
	}

	public function featured_formacions()
	{
		header("Access-Control-Allow-Origin: *");

		$formacions = $this->api_model_formacion->get_formacions($featured=true, $recentpost=false);

		$posts = array();
		if(!empty($formacions)){
			foreach($formacions as $formacion){
				

				$posts[] = array(
					'id' => $formacion->id,
					'title' => $formacion->title,
					'tipoPrograma' => $formacion->tipoPrograma,
					'aval' => $formacion->aval,
					'tiempoFormacion' => $formacion->tiempoFormacion,
					'frecuencia' => $formacion->frecuencia,
					'director' => $formacion->director,
					'is_active' => $formacion->is_active,
					'created_at' => $formacion->created_at
				);
			}
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($posts));
	}

	public function formacion($id)
	{
		header("Access-Control-Allow-Origin: *");
		
		$formacion = $this->api_model_formacion->get_formacion($id);

		$post = array(
			'id' => $formacion->id,
					'title' => $formacion->title,
					'tipoPrograma' => $formacion->tipoPrograma,
					'aval' => $formacion->aval,
					'tiempoFormacion' => $formacion->tiempoFormacion,
					'frecuencia' => $formacion->frecuencia,
					'director' => $formacion->director,
					'is_active' => $formacion->is_active,
					'created_at' => $formacion->created_at
		);
		
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($post));
	}

	public function recent_formacions()
	{
		header("Access-Control-Allow-Origin: *");

		$formacions = $this->api_model_formacion->get_formacions($featured=false, $recentpost=5);

		$posts = array();
		if(!empty($formacions)){
			foreach($formacions as $formacion){
				

				$posts[] = array(
					'id' => $formacion->id,
					'title' => $formacion->title,
					'tipoPrograma' => $formacion->tipoPrograma,
					'aval' => $formacion->aval,
					'tiempoFormacion' => $formacion->tiempoFormacion,
					'frecuencia' => $formacion->frecuencia,
					'director' => $formacion->director,
					'is_active' => $formacion->is_active,
					'created_at' => $formacion->created_at
				);
			}
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($posts));
	}

	//


	//CRUD formacion

	public function adminFormacions()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$formacions = $this->api_model_formacion->get_admin_formacions();
			foreach($formacions as $formacion) {
				$posts[] = array(
					'id' => $formacion->id,
					'title' => $formacion->title,
					'tipoPrograma' => $formacion->tipoPrograma,
					'aval' => $formacion->aval,
					'tiempoFormacion' => $formacion->tiempoFormacion,
					'frecuencia' => $formacion->frecuencia,
					'director' => $formacion->director,
					'is_active' => $formacion->is_active,
					'created_at' => $formacion->created_at
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($posts)); 
		}
	}

	public function adminFormacion($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$formacion = $this->api_model_formacion->get_admin_formacion($id);

			$post = array(
				'id' => $formacion->id,
					'title' => $formacion->title,
					'tipoPrograma' => $formacion->tipoPrograma,
					'aval' => $formacion->aval,
					'tiempoFormacion' => $formacion->tiempoFormacion,
					'frecuencia' => $formacion->frecuencia,
					'director' => $formacion->director,
					'is_active' => $formacion->is_active,
					'created_at' => $formacion->created_at
			);
			

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($post)); 
		}
	}

	public function createFormacion()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$title = $this->input->post('title');
			$tipoPrograma = $this->input->post('tipoPrograma');
			$aval = $this->input->post('aval');
			$tiempoFormacion = $this->input->post('tiempoFormacion');
			$frecuencia = $this->input->post('frecuencia');
			$frecuencia = $this->input->post('frecuencia');
			$director = $this->input->post('director');
			$is_featured = $this->input->post('is_featured');
			$is_active = $this->input->post('is_active');

            $isUploadError = FALSE;

			if( ! $isUploadError) {
	        	$formacionData = array(
					'title' => $title,
					'user_id' => 1,
					'tipoPrograma' => $tipoPrograma,
					'aval' => $aval,
					'tiempoFormacion' => $tiempoFormacion,
					'frecuencia' => $frecuencia,
					'director' => $director,
					'is_active' => $is_active,
					'is_featured' => $is_featured,
					'created_at' => date('Y-m-d H:i:s', time())
				);

				$id = $this->api_model_formacion->insertFormacion($formacionData);

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

	public function updateFormacion($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$formacion = $this->api_model_formacion->get_admin_formacion($id);

			$title = $this->input->post('title');
			$tipoPrograma = $this->input->post('tipoPrograma');
			$aval = $this->input->post('aval');
			$tiempoFormacion = $this->input->post('tiempoFormacion');
			$frecuencia = $this->input->post('frecuencia');
			$frecuencia = $this->input->post('frecuencia');
			$director = $this->input->post('director');
			$is_featured = $this->input->post('is_featured');
			$is_active = $this->input->post('is_active');

			$isUploadError = FALSE;


			if( ! $isUploadError) {
	        	$formacionData = array(
					'title' => $title,
					'tipoPrograma' => $tipoPrograma,
					'aval' => $aval,
					'tiempoFormacion' => $tiempoFormacion,
					'frecuencia' => $frecuencia,
					'director' => $director,
					'is_featured' => $is_featured,
					'is_active' => $is_active
				);

				$this->api_model_formacion->updateFormacion($id, $formacionData);

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

	public function deleteFormacion($id)
	{
		header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$formacion = $this->api_model_formacion->get_admin_formacion($id);

			$this->api_model_formacion->deleteFormacion($id);

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
