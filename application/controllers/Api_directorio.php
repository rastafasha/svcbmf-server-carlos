<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_Directorio extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('api_model');
		$this->load->helper('url');
		$this->load->helper('text');
	}

	
// directorio

public function directorios()
{
    header("Access-Control-Allow-Origin: *");

    $directorios = $this->api_model->get_directorios($featured=false, $recentpost=false);

    $posts = array();
    if(!empty($directorios)){
        foreach($directorios as $directorio){


            $posts[] = array(
                'id' => $directorio->id,
                'nombre' => $directorio->nombre,
                'especialidad' => $directorio->especialidad,
                'universidad' => $directorio->universidad,
                'ano' => $directorio->ano,
                'website' => $directorio->website,
                'email' => $directorio->email,
                'direccion' => $directorio->direccion,
                'estado' => $directorio->estado,
                'ciudad' => $directorio->ciudad,
                'telefonos' => $directorio->telefonos,
                'facebook' => $directorio->facebook,
                'instagram' => $directorio->instagram,
                'twitter' => $directorio->twitter,
                'linkedin' => $directorio->linkedin,
                'image' => base_url('media/images/directorio/'.$directorio->image),
                'created_at' => $directorio->created_at
            );
        }
    }

    $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($posts));
}

public function featured_directorios()
{
    header("Access-Control-Allow-Origin: *");

    $directorios = $this->api_model->get_directorios($featured=true, $recentpost=false);

    $posts = array();
    if(!empty($directorios)){
        foreach($directorios as $directorio){
            

            $posts[] = array(
                'id' => $directorio->id,
                'nombre' => $directorio->nombre,
                'especialidad' => $directorio->especialidad,
                'universidad' => $directorio->universidad,
                'ano' => $directorio->ano,
                'website' => $directorio->website,
                'email' => $directorio->email,
                'direccion' => $directorio->direccion,
                'estado' => $directorio->estado,
                'ciudad' => $directorio->ciudad,
                'telefonos' => $directorio->telefonos,
                'facebook' => $directorio->facebook,
                'instagram' => $directorio->instagram,
                'twitter' => $directorio->twitter,
                'linkedin' => $directorio->linkedin,
                'image' => base_url('media/images/directorio/'.$directorio->image),
                'created_at' => $directorio->created_at
            );
        }
    }

    $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($posts));
}

public function directorio($id)
{
    header("Access-Control-Allow-Origin: *");
    
    $directorio = $this->api_model->get_directorio($id);


    $post = array(
                'id' => $directorio->id,
                'nombre' => $directorio->nombre,
                'especialidad' => $directorio->especialidad,
                'universidad' => $directorio->universidad,
                'ano' => $directorio->ano,
                'website' => $directorio->website,
                'email' => $directorio->email,
                'direccion' => $directorio->direccion,
                'estado' => $directorio->estado,
                'ciudad' => $directorio->ciudad,
                'telefonos' => $directorio->telefonos,
                'facebook' => $directorio->facebook,
                'instagram' => $directorio->instagram,
                'twitter' => $directorio->twitter,
                'linkedin' => $directorio->linkedin,
                'image' => base_url('media/images/directorio/'.$directorio->image),
                'created_at' => $directorio->created_at
    );
    
    $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($post));
}

public function recent_directorios()
{
    header("Access-Control-Allow-Origin: *");

    $directorios = $this->api_model->get_directorios($featured=false, $recentpost=5);

    $posts = array();
    if(!empty($directorios)){
        foreach($directorios as $directorio){
            

            $posts[] = array(
                'id' => $directorio->id,
                'nombre' => $directorio->nombre,
                'especialidad' => $directorio->especialidad,
                'universidad' => $directorio->universidad,
                'ano' => $directorio->ano,
                'website' => $directorio->website,
                'email' => $directorio->email,
                'direccion' => $directorio->direccion,
                'estado' => $directorio->estado,
                'ciudad' => $directorio->ciudad,
                'telefonos' => $directorio->telefonos,
                'facebook' => $directorio->facebook,
                'instagram' => $directorio->instagram,
                'twitter' => $directorio->twitter,
                'linkedin' => $directorio->linkedin,
                'image' => base_url('media/images/directorio/'.$directorio->image),
                'created_at' => $directorio->created_at
            );
        }
    }

    $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($posts));
}

//


//CRUD Directorio

public function adminDirectorios()
{
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: authorization, Content-Type");

    $token = $this->input->get_request_header('Authorization');

    $isValidToken = $this->api_model->checkToken($token);

    $posts = array();
    if($isValidToken) {
        $directorios = $this->api_model->get_admin_directorios();
        foreach($directorios as $directorio) {
            $posts[] = array(
                'id' => $directorio->id,
                'nombre' => $directorio->nombre,
                'especialidad' => $directorio->especialidad,
                'universidad' => $directorio->universidad,
                'ano' => $directorio->ano,
                'website' => $directorio->website,
                'email' => $directorio->email,
                'direccion' => $directorio->direccion,
                'estado' => $directorio->estado,
                'ciudad' => $directorio->ciudad,
                'telefonos' => $directorio->telefonos,
                'facebook' => $directorio->facebook,
                'instagram' => $directorio->instagram,
                'twitter' => $directorio->twitter,
                'linkedin' => $directorio->linkedin,
                'image' => base_url('media/images/directorio/'.$directorio->image),
                'created_at' => $directorio->created_at
            );
        }

        $this->output
            ->set_status_header(200)
            ->set_content_type('application/json')
            ->set_output(json_encode($posts)); 
    }
}

