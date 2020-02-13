<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_portada extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('api_model');
		$this->load->helper('url');
		$this->load->helper('text');
	}


//imgrevista

public function imgrevistas()
	{
		header("Access-Control-Allow-Origin: *");

		$imgrevistas = $this->api_model->get_imgrevistas($featured=false, $recentpost=false);

		$posts = array();
		if(!empty($imgrevistas)){
			foreach($imgrevistas as $imgrevista){


				$posts[] = array(
					'id' => $imgrevista->id,
					'image' => base_url('media/images/revista/'.$imgrevista->image)
				);
			}
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($posts));
	}


	public function imgrevista($id)
	{
		header("Access-Control-Allow-Origin: *");
		
		$imgrevista = $this->api_model->get_imgrevista($id);

		$post = array(
			'id' => $imgrevista->id,
			'image' => base_url('media/images/revista/'.$imgrevista->image)
		);
		
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($post));
	}

	public function recent_imgrevistas()
	{
		header("Access-Control-Allow-Origin: *");

		$imgrevistas = $this->api_model->get_imgrevistas($featured=false, $recentpost=5);

		$posts = array();
		if(!empty($imgrevistas)){
			foreach($imgrevistas as $imgrevista){

				$posts[] = array(
					'id' => $imgrevista->id,
					'image' => base_url('media/images/revista/'.$imgrevista->image)
				);
			}
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($posts));
	}

	//


	//CRUD Afiliaciones

	public function adminimgrevistas()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$imgrevistas = $this->api_model->get_admin_imgrevistas();
			foreach($imgrevistas as $imgrevista) {
				$posts[] = array(
					'id' => $imgrevista->id,
					'image' => base_url('media/images/revista/'.$imgrevista->image)
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($posts)); 
		}
	}

	public function adminimgrevista($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$imgrevista = $this->api_model->get_admin_imgrevista($id);

			$post = array(
				'id' => $imgrevista->id,
					'image' => base_url('media/images/revista/'.$imgrevista->image)
			);
			

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($post)); 
		}
	}

	public function createimgrevista()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$filename = NULL;

			$isUploadError = FALSE;

			
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
	        	$imgrevistaData = array(
					'image' => $filename
				);

				$id = $this->api_model->insertimgrevista($imgrevistaData);

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

	public function updateimgrevista($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$imgrevista = $this->api_model->get_admin_imgrevista($id);
			$filename = $imgrevista->image;


			$isUploadError = FALSE;

			
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
	   
					if($imgrevista->image && file_exists(FCPATH.'media/images/revista/'.$imgrevista->image))
					{
						unlink(FCPATH.'media/images/revista/'.$imgrevista->image);
					}

	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$imgrevistaData = array(
					'image' => $filename,
				);

				$this->api_model->updateImgrevista($id, $imgrevistaData);

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

	public function deleteImgrevista($id)
	{
		header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$imgrevista = $this->api_model->get_admin_imgrevista($id);

			if($imgrevista->image && file_exists(FCPATH.'media/images/revista/'.$imgrevista->image))
			{
				unlink(FCPATH.'media/images/revista/'.$imgrevista->image);
			}

			$this->api_model->deleteImgrevista($id);

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
