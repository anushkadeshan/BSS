<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
class Status_Controller extends CI_Controller
{
	function __construct()
		{
			parent::__construct();
			if($this->session->userdata('username')!=TRUE) {
        			$this->load->helper('url');
        			$this->session->set_flashdata('last_page', current_url());
        			$this->session->set_flashdata('flash_data','You Need to log in to system');
        			redirect('Login_controller/index');
			}
		$this->load->helper('form');
		$this->load->model('Status_Model');
		}

	public function index(){	
		
	}


	public function save_course(){
		if(isset($_POST['submit'])){
			$policy_id = 13; 
    		$user_id = $this->session->userdata('user_id');
   			$this->Status_Model->check_authentication($user_id,$policy_id);
    		$result = $this->db->get();

    		if($result->num_rows()>0){
			$course = $this->input->post('course');
			$category = $this->input->post('category');
			$institute = $this->input->post('institute');
			$year = $this->input->post('year');
			$ST_ID = $this->input->post('id');

			$data = array(
				'VT_Name' => $course,
				'Category' => $category,
				'Institute' => $institute,
				'Year_Completion' => $year,
				'Student_ID' => $ST_ID, 
				);

			$this->Status_Model->save_course_data($data);
			if($this->db->affected_rows()>0){
				$this->session->set_flashdata('msg', 'Data Added Successfully to the Database.');
				$this->session->set_flashdata('type', 'success');
				$this->session->set_flashdata('icon', 'ok');
  				redirect('Student_Controller/n_student');

			}

			else{
				$this->session->set_flashdata('msg', 'Data Adding Error');
				$this->session->set_flashdata('type', 'danger');
				$this->session->set_flashdata('icon', 'remove');
  				redirect('Student_Controller/n_student');

			}
		}
		else{
      		$this->session->set_flashdata('msg', 'You dont have Authentication to access this content');
      		$this->session->set_flashdata('type', 'danger');
      		$this->session->set_flashdata('icon', 'remove');
     
		}
	}
		else{

			echo "Submit Not Ok";
		}
	} 

	public function save_job(){
		if(isset($_POST['submit'])){

			$policy_id = 13; 
    		$user_id = $this->session->userdata('user_id');
   			$this->Status_Model->check_authentication($user_id,$policy_id);
    		$result = $this->db->get();

    		if($result->num_rows()>0){

			$position = $this->input->post('position');
			$company = $this->input->post('company');
			$ST_ID = $this->input->post('id');

			$data = array(
				'Job_Position' => $position,
				'Company' => $company,
				'Student_ID' => $ST_ID, 
				);

			$this->Status_Model->save_job_data($data);
			if($this->db->affected_rows()>0){
				$this->session->set_flashdata('msg', 'Data Added Successfully to the Database.');
				$this->session->set_flashdata('type', 'success');
				$this->session->set_flashdata('icon', 'ok');
  				redirect('Student_Controller/n_student');

			}

			else{
				$this->session->set_flashdata('msg', 'Data Adding Error');
				$this->session->set_flashdata('type', 'danger');
				$this->session->set_flashdata('icon', 'remove');
  				redirect('Student_Controller/n_student');

			}
		}
		else{
      		$this->session->set_flashdata('msg', 'You dont have Authentication to access this content');
      		$this->session->set_flashdata('type', 'danger');
      		$this->session->set_flashdata('icon', 'remove');
     
		}
		}

		else{

			echo "Submit Not Ok";
		}
	}

	public function save_uni(){
		if(isset($_POST['submit'])){
			$policy_id = 13; 
    		$user_id = $this->session->userdata('user_id');
   			$this->Status_Model->check_authentication($user_id,$policy_id);
    		$result = $this->db->get();

    		if($result->num_rows()>0){

			$uni = $this->input->post('uni');
			$fac = $this->input->post('fac');
			$ST_ID = $this->input->post('id');

			$data = array(
				'Name' => $uni,
				'Faculty' => $fac,
				'Student_ID' => $ST_ID, 
				);

			$this->Status_Model->save_uni_data($data);
			if($this->db->affected_rows()>0){
				$this->session->set_flashdata('msg', 'Data Added Successfully to the Database.');
				$this->session->set_flashdata('type', 'success');
				$this->session->set_flashdata('icon', 'ok');
  				redirect('Student_Controller/n_student');

			}

			else{
				$this->session->set_flashdata('msg', 'Data Adding Error');
				$this->session->set_flashdata('type', 'danger');
				$this->session->set_flashdata('icon', 'remove');
  				redirect('Student_Controller/n_student');

			}
		}
		else{
      		$this->session->set_flashdata('msg', 'You dont have Authentication to access this content');
      		$this->session->set_flashdata('type', 'danger');
      		$this->session->set_flashdata('icon', 'remove');
     
		}
		}

		else{

			echo "Submit Not Ok";
		}
	}

	public function save_dropout(){
		if(isset($_POST['submit'])){

			$policy_id = 13; 
    		$user_id = $this->session->userdata('user_id');
   			$this->Status_Model->check_authentication($user_id,$policy_id);
    		$result = $this->db->get();

    		if($result->num_rows()>0){

			$reason = $this->input->post('reason');
			$ST_ID = $this->input->post('id');

			$data = array(
				'Reason' => $reason,
				'student_id' => $ST_ID, 
				);

			$this->Status_Model->save_drop_data($data);
			if($this->db->affected_rows()>0){
				$this->session->set_flashdata('msg', 'Reasons Added Successfully to the Database.');
				$this->session->set_flashdata('type', 'success');
				$this->session->set_flashdata('icon', 'ok');
  				redirect('Student_Controller/n_student');

			}

			else{
				$this->session->set_flashdata('msg', 'Data Adding Error');
				$this->session->set_flashdata('type', 'danger');
				$this->session->set_flashdata('icon', 'remove');
  				redirect('Student_Controller/n_student');

			}
		}
		else{
      		$this->session->set_flashdata('msg', 'You dont have Authentication to access this content');
      		$this->session->set_flashdata('type', 'danger');
      		$this->session->set_flashdata('icon', 'remove');
     
		}
		}

		else{

			echo "Submit Not Ok";
		}
	}

	public function save_no_job(){
		if(isset($_POST['submit'])){

			$policy_id = 13; 
    		$user_id = $this->session->userdata('user_id');
   			$this->Status_Model->check_authentication($user_id,$policy_id);
    		$result = $this->db->get();

    		if($result->num_rows()>0){

			$reason = $this->input->post('reason');
			$ST_ID = $this->input->post('id');

			$data = array(
				'reason' => $reason,
				'student_id' => $ST_ID, 
				);

			$this->Status_Model->save_nojob_data($data);
			if($this->db->affected_rows()>0){
				$this->session->set_flashdata('msg', 'Reasons Added Successfully to the Database.');
				$this->session->set_flashdata('type', 'success');
				$this->session->set_flashdata('icon', 'ok');
  				redirect('Student_Controller/n_student');

			}

			else{
				$this->session->set_flashdata('msg', 'Data Adding Error');
				$this->session->set_flashdata('type', 'danger');
				$this->session->set_flashdata('icon', 'remove');
  				redirect('Student_Controller/n_student');

			}
		}
		else{
      		$this->session->set_flashdata('msg', 'You dont have Authentication to access this content');
      		$this->session->set_flashdata('type', 'danger');
      		$this->session->set_flashdata('icon', 'remove');
     
		}
		
		}

		else{

			echo "Submit Not Ok";
		}
	}

	

}

	?>