<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Branch_Model extends CI_Model
{
	
	public function save_data($data){
		$this->db->insert('branch',$data);
	}

	public function delete_data($id){
		$this->db->where('ID', $id);
		$this->db->delete('branch');

	}

	public function get_update_data($id){
		$this->db->select('*');
		$this->db->from('branch');
		$this->db->where('ID', $id);

	}

	public function update_data($id,$data){
		$this->db->where('ID', $id);
		$this->db->update('branch', $data);
	}

	public function check_authentication($user_id,$policy_id){
		$this->db->select('*');
		$this->db->where('policy_id', $policy_id);
		$this->db->where('user_id', $user_id);
		$this->db->from('user_policy');
	}
	
}
?>