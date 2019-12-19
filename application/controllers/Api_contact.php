<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_Contact extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('api_model');
		$this->load->helper('url');
		$this->load->helper('text');
    }
    


	// contact sendmail

	public function sendcontact()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
		header('Access-Control-Allow-Headers: Accept,Accept-Language,Content-Language,Content-Type');

		$formdata = json_decode(file_get_contents('php://input'), true);

		if( ! empty($formdata)) {

			$name = $formdata['name'];
			$email = $formdata['email'];
			$ciudad = $formdata['ciudad'];
			$phone = $formdata['phone'];
			$message = $formdata['message'];

			$contactData = array(
				'name' => $name,
				'email' => $email,
				'ciudad' => $ciudad,
				'phone' => $phone,
				'message' => $message,
				'created_at' => date('Y-m-d H:i:s', time())
			);
			
			$id = $this->api_model_contact->insert_contact($contactData);

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
		$message .= '<p><strong>Nombre y Apellido: </strong>'.$contactData['name'].'</p>';
		$message .= '<p><strong>Email: </strong>'.$contactData['email'].'</p>';
		$message .= '<p><strong>Teléfono: </strong>'.$contactData['phone'].'</p>';
		$message .= '<p><strong>Ciudad: </strong>'.$contactData['ciudad'].'</p>';
		$message .= '<p><strong>Mensaje: </strong>'.$contactData['message'].'</p>';
		$message .= '<br />Gracias!';

		$this->load->library('email');

		$config['protocol'] = 'sendmail';
		$config['mailpath'] = '/usr/sbin/sendmail';
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;
		$config['mailtype'] = 'html';

		$this->email->initialize($config);

		$this->email->from('mercadocreativo@gmail.com', 'SVCBMF');
		$this->email->to('mercadocreativo@gmail.com');
		$this->email->cc('mercadocreativo@hotmail.com');
		$this->email->bcc('mercadocreativo@gmail.com');

		$this->email->subject('Contact Form');
		$this->email->message($message);

		$this->email->send();
	}
//



public function contacts()
	{
		header("Access-Control-Allow-Origin: *");

		$contacts = $this->api_model->get_contacts();

		$posts = array();
		if(!empty($contacts)){
			foreach($contacts as $contact){


				$posts[] = array(
					'id' => $contact->id,
					'name' => $contact->name,
					'email' => $contact->email,
					'phone' => $contact->phone,
					'message' => $contact->message,
					'created_at' => $contact->created_at
				);
			}
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($posts));
	}


	public function contact($id)
	{
		header("Access-Control-Allow-Origin: *");
		
		$contact = $this->api_model->get_contact($id);

		$post = array(
			'id' => $contact->id,
					'name' => $contact->name,
					'email' => $contact->email,
					'phone' => $contact->phone,
					'message' => $contact->message,
					'created_at' => $contact->created_at
		);
		
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($post));
	}

	public function recent_contacts()
	{
		header("Access-Control-Allow-Origin: *");

		$contacts = $this->api_model->get_contacts($featured=false, $recentpost=5);

		$posts = array();
		if(!empty($contacts)){
			foreach($contacts as $contact){

				$posts[] = array(
					'id' => $contact->id,
					'name' => $contact->name,
					'email' => $contact->email,
					'phone' => $contact->phone,
					'message' => $contact->message,
					'created_at' => $contact->created_at
				);
			}
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($posts));
	}

	//


	//CRUD contact

	public function adminContacts()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$contacts = $this->api_model->get_admin_contacts();
			foreach($contacts as $contact) {
				$posts[] = array(
					'id' => $contact->id,
					'name' => $contact->name,
					'email' => $contact->email,
					'phone' => $contact->phone,
					'message' => $contact->message,
					'created_at' => $contact->created_at
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($posts)); 
		}
	}

	public function adminContact($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$contact = $this->api_model->get_admin_contact($id);

			$post = array(
				'id' => $contact->id,
					'name' => $contact->name,
					'email' => $contact->email,
					'phone' => $contact->phone,
					'message' => $contact->message,
					'created_at' => $contact->created_at
			);
			

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($post)); 
		}
	}


	public function deleteContact($id)
	{
		header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$contact = $this->api_model->get_admin_contact($id);

			$this->api_model->deleteContact($id);

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
