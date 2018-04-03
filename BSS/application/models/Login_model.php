<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class login_model extends CI_Model
{
	
	public function check_login($username,$password){
		
		$this->db->where('username',$username);
		$this->db->where('pass',$password);
	 	return $this->db->get('login')->row();
		
	}
}
?>
