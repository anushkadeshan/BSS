<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Status_Model extends CI_Model
{
	
	public function save_course_data($data){
		$this->db->insert('after_al_vt',$data);
	}

	public function save_job_data($data){
		$this->db->insert('after_al_job',$data);
	}

	public function save_uni_data($data){
		$this->db->insert('after_al_university',$data);
	}

	public function save_drop_data($data){
		$this->db->insert('dropout',$data);
	}

	public function save_nojob_data($data){
		$this->db->insert('after_al_nojob',$data);
	}

	public function check_authentication($user_id,$policy_id){
		$this->db->select('*');
		$this->db->where('policy_id', $policy_id);
		$this->db->where('user_id', $user_id);
		$this->db->from('user_policy');
	}
	
	
}
?>