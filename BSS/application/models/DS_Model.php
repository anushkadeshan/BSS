<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class DS_Model extends CI_Model
{
	
	public function save_data($data){
		$this->db->insert('dsd_ofiice',$data);
	}

	public function delete_data($id){
		$this->db->where('ID', $id);
		$this->db->delete('dsd_ofiice');

	}

	public function get_update_data($id){
		$this->db->select('*');
		$this->db->from('dsd_ofiice');
		$this->db->where('ID', $id);

	}

	public function update_data($id,$data){
		$this->db->where('ID', $id);
		$this->db->update('dsd_ofiice', $data);
	}

	public function check_authentication($user_id,$policy_id){
		$this->db->select('*');
		$this->db->where('policy_id', $policy_id);
		$this->db->where('user_id', $user_id);
		$this->db->from('user_policy');
	}
	
}
?>