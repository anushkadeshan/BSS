<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Update_progress_Model extends CI_Model
{
	
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

	public function update_status($id,$data){
		$this->db->where('ST_ID', $id);
		$this->db->update('student',$data);
	}

	public function edit_1_data($id){
		$this->db->select('*');
		$this->db->from('student');
		$this->db->where('ST_ID', $id);
	}

	public function update_2($id,$data){
		$this->db->where('ST_ID', $id);
		$this->db->update('student',$data);
	}

	public function edit_2_OL_data($id){
		$this->db->select('*');
		$this->db->from('student s');
		$this->db->where('ST_ID', $id);
		$this->db->join('ol_result o', 'o.Student_ID = s.ST_ID', 'left');
		
	}

	public function edit_2_AL_data($id){
		$this->db->select('*');
		$this->db->from('student s');
		$this->db->where('s.ST_ID', $id);
		$this->db->join('al_result a', 'a.Student_ID = s.ST_ID', 'left');
		$this->db->where('a.Attempt', 1);
		$this->db->limit(1);
		
	}

	public function edit_2_AL_data_2nd_attempt($id){
		$this->db->select('*');
		$this->db->from('student s');
		$this->db->where('ST_ID', $id);
		$this->db->join('al_result a', 'a.Student_ID = s.ST_ID', 'left');	
		$this->db->where('a.Attempt', 2);
		$this->db->limit(1);
	}



	public function check_update($st_id){
		$this->db->select('Student_ID');
		$this->db->where('Student_ID', $st_id);
		$this->db->from('ol_result');
	}

	public function check_update_al($st_id){
		$this->db->select('Student_ID');
		$this->db->where('Student_ID', $st_id);
		$this->db->where('Attempt', 1);
		$this->db->from('al_result');
	}

	public function check_update_al_2nd($st_id){
		$this->db->select('Student_ID');
		$this->db->where('Student_ID', $st_id);
		$this->db->where('Attempt', 2);
		$this->db->from('al_result');
	}

	public function update_3($st_id,$data){
		$this->db->where('Student_ID', $st_id);
		$this->db->update('ol_result',$data);
	}

	public function update_4($st_id,$data){
		$this->db->where('Student_ID', $st_id);
		$this->db->where('Attempt', 1);
		$this->db->update('al_result',$data);
	}

	public function update_5($st_id,$data){
		$this->db->where('Student_ID', $st_id);
		$this->db->where('Attempt', 2);
		$this->db->update('al_result',$data);
	}


	public function insert_3($data){
		$this->db->insert('ol_result', $data);
	}

	public function insert_4($data){
		$this->db->insert('al_result', $data);
	}

	public function insert_5($data){
		$this->db->insert('al_result', $data);
	}

	public function edit_no_job_data($st_id){
		$this->db->select('*');
		$this->db->from('student s');
		$this->db->where('ST_ID', $st_id);
		$this->db->join('after_al_nojob o', 'o.student_id = s.ST_ID', 'left');
	}

	public function check_no_job($st_id){
		$this->db->select('student_id');
		$this->db->where('student_id', $st_id);
		$this->db->from('after_al_nojob');
	}

	public function update_6($st_id,$data){
		$this->db->where('student_id', $st_id);
		$this->db->update('after_al_nojob',$data);
	}

	public function insert_6($data){
		$this->db->insert('after_al_nojob',$data);
	}

	public function edit_vt_data($st_id){
		$this->db->select('*');
		$this->db->from('student s');
		$this->db->where('ST_ID', $st_id);
		$this->db->join('after_al_vt o', 'o.Student_ID = s.ST_ID', 'left');
	}

	public function check_vt($st_id){
		$this->db->select('Student_ID');
		$this->db->where('Student_ID', $st_id);
		$this->db->from('after_al_vt');
	}

	public function update_7($st_id,$data){
		$this->db->where('Student_ID', $st_id);
		$this->db->update('after_al_vt',$data);
	}

	public function insert_7($data){
		$this->db->insert('after_al_vt',$data);
	}

	public function edit_job_data($st_id){
		$this->db->select('*');
		$this->db->from('student s');
		$this->db->where('ST_ID', $st_id);
		$this->db->join('after_al_job o', 'o.Student_ID = s.ST_ID', 'left');
	}

	public function check_job($st_id){
		$this->db->select('Student_ID');
		$this->db->where('Student_ID', $st_id);
		$this->db->from('after_al_job');
	
	}

	public function update_8($st_id,$data){
		$this->db->where('Student_ID', $st_id);
		$this->db->update('after_al_job',$data);
	}

	public function insert_8($data){
		$this->db->insert('after_al_job',$data);
	}

	public function edit_university_data($st_id){
		$this->db->select('*');
		$this->db->from('student s');
		$this->db->where('ST_ID', $st_id);
		$this->db->join('after_al_university o', 'o.Student_ID = s.ST_ID', 'left');
	}

	public function check_uni($st_id){
		$this->db->select('Student_ID');
		$this->db->where('Student_ID', $st_id);
		$this->db->from('after_al_university');
	
	}

	public function update_9($st_id,$data){
		$this->db->where('Student_ID', $st_id);
		$this->db->update('after_al_university',$data);
	}

	public function insert_9($data){
		$this->db->insert('after_al_university',$data);
	}

	public function edit_dropout_data($st_id){
		$this->db->select('*');
		$this->db->from('student s');
		$this->db->where('ST_ID', $st_id);
		$this->db->join('dropout o', 'o.student_id = s.ST_ID', 'left');
	}

	public function check_dropout($st_id){
		$this->db->select('student_id');
		$this->db->where('student_id', $st_id);
		$this->db->from('dropout');
	
	}

	public function update_10($st_id,$data){
		$this->db->where('student_id', $st_id);
		$this->db->update('dropout',$data);
	}

	public function insert_10($data){
		$this->db->insert('dropout',$data);
	}

	public function edit_scholar($st_id){
		$this->db->select('*');
		$this->db->from('student s');
		$this->db->where('ST_ID', $st_id);
		$this->db->join('scholar_details o', 'o.Student_ID = s.ST_ID', 'left');
	}

	public function check_scholar($st_id){
		$this->db->select('Student_ID');
		$this->db->where('Student_ID', $st_id);
		$this->db->from('scholar_details');
	
	}

	public function update_11($st_id,$data){
		$this->db->where('Student_ID', $st_id);
		$this->db->update('scholar_details',$data);
	}

	public function insert_11($data){
		$this->db->insert('scholar_details',$data);
	}

	public function check_authentication($user_id,$policy_id){
		$this->db->select('*');
		$this->db->where('policy_id', $policy_id);
		$this->db->where('user_id', $user_id);
		$this->db->from('user_policy');
	}

	

}
?>