public function adminDirectorio($id)
{
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: authorization, Content-Type");

    $token = $this->input->get_request_header('Authorization');

    $isValidToken = $this->api_model->checkToken($token);

    if($isValidToken) {

        $directorio = $this->api_model->get_admin_directorio($id);

        $post = array(
            'id' => $directorio->id,
                'nombre' => $directorio->nombre,
                'especialidad' => $directorio->especialidad,
                'universidad' => $directorio->universidad,
                'ano' => $directorio->ano,
                'website' => $directorio->website,
                'email' => $directorio->email,
                'direccion' => $directorio->direccion,
                'estado' => $directorio->estado,
                'ciudad' => $directorio->ciudad,
                'telefonos' => $directorio->telefonos,
                'facebook' => $directorio->facebook,
                'instagram' => $directorio->instagram,
                'twitter' => $directorio->twitter,
                'linkedin' => $directorio->linkedin,
                'image' => base_url('media/images/directorio/'.$directorio->image),
        );
        

        $this->output
            ->set_status_header(200)
            ->set_content_type('application/json')
            ->set_output(json_encode($post)); 
    }
}

public function createDirectorio()
{
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
    header("Access-Control-Allow-Headers: authorization, Content-Type");

    $token = $this->input->get_request_header('Authorization');

    $isValidToken = $this->api_model->checkToken($token);

    if($isValidToken) {

        $nombre = $this->input->post('nombre');
        $especialidad = $this->input->post('especialidad');
        $universidad = $this->input->post('universidad');
        $ano = $this->input->post('ano');
        $website = $this->input->post('website');
        $email = $this->input->post('email');
        $direccion = $this->input->post('direccion');
        $estado = $this->input->post('estado');
        $ciudad = $this->input->post('ciudad');
        $telefonos = $this->input->post('telefonos');
        $facebook = $this->input->post('facebook');
        $instagram = $this->input->post('instagram');
        $twitter = $this->input->post('twitter');
        $linkedin = $this->input->post('linkedin');

        $filename = NULL;

        $isUploadError = FALSE;

        if ($_FILES && $_FILES['image']['name']) {

            $config['upload_path']          = './media/images/directorio/';
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
            $directorioData = array(
                'nombre' => $nombre,
                'image' => $filename,
                'especialidad' => $especialidad,
                'universidad' => $universidad,
                'ano' => $ano,
                'website' => $website,
                'email' => $email,
                'direccion' => $direccion,
                'estado' => $estado,
                'ciudad' => $ciudad,
                'telefonos' => $telefonos,
                'facebook' => $facebook,
                'instagram' => $instagram,
                'twitter' => $twitter,
                'linkedin' => $linkedin,
                'created_at' => date('Y-m-d H:i:s', time())
            );

            $id = $this->api_model->insertDirectorio($directorioData);

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

public function updateDirectorio($id)
{
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: authorization, Content-Type");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

    $token = $this->input->get_request_header('Authorization');

    $isValidToken = $this->api_model->checkToken($token);

    if($isValidToken) {

        $directorio = $this->api_model->get_admin_directorio($id);
        $filename = $directorio->image;

        $nombre = $this->input->post('nombre');
        $especialidad = $this->input->post('especialidad');
        $universidad = $this->input->post('universidad');
        $ano = $this->input->post('ano');
        $website = $this->input->post('website');
        $email = $this->input->post('email');
        $direccion = $this->input->post('direccion');
        $estado = $this->input->post('estado');
        $ciudad = $this->input->post('ciudad');
        $telefonos = $this->input->post('telefonos');
        $facebook = $this->input->post('facebook');
        $instagram = $this->input->post('instagram');
        $twitter = $this->input->post('twitter');
        $linkedin = $this->input->post('linkedin');

        $isUploadError = FALSE;

        if ($_FILES && $_FILES['image']['name']) {

            $config['upload_path']          = './media/images/directorio/';
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
   
                if($directorio->image && file_exists(FCPATH.'media/images/directorio/'.$directorio->image))
                {
                    unlink(FCPATH.'media/images/directorio/'.$directorio->image);
                }

                $uploadData = $this->upload->data();
                $filename = $uploadData['file_name'];
            }
        }

        if( ! $isUploadError) {
            $directorioData = array(
                'nombre' => $nombre,
                'image' => $filename,
                'especialidad' => $especialidad,
                'universidad' => $universidad,
                'ano' => $ano,
                'website' => $website,
                'email' => $email,
                'direccion' => $direccion,
                'estado' => $estado,
                'ciudad' => $ciudad,
                'telefonos' => $telefonos,
                'facebook' => $facebook,
                'instagram' => $instagram,
                'twitter' => $twitter,
                'linkedin' => $linkedin,
            );

            $this->api_model->updateDirectorio($id, $directorioData);

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

public function deleteDirectorio($id)
{
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    header("Access-Control-Allow-Headers: authorization, Content-Type");

    $token = $this->input->get_request_header('Authorization');

    $isValidToken = $this->api_model->checkToken($token);

    if($isValidToken) {

        $directorio = $this->api_model->get_admin_directorio($id);

        if($directorio->image && file_exists(FCPATH.'media/images/directorio/'.$directorio->image))
        {
            unlink(FCPATH.'media/images/directorio/'.$directorio->image);
        }

        $this->api_model->deleteDirectorio($id);

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
