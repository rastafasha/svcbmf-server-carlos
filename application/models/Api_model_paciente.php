<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model_paciente extends CI_Model 
{
	
	
// paciente Get
public function get_pacientes($featured, $recentpost)
{
    $this->db->select('paciente.*');
    $this->db->from('pacientes paciente');
    $this->db->join('users u', 'u.id=paciente.user_id');
    $this->db->where('paciente.is_active', 1);

    if($featured) {
        $this->db->where('paciente.is_featured', 1);
    }
    if($recentpost){ 
        $this->db->order_by('paciente.created_at', 'asc');
        $this->db->limit($recentpost);
    }
    $query = $this->db->get();
    return $query->result();
}

public function get_paciente($id)
{
    $this->db->select('paciente.*');
    $this->db->from('pacientes paciente');
    $this->db->join('users u', 'u.id=paciente.user_id');
    $this->db->where('paciente.is_active', 1);
    $this->db->where('paciente.id', $id);
    $query = $this->db->get();
    return $query->row();
}
//

//blog gets
public function get_admin_pacientes()
{
    $this->db->select('paciente.*, u.first_name, u.last_name');
    $this->db->from('pacientes paciente');
    $this->db->join('users u', 'u.id=paciente.user_id');
    $this->db->order_by('paciente.created_at', 'asc');
    $query = $this->db->get();
    return $query->result();
}

public function get_admin_paciente($id)
{
    $this->db->select('paciente.*, u.first_name, u.last_name');
    $this->db->from('pacientes paciente');
    $this->db->join('users u', 'u.id=paciente.user_id');
    $this->db->where('paciente.id', $id);
    $query = $this->db->get();
    return $query->row();
}
//





// CRUD blog

public function insertPaciente($pacienteData)
	{
		$this->db->insert('pacientes', $pacienteData);
		return $this->db->insert_id();
	}

	public function updatePaciente($id, $pacienteData)
	{
		$this->db->where('id', $id);
		$this->db->update('pacientes', $pacienteData);
	}

	public function deletePaciente($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('pacientes');
	}
//



	
}
