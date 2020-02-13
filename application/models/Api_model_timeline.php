<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model_timeline extends CI_Model 
{
	
	
// timeline  Get
public function get_timelines($featured, $recentpost)
{
    $this->db->select('timeline.*, cat.category_name, u.first_name, u.last_name');
    $this->db->from('timelines timeline');
    $this->db->join('users u', 'u.id=timeline.user_id');
    $this->db->join('categories cat', 'cat.id=timeline.category_id', 'left');
    $this->db->where('timeline.is_active', 1);

    if($featured) {
        $this->db->where('timeline.is_featured', 1);
    }
    if($recentpost){ 
        $this->db->order_by('timeline.created_at', 'asc');
        $this->db->limit($recentpost);
    }
    $query = $this->db->get();
    return $query->result();
}

public function get_timeline($id)
{
    $this->db->select('timeline.*, cat.category_name, u.first_name, u.last_name');
    $this->db->from('timelines timeline');
    $this->db->join('users u', 'u.id=timeline.user_id');
    $this->db->join('categories cat', 'cat.id=timeline.category_id', 'left');
    $this->db->where('timeline.is_active', 1);
    $this->db->where('timeline.id', $id);
    $query = $this->db->get();
    return $query->row();
}
//

//timeline  gets
public function get_admin_timelines()
{
    $this->db->select('timeline.*, u.first_name, u.last_name');
    $this->db->from('timelines timeline');
    $this->db->join('users u', 'u.id=timeline.user_id');
    $this->db->order_by('timeline.created_at', 'asc');
    $query = $this->db->get();
    return $query->result();
}

public function get_admin_timeline($id)
{
    $this->db->select('timeline.*, u.first_name, u.last_name');
    $this->db->from('timelines timeline');
    $this->db->join('users u', 'u.id=timeline.user_id');
    $this->db->where('timeline.id', $id);
    $query = $this->db->get();
    return $query->row();
}
//





// CRUD timeline 

public function insertTimeline($timelineData)
	{
		$this->db->insert('timelines', $timelineData);
		return $this->db->insert_id();
	}

	public function updateTimeline($id, $timelineData)
	{
		$this->db->where('id', $id);
		$this->db->update('timelines', $timelineData);
	}

	public function deleteTimeline($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('timelines');
	}
//



	
}
