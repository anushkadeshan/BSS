<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	* 
	*/
	class User_model extends CI_model
	{
		
		
		public function user_data(){
			$this->db->select('*');
			$this->db->from('login l');
			$this->db->join('branch b', 'b.ID = l.branch_id', 'left');
			
		}

	    public function active_data($id,$data){
	    	$this->db->where('id', $id);
	    	$this->db->update('login', $data);
	    }

	    public function save_user($data){
	    	$this->db->insert('login', $data);
	    }

	    public function delete_user($id){
	    	$this->db->where('id', $id);
	    	$this->db->delete('login');
	    }

	    public function delete_user_policies($id){
	    	$this->db->where('user_id', $id);
	    	$this->db->delete('user_policy');
	    }

	    public function edit_data($id){
	    	$this->db->select('*');
	    	$this->db->from('login l');
	    	$this->db->where('l.id', $id);
	    	$this->db->join('user_policy uf', 'uf.user_id = l.id', 'left');
	    	
	    }

	    public function delete_before_update($id){
	    	$this->db->where('user_id', $id);
	    	$this->db->delete('user_policy');

	    }	
	    
	}
 ?>