<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class GN_Model extends CI_Model
{
	
	public function save_data($data){
		$this->db->insert('gn_office',$data);
	}

	public function show_data(){
		$this->db->select('*');
		$this->db->from('gn_office g');
		$this->db->join('dsd_ofiice d', 'd.ID = g.DSD_ID', 'left');
	}

	public function delete_data($id){
		$this->db->where('GN_ID', $id);
		$this->db->delete('gn_office');

	}

	public function get_update_data($id){
		$this->db->select('*');
		$this->db->from('gn_office g');
		$this->db->join('dsd_ofiice d', 'd.ID = g.DSD_ID', 'left');
		$this->db->where('GN_ID', $id);

	}

	public function update_data($id,$data){
		$this->db->where('GN_ID', $id);
		$this->db->update('gn_office', $data);
	}
	
}
?>