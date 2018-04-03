<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Reports_model extends CI_model
	{
		
	public function get_student_data(){
		$this->db->select('*');
		$this->db->from('student s');
		$this->db->join('dsd_ofiice dsd','dsd.ID=s.DSD_ID','left');
		$this->db->join('gn_office gn','gn.GN_ID=s.GN_ID','left');
		$this->db->join('branch b','b.ID=s.Branch_ID','left');
		$this->db->join('current_status cs','cs.ID=s.status_id','left');
	}

	public function get_branch_student_data($user_id){
		$this->db->select('*');
		$this->db->from('student s');
		$this->db->where('s.user_id', $user_id);
		$this->db->join('dsd_ofiice dsd','dsd.ID=s.DSD_ID','left');
		$this->db->join('gn_office gn','gn.GN_ID=s.GN_ID','left');
		$this->db->join('branch b','b.ID=s.Branch_ID','left');
		$this->db->join('current_status cs','cs.ID=s.status_id','left');
	}
	
	public function get_status($st_id){
		$this->db->where('ST_ID',$st_id);
	 	$this->db->from('student');
	}

	public function get_all_student_data($st_id){
		$this->db->select('*');
		$this->db->from('student s');
		$this->db->where('s.ST_ID', $st_id);
		$this->db->limit(2);
		$this->db->join('dsd_ofiice dsd','dsd.ID=s.DSD_ID','left');
		$this->db->join('branch b','b.ID=s.Branch_ID','left');
		$this->db->join('current_status cs','cs.ID=s.status_id','left');
		$this->db->join('after_al_nojob nj','nj.student_id=s.ST_ID','left');
		$this->db->join('after_al_job jo','jo.Student_ID=s.ST_ID','left');
		$this->db->join('after_al_university uni','uni.Student_ID=s.ST_ID','left');
		$this->db->join('after_al_vt vt','vt.Student_ID=s.ST_ID','left');
		$this->db->join('al_result al','al.Student_ID=s.ST_ID','left');
		$this->db->join('dropout dr','dr.student_id=s.ST_ID','left');
		$this->db->join('ol_result ol','ol.Student_ID=s.ST_ID','left');
		$this->db->join('scholar_details sch','sch.Student_ID=s.ST_ID','left');
		$this->db->join('gn_office gn','gn.GN_ID=s.GN_ID','left');
		
	}
	
	public function getdsd($ds_id){
		$this->db->select('*');
		$this->db->from('gn_office');
		$this->db->where('DSD_ID', $ds_id);
		$query = $this->db->get();
		return $query->result();
	}
	
	public function get_location_data($ds_id,$gn_id){
		$this->db->select('*');
		$this->db->from('student s');
		$this->db->where('s.DSD_ID', $ds_id);
		if($gn_id==''){
			
		}
		else{
			$this->db->where('s.GN_ID', $gn_id);
		}
		$this->db->join('dsd_ofiice dsd','dsd.ID=s.DSD_ID','left');
		$this->db->join('branch b','b.ID=s.Branch_ID','left');
		$this->db->join('current_status cs','cs.ID=s.status_id','left');
		
	}
	
	public function get_location_data_branch($ds_id,$gn_id,$user_id){
		$this->db->select('*');
		$this->db->from('student s');
		$this->db->where('s.DSD_ID', $ds_id);
		if($gn_id==''){
			
		}
		else{
			$this->db->where('s.GN_ID', $gn_id);
		}
		$this->db->where('s.user_id', $user_id);
		$this->db->join('dsd_ofiice dsd','dsd.ID=s.DSD_ID','left');
		$this->db->join('branch b','b.ID=s.Branch_ID','left');
		$this->db->join('current_status cs','cs.ID=s.status_id','left');
		
	}
	
	public function get_bio_data($ethnicity,$gender){
		$this->db->select('*');
		$this->db->from('student s');
		
		if($gender=='all'){
			
		}
		else{
			$this->db->where('s.Gender', $gender);
		}
		if($ethnicity=='all'){
			
		}
		else{
			$this->db->where('s.Ethnicity', $ethnicity);
		}
		$this->db->join('dsd_ofiice dsd','dsd.ID=s.DSD_ID','left');
		$this->db->join('branch b','b.ID=s.Branch_ID','left');
		$this->db->join('current_status cs','cs.ID=s.status_id','left');
		
	}
	
	public function get_bio_data_branch($ethnicity,$gender,$user_id){
		$this->db->select('*');
		$this->db->from('student s');
		if($gender=='all'){
			
		}
		else{
			$this->db->where('s.Gender', $gender);
		}
		if($ethnicity=='all'){
			
		}
		else{
			$this->db->where('s.Ethnicity', $ethnicity);
		}
		$this->db->where('s.user_id', $user_id);
		$this->db->join('dsd_ofiice dsd','dsd.ID=s.DSD_ID','left');
		$this->db->join('branch b','b.ID=s.Branch_ID','left');
		$this->db->join('current_status cs','cs.ID=s.status_id','left');
		
	}
	
	public function get_sector_data($sector,$samurdi,$low,$bmi){
		$this->db->select('*');
		$this->db->from('student s');
		
		if($sector=='all'){
			
		}
		else{
			$this->db->where('s.Sector_ID', $sector);
		}
		if($samurdi=='all'){
			
		}
		else{
			$this->db->where('s.samurdi', $samurdi);
		}
		if($low=='all'){
			
		}
		else{
			$this->db->where('s.LowIncome', $low);
		}
		if($bmi=='all'){
			
		}
		else{
			$this->db->where('s.Direct_BMI', $bmi);
		}
		$this->db->join('dsd_ofiice dsd','dsd.ID=s.DSD_ID','left');
		$this->db->join('branch b','b.ID=s.Branch_ID','left');
		$this->db->join('current_status cs','cs.ID=s.status_id','left');
		
	}
	
	public function get_sector_data_branch($sector,$samurdi,$low,$bmi,$user_id){
		$this->db->select('*');
		$this->db->from('student s');
		if($sector=='all'){
			
		}
		else{
			$this->db->where('s.Sector_ID', $sector);
		}
		if($samurdi=='all'){
			
		}
		else{
			$this->db->where('s.samurdi', $samurdi);
		}
		if($low=='all'){
			
		}
		else{
			$this->db->where('s.LowIncome', $low);
		}
		if($bmi=='all'){
			
		}
		else{
			$this->db->where('s.Direct_BMI', $bmi);
		}
		$this->db->where('s.user_id', $user_id);
		$this->db->join('dsd_ofiice dsd','dsd.ID=s.DSD_ID','left');
		$this->db->join('branch b','b.ID=s.Branch_ID','left');
		$this->db->join('current_status cs','cs.ID=s.status_id','left');
		
	}

	public function get_status_data($status_id){
		$this->db->select('*');
		$this->db->from('student s');
		$this->db->where('s.status_id', $status_id);
		$this->db->join('dsd_ofiice dsd','dsd.ID=s.DSD_ID','left');
		$this->db->join('branch b','b.ID=s.Branch_ID','left');
		$this->db->join('current_status cs','cs.ID=s.status_id','left');
		
	}
	
	public function get_status_data_branch($status_id,$user_id){
		$this->db->select('*');
		$this->db->from('student s');
		$this->db->where('s.status_id', $status_id);
		$this->db->where('s.user_id', $user_id);
		$this->db->join('dsd_ofiice dsd','dsd.ID=s.DSD_ID','left');
		$this->db->join('branch b','b.ID=s.Branch_ID','left');
		$this->db->join('current_status cs','cs.ID=s.status_id','left');
		
	}

	public function get_al_data($stream,$year,$pass){
		$this->db->select('*');
		$this->db->from('al_result a');
		
		if($stream=='all'){
			
		}
		else{
			$this->db->where('a.Stream', $stream);
		}
		if($year=='all'){
			
		}
		else{
			$this->db->where('a.Year', $year);
		}
		if($pass=='all'){
			
		}
		else{
			$this->db->where('a.Pass_Fail', $pass);
		}
		$this->db->join('student s','s.ST_ID=a.Student_ID','left');
		$this->db->join('dsd_ofiice dsd','dsd.ID=s.DSD_ID','left');
		$this->db->join('branch b','b.ID=s.Branch_ID','left');
		$this->db->join('current_status cs','cs.ID=s.status_id','left');
		
	}
	
	public function get_al_data_branch($stream,$year,$pass,$user_id){
		$this->db->select('*');
		$this->db->from('al_result a');
		
		if($stream=='all'){
			
		}
		else{
			$this->db->where('a.Stream', $stream);
		}
		if($year=='all'){
			
		}
		else{
			$this->db->where('a.Year', $year);
		}
		if($pass=='all'){
			
		}
		else{
			$this->db->where('a.Pass_Fail', $pass);
		}
		$this->db->where('a.user_id', $user_id);
		$this->db->join('student s','s.ST_ID=a.Student_ID','left');
		$this->db->join('dsd_ofiice dsd','dsd.ID=s.DSD_ID','left');
		$this->db->join('branch b','b.ID=s.Branch_ID','left');
		$this->db->join('current_status cs','cs.ID=s.status_id','left');
	
	}

	public function get_al_year(){
		$this->db->select('Year');
		$this->db->from('al_result');
		$this->db->group_by('Year');
	}

	public function get_student_al_data(){
		$this->db->select('*');
		$this->db->from('al_result a');
		$this->db->join('student s','s.ST_ID=a.Student_ID','left');
		$this->db->join('dsd_ofiice dsd','dsd.ID=s.DSD_ID','left');
		$this->db->join('branch b','b.ID=s.Branch_ID','left');
		$this->db->join('current_status cs','cs.ID=s.status_id','left');
	}

	public function get_branch_student_al_data($user_id){
		$this->db->select('*');
		$this->db->from('al_result a');
		$this->db->where('a.user_id', $user_id);
		$this->db->join('student s','s.ST_ID=a.Student_ID','left');
		$this->db->join('dsd_ofiice dsd','dsd.ID=s.DSD_ID','left');
		$this->db->join('branch b','b.ID=s.Branch_ID','left');
		$this->db->join('current_status cs','cs.ID=s.status_id','left');
		
	}

	public function get_branch_data($branch_id){
		$this->db->select('*');
		$this->db->from('student s');
		$this->db->where('s.Branch_ID', $branch_id);
		$this->db->join('dsd_ofiice dsd','dsd.ID=s.DSD_ID','left');
		$this->db->join('branch b','b.ID=s.Branch_ID','left');
		$this->db->join('current_status cs','cs.ID=s.status_id','left');
		
	}
}
 ?>