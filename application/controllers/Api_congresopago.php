<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_Congresopago extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('api_model_congresopago');
		$this->load->model('api_model');
		$this->load->helper('url');
		$this->load->helper('text');
	}

	


	// get congreso




	public function congresos()
	{
		header("Access-Control-Allow-Origin: *");

		$congresos = $this->api_model_congresopago->get_congresos($featured=false, $recentpost=false);

		$posts = array();
		if(!empty($congresos)){
			foreach($congresos as $congreso){


				$posts[] = array(
					'id' => $congreso->id,
					'nombre' => $congreso->nombre,
					'apellido' => $congreso->apellido,
					'nacionalidad' => $congreso->nacionalidad,
					'membresia' => $congreso->membresia,
					'cedulapassport' => $congreso->cedulapassport,
					'dirprofesional' => $congreso->dirprofesional,
					'edad' => $congreso->edad,
					'pais' => $congreso->pais,
					'telefono' => $congreso->telefono,
					'email' => $congreso->email,
					'verificaemail' => $congreso->verificaemail,
					'condicionAcademica' => $congreso->condicionAcademica,
					'descripcionCursos' => $congreso->descripcionCursos,
					'anualidades' => $congreso->anualidades,
					'inscripcionSvcbmf' => $congreso->inscripcionSvcbmf,
					'otrosItemsPagados' => $congreso->otrosItemsPagados,
					'cursos' => $congreso->cursos,
					'especialidad' => $congreso->especialidad,
					'descOtrosItemsPagados' => $congreso->descOtrosItemsPagados,
					'tipoPago' => $congreso->tipoPago,
					'numtransferencia' => $congreso->codConfirmacion,
					'codConfirmacion' => $congreso->montocancelado,
					'fechaNac' => $congreso->fechaNac,
					'tipoPagonscripcion' => $congreso->tipoPagonscripcion,
					'observaciones' => $congreso->observaciones,
					'fecha' => $congreso->fecha,
					'is_active' => $congreso->is_active,
					'image' => base_url('media/images/congresoPagos/'.$congreso->image),
					'createdAt' => $congreso->createdAt
				);
			}
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($posts));
	}

	public function featured_congresos()
	{
		header("Access-Control-Allow-Origin: *");

		$congresos = $this->api_model_congresopago->get_congresos($featured=true, $recentpost=false);

		$posts = array();
		if(!empty($congresos)){
			foreach($congresos as $congreso){
				

				$posts[] = array(
					'id' => $congreso->id,
					'nombre' => $congreso->nombre,
					'apellido' => $congreso->apellido,
					'nacionalidad' => $congreso->nacionalidad,
					'membresia' => $congreso->membresia,
					'cedulapassport' => $congreso->cedulapassport,
					'dirprofesional' => $congreso->dirprofesional,
					'edad' => $congreso->edad,
					'pais' => $congreso->pais,
					'telefono' => $congreso->telefono,
					'email' => $congreso->email,
					'verificaemail' => $congreso->verificaemail,
					'condicionAcademica' => $congreso->condicionAcademica,
					'descripcionCursos' => $congreso->descripcionCursos,
					'anualidades' => $congreso->anualidades,
					'inscripcionSvcbmf' => $congreso->inscripcionSvcbmf,
					'otrosItemsPagados' => $congreso->otrosItemsPagados,
					'cursos' => $congreso->cursos,
					'especialidad' => $congreso->especialidad,
					'descOtrosItemsPagados' => $congreso->descOtrosItemsPagados,
					'tipoPago' => $congreso->tipoPago,
					'numtransferencia' => $congreso->codConfirmacion,
					'codConfirmacion' => $congreso->montocancelado,
					'fechaNac' => $congreso->fechaNac,
					'tipoPagonscripcion' => $congreso->tipoPagonscripcion,
					'observaciones' => $congreso->observaciones,
					'fecha' => $congreso->fecha,
					'is_active' => $congreso->is_active,
					'image' => base_url('media/images/congresoPagos/'.$congreso->image),
					'createdAt' => $congreso->createdAt
				);
			}
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($posts));
	}

	public function congreso($id)
	{
		header("Access-Control-Allow-Origin: *");
		
		$congreso = $this->api_model_congresopago->get_congreso($id);


		$post = array(
			'id' => $congreso->id,
					'nombre' => $congreso->nombre,
					'apellido' => $congreso->apellido,
					'nacionalidad' => $congreso->nacionalidad,
					'membresia' => $congreso->membresia,
					'cedulapassport' => $congreso->cedulapassport,
					'dirprofesional' => $congreso->dirprofesional,
					'edad' => $congreso->edad,
					'pais' => $congreso->pais,
					'telefono' => $congreso->telefono,
					'email' => $congreso->email,
					'verificaemail' => $congreso->verificaemail,
					'condicionAcademica' => $congreso->condicionAcademica,
					'descripcionCursos' => $congreso->descripcionCursos,
					'anualidades' => $congreso->anualidades,
					'inscripcionSvcbmf' => $congreso->inscripcionSvcbmf,
					'otrosItemsPagados' => $congreso->otrosItemsPagados,
					'cursos' => $congreso->cursos,
					'especialidad' => $congreso->especialidad,
					'descOtrosItemsPagados' => $congreso->descOtrosItemsPagados,
					'tipoPago' => $congreso->tipoPago,
					'numtransferencia' => $congreso->codConfirmacion,
					'codConfirmacion' => $congreso->montocancelado,
					'fechaNac' => $congreso->fechaNac,
					'tipoPagonscripcion' => $congreso->tipoPagonscripcion,
					'observaciones' => $congreso->observaciones,
					'fecha' => $congreso->fecha,
					'is_active' => $congreso->is_active,
					'image' => base_url('media/images/congresoPagos/'.$congreso->image),
					'createdAt' => $congreso->createdAt
		);
		
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($post));
	}

	public function recent_congresos()
	{
		header("Access-Control-Allow-Origin: *");

		$congresos = $this->api_model_congresopago->get_congresos($featured=false, $recentpost=5);

		$posts = array();
		if(!empty($congresos)){
			foreach($congresos as $congreso){
				

				$posts[] = array(
					'id' => $congreso->id,
					'nombre' => $congreso->nombre,
					'apellido' => $congreso->apellido,
					'nacionalidad' => $congreso->nacionalidad,
					'membresia' => $congreso->membresia,
					'cedulapassport' => $congreso->cedulapassport,
					'dirprofesional' => $congreso->dirprofesional,
					'edad' => $congreso->edad,
					'pais' => $congreso->pais,
					'telefono' => $congreso->telefono,
					'email' => $congreso->email,
					'verificaemail' => $congreso->verificaemail,
					'condicionAcademica' => $congreso->condicionAcademica,
					'descripcionCursos' => $congreso->descripcionCursos,
					'anualidades' => $congreso->anualidades,
					'inscripcionSvcbmf' => $congreso->inscripcionSvcbmf,
					'otrosItemsPagados' => $congreso->otrosItemsPagados,
					'cursos' => $congreso->cursos,
					'especialidad' => $congreso->especialidad,
					'descOtrosItemsPagados' => $congreso->descOtrosItemsPagados,
					'tipoPago' => $congreso->tipoPago,
					'numtransferencia' => $congreso->codConfirmacion,
					'codConfirmacion' => $congreso->montocancelado,
					'fechaNac' => $congreso->fechaNac,
					'tipoPagonscripcion' => $congreso->tipoPagonscripcion,
					'observaciones' => $congreso->observaciones,
					'fecha' => $congreso->fecha,
					'is_active' => $congreso->is_active,
					'image' => base_url('media/images/congresoPagos/'.$congreso->image),
					'createdAt' => $congreso->createdAt
				);
			}
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($posts));
	}

	//


	//CRUD congreso

	public function adminCongresos()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$congresos = $this->api_model_congresopago->get_admin_congresos();
			foreach($congresos as $congreso) {
				$posts[] = array(
					'id' => $congreso->id,
					'nombre' => $congreso->nombre,
					'apellido' => $congreso->apellido,
					'nacionalidad' => $congreso->nacionalidad,
					'membresia' => $congreso->membresia,
					'cedulapassport' => $congreso->cedulapassport,
					'dirprofesional' => $congreso->dirprofesional,
					'edad' => $congreso->edad,
					'pais' => $congreso->pais,
					'telefono' => $congreso->telefono,
					'email' => $congreso->email,
					'verificaemail' => $congreso->verificaemail,
					'condicionAcademica' => $congreso->condicionAcademica,
					'descripcionCursos' => $congreso->descripcionCursos,
					'anualidades' => $congreso->anualidades,
					'inscripcionSvcbmf' => $congreso->inscripcionSvcbmf,
					'otrosItemsPagados' => $congreso->otrosItemsPagados,
					'cursos' => $congreso->cursos,
					'especialidad' => $congreso->especialidad,
					'descOtrosItemsPagados' => $congreso->descOtrosItemsPagados,
					'tipoPago' => $congreso->tipoPago,
					'numtransferencia' => $congreso->codConfirmacion,
					'codConfirmacion' => $congreso->montocancelado,
					'fechaNac' => $congreso->fechaNac,
					'tipoPagonscripcion' => $congreso->tipoPagonscripcion,
					'observaciones' => $congreso->observaciones,
					'fecha' => $congreso->fecha,
					'is_active' => $congreso->is_active,
					'image' => base_url('media/images/congresoPagos/'.$congreso->image),
					'createdAt' => $congreso->createdAt
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($posts)); 
		}
	}

	public function adminCongreso($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$congreso = $this->api_model_congresopago->get_admin_congreso($id);

			$post = array(
				'id' => $congreso->id,
					'nombre' => $congreso->nombre,
					'apellido' => $congreso->apellido,
					'nacionalidad' => $congreso->nacionalidad,
					'membresia' => $congreso->membresia,
					'cedulapassport' => $congreso->cedulapassport,
					'dirprofesional' => $congreso->dirprofesional,
					'edad' => $congreso->edad,
					'pais' => $congreso->pais,
					'telefono' => $congreso->telefono,
					'email' => $congreso->email,
					'verificaemail' => $congreso->verificaemail,
					'condicionAcademica' => $congreso->condicionAcademica,
					'descripcionCursos' => $congreso->descripcionCursos,
					'anualidades' => $congreso->anualidades,
					'inscripcionSvcbmf' => $congreso->inscripcionSvcbmf,
					'otrosItemsPagados' => $congreso->otrosItemsPagados,
					'cursos' => $congreso->cursos,
					'especialidad' => $congreso->especialidad,
					'descOtrosItemsPagados' => $congreso->descOtrosItemsPagados,
					'cursando' => $congreso->cursando,
					'tipoPago' => $congreso->tipoPago,
					'numtransferencia' => $congreso->codConfirmacion,
					'codConfirmacion' => $congreso->montocancelado,
					'fechaNac' => $congreso->fechaNac,
					'tipoPagonscripcion' => $congreso->tipoPagonscripcion,
					'observaciones' => $congreso->observaciones,
					'fecha' => $congreso->fecha,
					'is_active' => $congreso->is_active,
					'image' => base_url('media/images/congresoPagos/'.$congreso->image),
					'createdAt' => $congreso->createdAt
			);
			

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($post)); 
		}
	}

	/*public function createCongreso()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$nombre = $this->input->post('nombre');
			$apellido = $this->input->post('apellido');
			$tratamiento = $this->input->post('tratamiento');
			$organizacion = $this->input->post('organizacion');
			$cedulapassport = $this->input->post('cedulapassport');
			$dirprofesional = $this->input->post('dirprofesional');
			$ciudad = $this->input->post('ciudad');
			$pais = $this->input->post('pais');
			$telefono = $this->input->post('telefono');
			$email = $this->input->post('email');
			$verificaemail = $this->input->post('verificaemail');
			$userinstagram = $this->input->post('userinstagram');
			$userfacebook = $this->input->post('userfacebook');
			$usertwitter = $this->input->post('usertwitter');
			$sitioweb = $this->input->post('sitioweb');
			$pregrado = $this->input->post('pregrado');
			$miembroActivo = $this->input->post('miembroActivo');
			$miembroAdherente = $this->input->post('miembroAdherente');
			$especialidad = $this->input->post('especialidad');
			$esEstudiante = $this->input->post('esEstudiante');
			$cursando = $this->input->post('cursando');
			$tipoPago = $this->input->post('tipoPago');
			$numtransferencia = $this->input->post('numtransferencia');
			$montocancelado = $this->input->post('montocancelado');
			$banco = $this->input->post('banco');
			$efectivoStand = $this->input->post('efectivoStand');
			$standfactura = $this->input->post('standfactura');
			$tipoPagonscripcion = $this->input->post('tipoPagonscripcion');
			$fecha = $this->input->post('fecha');
			$observaciones = $this->input->post('observaciones');
			$otrosmontos = $this->input->post('otrosmontos');
			$is_active = $this->input->post('is_active');

			$filename = NULL;

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/congresoPago/';
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
	        	$congresoData = array(
					'nombre' => $nombre,
					'apellido' => $apellido,
					'tratamiento' => $tratamiento,
					'organizacion' => $organizacion,
					'cedulapassport' => $cedulapassport,
					'dirprofesional' => $dirprofesional,
					'ciudad' => $ciudad,
					'pais' => $pais,
					'telefono' => $telefono,
					'email' => $email,
					'verificaemail' => $verificaemail,
					'userinstagram' => $userinstagram,
					'userfacebook' => $userfacebook,
					'usertwitter' => $usertwitter,
					'sitioweb' => $sitioweb,
					'pregrado' => $pregrado,
					'miembroActivo' => $miembroActivo,
					'miembroAdherente' => $miembroAdherente,
					'especialidad' => $especialidad,
					'esEstudiante' => $esEstudiante,
					'cursando' => $cursando,
					'tipoPago' => $tipoPago,
					'numtransferencia' => $numtransferencia,
					'montocancelado' => $montocancelado,
					'banco' => $banco,
					'efectivoStand' => $efectivoStand,
					'standfactura' => $standfactura,
					'tipoPagonscripcion' => $tipoPagonscripcion,
					'otrosmontos' => $otrosmontos,
					'observaciones' => $observaciones,
					'fecha' => $fecha,
					'is_active' => $is_active,
					'createdAt' => date('Y-m-d H:i:s', time())
				);

				$id = $this->api_model_congresopago->insertCongreso($congresoData);

				$response = array(
					'status' => 'success'
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}*/


	public function deleteCongreso($id)
	{
		header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$congreso = $this->api_model_congresopago->get_admin_congreso($id);

			if($congreso->image && file_exists(FCPATH.'media/images/congresoPagos/'.$congreso->image))
			{
				unlink(FCPATH.'media/images/congresoPagos/'.$congreso->image);
			}

			$this->api_model_congresopago->deleteCongreso($id);

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
