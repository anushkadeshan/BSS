<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class dashboard_model extends CI_model
	{
		
		public function get_dsd(){
			$this->db->get('dsd_ofiice');
			
		}

		public function count_branch(){
			$this->db->select('*,s.user_id,COUNT(s.user_id) as total');
			$this->db->from('student s');
			$this->db->join('login l', 'l.id = s.user_id', 'left');
			$this->db->join('branch b', 'b.ID = l.branch_id', 'left');
			$this->db->group_by('s.user_id');
			$this->db->order_by('total', 'desc'); 
	
		}

		public function count_status(){
			$this->db->select('*,status_id,COUNT(status_id) as total');
			$this->db->from('student s');
			$this->db->join('current_status cs', 'cs.ID = s.status_id', 'right');
			$this->db->group_by('status_id');
			$this->db->order_by('total', 'desc'); 
	
		}

		public function count_status_branch($branch_id){
			$this->db->select('*,status_id,COUNT(status_id) as total');
			$this->db->from('student s');
			$this->db->where('Branch_ID', $branch_id);
			$this->db->join('current_status cs', 'cs.ID = s.status_id', 'right');
			$this->db->group_by('status_id');
			$this->db->order_by('total', 'desc'); 
	
		}

		public function activity_log(){
			$this->db->select('*');
			$this->db->from('activity_log al');
			$this->db->limit(10);
			$this->db->join('login l', 'l.id = al.user_id', 'left');
			$this->db->join('branch b', 'b.ID = l.branch_id', 'left');
			$this->db->order_by('al.id', 'desc');
		}

		public function activity_log_branch($user_id){
			$this->db->select('*');
			$this->db->from('activity_log al');
			$this->db->where('al.user_id', $user_id);
			$this->db->limit(10);
			$this->db->join('login l', 'l.id = al.user_id', 'left');
			$this->db->join('branch b', 'b.ID = l.branch_id', 'left');
			$this->db->order_by('al.id', 'desc');
		}

		
	}
 ?>