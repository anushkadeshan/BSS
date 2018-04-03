<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Student_Model extends CI_Model
{
	
	public function save_data($data){
		$this->db->insert('student',$data);
	}

	public function check_nic($nic){
		$this->db->where('NIC', $nic);
		$this->db->from('student');
	}

	public function get_student_data(){
	$this->db->select('*');
	$this->db->from('student s');
	$this->db->join('dsd_ofiice dsd','dsd.ID=s.DSD_ID','left');
	$this->db->join('branch b','b.ID=s.Branch_ID','left');
	$this->db->join('current_status cs','cs.ID=s.status_id','left');
	}

	public function get_branch_student_data($user_id){
	$this->db->select('*');
	$this->db->from('student s');
	$this->db->where('s.user_id', $user_id);
	$this->db->join('dsd_ofiice dsd','dsd.ID=s.DSD_ID','left');
	$this->db->join('branch b','b.ID=s.Branch_ID','left');
	$this->db->join('current_status cs','cs.ID=s.status_id','left');
	}
	
	public function save_futher_info($data_OL,$data_scholar,$data_AL){
		$this->db->insert('ol_result', $data_OL);
		$this->db->insert('scholar_details', $data_scholar);
		$this->db->insert_batch('al_result', $data_AL);

	}
	public function save_futher_info_attempt1($data_OL,$data_scholar,$data_AL){
		$this->db->insert('ol_result', $data_OL);
		$this->db->insert('scholar_details', $data_scholar);
		$this->db->insert('al_result', $data_AL);

	}

	public function save_futher_info_OL($data_OL,$data_scholar){
		$this->db->insert('ol_result', $data_OL);
		$this->db->insert('scholar_details', $data_scholar);
	}


	public function delete_data($id){
		$this->db->delete('student', array('ST_ID' => $id));
		$this->db->delete('scholar_details', array('Student_ID' => $id));
		$this->db->delete('ol_result', array('Student_ID' => $id));
		$this->db->delete('dropout', array('student_id' => $id));
		$this->db->delete('al_result', array('Student_ID' => $id));
		$this->db->delete('after_al_vt', array('Student_ID' => $id));
		$this->db->delete('after_al_university', array('Student_ID' => $id));
		$this->db->delete('after_al_nojob', array('student_id' => $id));
		$this->db->delete('after_al_job', array('Student_ID' => $id));
	}

	public function get_update_data($id){
		$this->db->select('*');
		$this->db->from('student');
		$this->db->where('ID', $id);

	}

	public function update_data($id,$data){
		$this->db->where('ID', $id);
		$this->db->update('student', $data);
	}
	
	public function check_authentication($user_id,$policy_id){
		$this->db->select('*');
		$this->db->where('policy_id', $policy_id);
		$this->db->where('user_id', $user_id);
		$this->db->from('user_policy');
	}

	public function get_dsd($user_id){
		$this->db->select('*');
		$this->db->from('login l');
		$this->db->where('l.id', $user_id);
		$this->db->join('branch b', 'b.ID = l.branch_id', 'left');
		$this->db->join('dsd_ofiice d', 'd.Province = b.Province', 'left'); 
	}
	
	public function get_gn($user_id){
		$this->db->select('*');
		$this->db->from('login l');
		$this->db->where('l.id', $user_id);
		$this->db->join('branch b', 'b.ID = l.branch_id', 'left');
		$this->db->join('dsd_ofiice d', 'd.District = b.District', 'left');
		$this->db->join('gn_office g', 'g.DSD_ID = d.ID', 'left');
	}
}
?>