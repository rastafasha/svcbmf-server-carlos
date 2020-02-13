<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_Congreso extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('api_model_congreso');
		$this->load->model('api_model');
		$this->load->helper('url');
		$this->load->helper('text');
	}

	


    public function congreso()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
		header('Access-Control-Allow-Headers: Accept,Accept-Language,Content-Language,Content-Type');

		$formdata = json_decode(file_get_contents('php://input'), true);

		if( ! empty($formdata)) {

			$nombre = $formdata['nombre'];
			$email = $formdata['email'];
			$apellido = $formdata['apellido'];
			$nacionalidad = $formdata['nacionalidad'];
			$membresia = $formdata['membresia'];
			$cedulapassport = $formdata['cedulapassport'];
			$dirprofesional = $formdata['dirprofesional'];
			$ciudad = $formdata['ciudad'];
			$pais = $formdata['pais'];
			$telefono = $formdata['telefono'];
			$verificaemail = $formdata['verificaemail'];
			$condicionAcademica = $formdata['condicionAcademica'];
			$descripcionCursos = $formdata['descripcionCursos'];
			$anualidades = $formdata['anualidades'];
			$inscripcionSvcbmf = $formdata['inscripcionSvcbmf'];
			$otrosItemsPagados = $formdata['otrosItemsPagados'];
			$especialidad = $formdata['especialidad'];
			$edad = $formdata['edad'];
			$cursos = $formdata['cursos'];
			$tipoPago = $formdata['tipoPago'];
			$codConfirmacion = $formdata['codConfirmacion'];
			$montocancelado = $formdata['montocancelado'];
			$descOtrosItemsPagados = $formdata['descOtrosItemsPagados'];
			$fechaNac = $formdata['fechaNac'];
			$tipoPagonscripcion = $formdata['tipoPagonscripcion'];
			$observaciones = $formdata['observaciones'];
			$image = $formdata['image'];
			$fecha = $formdata['fecha'];

			$congresoData = array(
				'nombre' => $nombre,
				'apellido' => $apellido,
				'email' => $email,
				'nacionalidad' => $nacionalidad,
				'membresia' => $membresia,
				'cedulapassport' => $cedulapassport,
				'dirprofesional' => $dirprofesional,
				'pais' => $pais,
				'telefono' => $telefono,
				'verificaemail' => $verificaemail,
				'condicionAcademica' => $condicionAcademica,
				'descripcionCursos' => $descripcionCursos,
				'anualidades' => $anualidades,
				'inscripcionSvcbmf' => $inscripcionSvcbmf,
				'otrosItemsPagados' => $otrosItemsPagados,
				'especialidad' => $especialidad,
				'edad' => $edad,
				'cursos' => $cursos,
				'tipoPago' => $tipoPago,
				'image' => base_url('media/images/congresoPagos/'.$image),
				'codConfirmacion' => $codConfirmacion,
				'montocancelado' => $montocancelado,
				'descOtrosItemsPagados' => $descOtrosItemsPagados,
				'fechaNac' => $fechaNac,
				'tipoPagonscripcion' => $tipoPagonscripcion,
				'observaciones' => $observaciones,
				'fecha' => $fecha,
				'createdAt' => date('Y-m-d H:i:s', time())
			);
			
			$id = $this->api_model_congreso->insert_congreso($congresoData);

			//$this->sendemail($congresoData);

			$this->upload($congresoData);
			
			$response = array('id' => $id);
		}


		else {
			$response = array('id' => '');
		}
		
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($response));
	}



	public function upload(){

		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
		header('Access-Control-Allow-Headers: Accept,Accept-Language,Content-Language,Content-Type');

		$formdata = json_decode(file_get_contents('php://input'), true);

			$nombre = $formdata['nombre'];
			$email = $formdata['email'];
			$apellido = $formdata['apellido'];
			$nacionalidad = $formdata['nacionalidad'];
			$membresia = $formdata['membresia'];
			$cedulapassport = $formdata['cedulapassport'];
			$dirprofesional = $formdata['dirprofesional'];
			$ciudad = $formdata['ciudad'];
			$pais = $formdata['pais'];
			$telefono = $formdata['telefono'];
			$verificaemail = $formdata['verificaemail'];
			$condicionAcademica = $formdata['condicionAcademica'];
			$descripcionCursos = $formdata['descripcionCursos'];
			$anualidades = $formdata['anualidades'];
			$inscripcionSvcbmf = $formdata['inscripcionSvcbmf'];
			$otrosItemsPagados = $formdata['otrosItemsPagados'];
			$especialidad = $formdata['especialidad'];
			$edad = $formdata['edad'];
			$cursos = $formdata['cursos'];
			$tipoPago = $formdata['tipoPago'];
			$codConfirmacion = $formdata['codConfirmacion'];
			$montocancelado = $formdata['montocancelado'];
			$descOtrosItemsPagados = $formdata['descOtrosItemsPagados'];
			$fechaNac = $formdata['fechaNac'];
			$tipoPagonscripcion = $formdata['tipoPagonscripcion'];
			$observaciones = $formdata['observaciones'];
			$image = $formdata['image'];
			$fecha = $formdata['fecha'];

		$congresoData = array(
			'nombre' => $nombre,
				'apellido' => $apellido,
				'email' => $email,
				'nacionalidad' => $nacionalidad,
				'membresia' => $membresia,
				'cedulapassport' => $cedulapassport,
				'dirprofesional' => $dirprofesional,
				'pais' => $pais,
				'telefono' => $telefono,
				'verificaemail' => $verificaemail,
				'condicionAcademica' => $condicionAcademica,
				'descripcionCursos' => $descripcionCursos,
				'anualidades' => $anualidades,
				'inscripcionSvcbmf' => $inscripcionSvcbmf,
				'otrosItemsPagados' => $otrosItemsPagados,
				'especialidad' => $especialidad,
				'edad' => $edad,
				'cursos' => $cursos,
				'tipoPago' => $tipoPago,
				'image' => base_url('media/images/congresoPagos/'.$image),
				'codConfirmacion' => $codConfirmacion,
				'montocancelado' => $montocancelado,
				'descOtrosItemsPagados' => $descOtrosItemsPagados,
				'fechaNac' => $fechaNac,
				'tipoPagonscripcion' => $tipoPagonscripcion,
				'observaciones' => $observaciones,
				'fecha' => $fecha,
				'createdAt' => date('Y-m-d H:i:s', time())
		);

		//$image = base64_decode($this->input->post("image"));


		//$image = NULL;

		if ($_FILES && $_FILES['image']['name']) {

			$config['upload_path']          = './media/images/congresoPagos/';
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
		$this->sendemail($congresoData);
	
	}


	public function sendemail($congresoData)
	{
		$message = '<p>Hola, <br />Alguien ha registrado desde seccion Cogreso pagos.</p>';
		$message .= '<p><strong>Nombre: </strong>'.$congresoData['nombre'].'</p>';
		$message .= '<p><strong>Apellido: </strong>'.$congresoData['apellido'].'</p>';
		$message .= '<p><strong>Cedula: </strong>'.$congresoData['cedulapassport'].'</p>';
		$message .= '<p><strong>edad: </strong>'.$congresoData['edad'].'</p>';
		$message .= '<p><strong>fechaNac: </strong>'.$congresoData['fechaNac'].'</p>';
		$message .= '<p><strong>nacionalidad: </strong>'.$congresoData['nacionalidad'].'</p>';
		$message .= '<p><strong>Email: </strong>'.$congresoData['email'].'</p>';
		$message .= '<p><strong>verifica email: </strong>'.$congresoData['verificaemail'].'</p>';
		$message .= '<p><strong>membresia: </strong>'.$congresoData['membresia'].'</p>';
		$message .= '<p><strong>Direccion: </strong>'.$congresoData['dirprofesional'].'</p>';
		$message .= '<p><strong>Pais: </strong>'.$congresoData['pais'].'</p>';
		$message .= '<p><strong>Teléfono: </strong>'.$congresoData['telefono'].'</p>';
		$message .= '<p><strong>condicionAcademica: </strong>'.$congresoData['condicionAcademica'].'</p>';
		$message .= '<p><strong>descripcionCursos: </strong>'.$congresoData['descripcionCursos'].'</p>';
		$message .= '<p><strong>anualidades: </strong>'.$congresoData['anualidades'].'</p>';
		$message .= '<p><strong>inscripcion Svcbmf: </strong>'.$congresoData['inscripcionSvcbmf'].'</p>';
		$message .= '<p><strong>otrosItemsPagados: </strong>'.$congresoData['otrosItemsPagados'].'</p>';
		$message .= '<p><strong>descOtrosItemsPagados: </strong>'.$congresoData['descOtrosItemsPagados'].'</p>';
		$message .= '<p><strong>Especialidad: </strong>'.$congresoData['especialidad'].'</p>';
		$message .= '<p><strong>cursos: </strong>'.$congresoData['cursos'].'</p>';
		$message .= '<p><strong>tipo pago: </strong>'.$congresoData['tipoPago'].'</p>';
		$message .= '<p><strong>Imagen: </strong>'.$congresoData['image'].'</p>';
		$message .= '<p><strong>codConfirmacion: </strong>'.$congresoData['codConfirmacion'].'</p>';
		$message .= '<p><strong>Monto: </strong>'.$congresoData['montocancelado'].'</p>';
		$message .= '<p><strong>tipo Pagoo inscripcion: </strong>'.$congresoData['tipoPagonscripcion'].'</p>';
		$message .= '<p><strong>Fecha de Transferencia: </strong>'.$congresoData['fecha'].'</p>';
		$message .= '<p><strong>Observaciones: </strong>'.$congresoData['observaciones'].'</p>';
		$message .= '<p><strong>creado : </strong>'.$congresoData['createdAt'].'</p>';
		$message .= '<br />Gracias!';
		

		$this->load->library('email');

		$config['protocol'] = 'sendmail';
		$config['mailpath'] = '/usr/sbin/sendmail';
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;
		$config['mailtype'] = 'html';

		$this->email->initialize($config);


		$this->email->from('mercadocreativo@hotmail.com', 'SVCBM congreso');
		//$this->email->to('tesoreriacongresodecirugia@gmail.com');
		$this->email->to('mercadocreativo@gmail.com');
		$this->email->cc('mercadocreativo@hotmail.com');
		$this->email->bcc('mercadocreativo@gmail.com');

		$this->email->subject('Congreso Form');
		$this->email->message($message);
		//$this->email->attach($filename['full_path']);



		$this->email->send();
	}




	
	
}
