<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_Timeline extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('api_model');
		$this->load->model('api_model_timeline');
		$this->load->helper('url');
		$this->load->helper('text');
	}

	public function timelines()
	{
		header("Access-Control-Allow-Origin: *");

		$timelines = $this->api_model_timeline->get_timelines($featured=false, $recentpost=false);

		$posts = array();
		if(!empty($timelines)){
			foreach($timelines as $timeline){

                $short_desc = strip_tags(character_limiter($timeline->description, 70));
				$author = $timeline->first_name.' '.$timeline->last_name;

				$posts[] = array(
					'id' => $timeline->id,
                    'title' => $timeline->title,
                    'youtube' => $timeline->youtube,
                    'facebook' => $timeline->facebook,
					'short_desc' => html_entity_decode($short_desc),
					'author' => $author,
					'image' => base_url('media/images/timeline/'.$timeline->image),
					'created_at' => $timeline->created_at
				);
			}
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($posts));
	}

	public function featured_timelines()
	{
		header("Access-Control-Allow-Origin: *");

		$timelines = $this->api_model_timeline->get_timelines($featured=true, $recentpost=false);

		$posts = array();
		if(!empty($timelines)){
			foreach($timelines as $timeline){
				
                $short_desc = strip_tags(character_limiter($timeline->description, 70));
                $author = $timeline->first_name.' '.$timeline->last_name;
                
				$posts[] = array(
					'id' => $timeline->id,
                    'title' => $timeline->title,
                    'youtube' => $timeline->youtube,
                    'facebook' => $timeline->facebook,
					'short_desc' => html_entity_decode($short_desc),
					'author' => $author,
					'image' => base_url('media/images/timeline/'.$timeline->image),
					'created_at' => $timeline->created_at
				);
			}
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($posts));
	}

	public function timeline($id)
	{
		header("Access-Control-Allow-Origin: *");
		
		$timeline = $this->api_model_timeline->get_timeline($id);

		$author = $timeline->first_name.' '.$timeline->last_name;

		$post = array(
			'id' => $timeline->id,
                    'title' => $timeline->title,
                    'youtube' => $timeline->youtube,
                    'facebook' => $timeline->facebook,
					'short_desc' => html_entity_decode($short_desc),
					'author' => $author,
					'image' => base_url('media/images/timeline/'.$timeline->image),
					'created_at' => $timeline->created_at
		);
		
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($post));
	}

	public function recent_timelines()
	{
		header("Access-Control-Allow-Origin: *");

		$timeline = $this->api_model_timeline->get_timelines($featured=false, $recentpost=5);

		$posts = array();
		if(!empty($timeline)){
			foreach($timeline as $timeline){
				
				$short_desc = strip_tags(character_limiter($timeline->description, 70));
				$author = $timeline->first_name.' '.$timeline->last_name;

				$posts[] = array(
					'id' => $timeline->id,
                    'title' => $timeline->title,
                    'youtube' => $timeline->youtube,
                    'facebook' => $timeline->facebook,
					'short_desc' => html_entity_decode($short_desc),
					'author' => $author,
					'image' => base_url('media/images/timeline/'.$timeline->image),
					'created_at' => $timeline->created_at
				);
			}
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($posts));
	}

	//


	//CRUD timeline

	public function adminTimelines()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$timelines = $this->api_model_timeline->get_admin_timelines();
			foreach($timelines as $timeline) {
				$posts[] = array(
					'id' => $timeline->id,
                    'title' => $timeline->title,
                    'youtube' => $timeline->youtube,
                    'facebook' => $timeline->facebook,
					'short_desc' => html_entity_decode($short_desc),
					'author' => $author,
					'image' => base_url('media/images/timeline/'.$timeline->image),
					'created_at' => $timeline->created_at
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($posts)); 
		}
	}

	public function adminTimeline($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$timeline = $this->api_model_timeline->get_admin_timeline($id);

			$post = array(
				'id' => $timeline->id,
                    'title' => $timeline->title,
                    'youtube' => $timeline->youtube,
                    'facebook' => $timeline->facebook,
					'short_desc' => html_entity_decode($short_desc),
					'author' => $author,
					'image' => base_url('media/images/timeline/'.$timeline->image),
					'created_at' => $timeline->created_at,
				'is_featured' => $timeline->is_featured,
				'is_active' => $timeline->is_active
			);
			

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($post)); 
		}
	}

	public function createTimeline()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$title = $this->input->post('title');
			$youtube = $this->input->post('youtube');
			$facebook = $this->input->post('facebook');
			$description = $this->input->post('description');
			$is_featured = $this->input->post('is_featured');
			$is_active = $this->input->post('is_active');

			$filename = NULL;

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/timeline/';
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
	        	$timelineData = array(
					'title' => $title,
					'youtube' => $youtube,
					'facebook' => $facebook,
					'user_id' => 1,
					'description' => $description,
					'image' => $filename,
					'is_featured' => $is_featured,
					'is_active' => $is_active,
					'created_at' => date('Y-m-d H:i:s', time())
				);

				$id = $this->api_model_timeline->insertTimeline($timelineData);

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

	public function updateTimeline($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$timeline = $this->api_model_timeline->get_admin_timeline($id);
			$filename = $timeline->image;

			$title = $this->input->post('title');
			$youtube = $this->input->post('youtube');
			$facebook = $this->input->post('facebook');
			$description = $this->input->post('description');
			$is_featured = $this->input->post('is_featured');
			$is_active = $this->input->post('is_active');

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/timeline/';
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
	   
					if($timeline->image && file_exists(FCPATH.'media/images/timeline/'.$timeline->image))
					{
						unlink(FCPATH.'media/images/timeline/'.$timeline->image);
					}

	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$timelineData = array(
					'title' => $title,
					'user_id' => 1,
					'description' => $description,
					'image' => $filename,
					'is_featured' => $is_featured,
					'is_active' => $is_active
				);

				$this->api_model_timeline->updateTimeline($id, $timelineData);

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

	public function deleteTimeline($id)
	{
		header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$timeline = $this->api_model_timeline->get_admin_timeline($id);

			if($timeline->image && file_exists(FCPATH.'media/images/timeline/'.$timeline->image))
			{
				unlink(FCPATH.'media/images/timeline/'.$timeline->image);
			}

			$this->api_model_timeline->deleteTimeline($id);

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
