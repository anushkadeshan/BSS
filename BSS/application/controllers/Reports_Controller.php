<?php 

	class Reports_Controller extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			if($this->session->userdata('username')!=TRUE) {
        			$this->load->helper('url');
        			$this->session->set_flashdata('last_page', current_url());
        			$this->session->set_flashdata('flash_data','You Need to log in to system');
                	$this->session->set_flashdata('type', 'info');
        			redirect('Login_controller/index');
			}
			$this->load->model('Student_Model');
			$this->load->model('Reports_model');
		}

		public function index()
		{
			$this->load->view('Reports/Select_report');
		}
		
		public function all_students(){
			
			$user_id = $this->session->userdata('user_id');
			if($user_id==1){
			  $this->Reports_model->get_student_data();
			}
				else{
			  $this->Reports_model->get_branch_student_data($user_id);
			}
				$query= $this->db->get();
				$row = $query->result();
				$data = array(
					'student' =>$row,
					'count' =>1,
					);
				
				$this->load->view('Reports/All_Student',$data);
	
	}
	
	public function Single_student(){
		$st_id = $this->uri->segment(3);
		$user_id = $this->session->userdata('user_id');
		$this->Reports_model->get_status($st_id);
		$query = $this->db->get();
		
		$row = $query->row_array();
      	$status_id = $row['status_id'];
		
		$this->Reports_model->get_all_student_data($st_id);
		
		
		$query = $this->db->get();
		$rows = $query->result();
		
		$data = array(
			'status_id' => $status_id,
			'st_data' => $rows,
		);
		
		$this->load->view('Reports/single_student',$data);
	}
	
	public function dependent_ds(){
		$ds_id = $this->input->post('dsd');
		
		  $this->output
		  ->set_content_type("application/json")
           ->set_output(json_encode($this->Reports_model->getdsd($ds_id)));
		   
	}
	public function location(){
		$user_id = $this->session->userdata('user_id');
		if($this->session->userdata('user_id')==1){
			$query1 = $this->db->query('select * from dsd_ofiice'); 
			$rows1 = $query1->result();
		}
		else{
			$this->Student_Model->get_dsd($user_id);
			$query1 = $this->db->get();
			$rows1 = $query1->result();
		}
		
		
		$query2 = $this->db->query('select * from branch');
		$rows2 = $query2->result();

		$query4 = $this->db->query('select * from gn_office');
		$rows4 = $query4->result();
		
		if(isset($_POST['submit'])){
			
			$ds_id = $this->input->post('dsd');
			$gn_id = $this->input->post('gn');
			
			if($this->session->userdata('user_id')==1){
				
			$this->Reports_model->get_location_data($ds_id,$gn_id);

		}
		else{
			$this->Reports_model->get_location_data_branch($ds_id,$gn_id,$user_id);
		}
			
		}
		
		else{
			
			if($user_id==1){
			  $this->Reports_model->get_student_data();
			}
				else{
			  $this->Reports_model->get_branch_student_data($user_id);
			}	
			}
			$query= $this->db->get();
			$row_count = $query->num_rows();
			$row = $query->result();
				$data = array(
					'student' =>$row,
					'count' =>1,
					'branch' => $rows2,
					'dsd' => $rows1,
					'gn'=> $rows4,
					'row_count'=>$row_count,
					);
			$this->load->view('Reports/location',$data);
	}
	
	public function bio(){
		$user_id = $this->session->userdata('user_id');
		
		
		if(isset($_POST['submit'])){
			
			$ethnicity = $this->input->post('ethnicity');
			$gender = $this->input->post('gender');
			
			if($this->session->userdata('user_id')==1){
				
			$this->Reports_model->get_bio_data($ethnicity,$gender);

		}
		else{
			$this->Reports_model->get_bio_data_branch($ethnicity,$gender,$user_id);
		}
			
		}
		
		else{
			
			if($user_id==1){
			  $this->Reports_model->get_student_data();
			}
				else{
			  $this->Reports_model->get_branch_student_data($user_id);
			}	
			}
			$query= $this->db->get();
			$row_count = $query->num_rows();
			$row = $query->result();
				$data = array(
					'student' =>$row,
					'count' =>1,				
					'row_count'=>$row_count,
					);
			$this->load->view('Reports/bio',$data);
	}
	
	public function sector(){
		$user_id = $this->session->userdata('user_id');
		
		
		if(isset($_POST['submit'])){
			
			$sector = $this->input->post('sector');
			$samurdi = $this->input->post('samurdi');
			$low = $this->input->post('low');
			$bmi = $this->input->post('bmi');
			
			if($this->session->userdata('user_id')==1){
				
			$this->Reports_model->get_sector_data($sector,$samurdi,$low,$bmi);

		}
		else{
			$this->Reports_model->get_sector_data_branch($sector,$samurdi,$low,$bmi,$user_id);
		}
			
		}
		
		else{
			
			if($user_id==1){
			  $this->Reports_model->get_student_data();
			}
				else{
			  $this->Reports_model->get_branch_student_data($user_id);
			}	
			}
			$query= $this->db->get();
			$row_count = $query->num_rows();
			$row = $query->result();
				$data = array(
					'student' =>$row,
					'count' =>1,				
					'row_count'=>$row_count,
					);
			$this->load->view('Reports/sector',$data);
	}

	public function status(){
		$user_id = $this->session->userdata('user_id');
		
		
		if(isset($_POST['submit'])){
			
			$status_id = $this->input->post('status');
			
			if($this->session->userdata('user_id')==1){
				
			$this->Reports_model->get_status_data($status_id);

		}
		else{
			$this->Reports_model->get_status_data_branch($status_id,$user_id);
		}
			
		}
		
		else{
			
			if($user_id==1){
			  $this->Reports_model->get_student_data();
			}
				else{
			  $this->Reports_model->get_branch_student_data($user_id);
			}	
			}
			$query= $this->db->get();
			$row_count = $query->num_rows();
			$row = $query->result();

			//get status
			$query1 = $this->db->query('select * from current_status');
			$row1 = $query1->result();
				$data = array(
					'student' =>$row,
					'count' =>1,				
					'row_count'=>$row_count,
					'status' => $row1,
					);
			$this->load->view('Reports/status',$data);
	}
	
	public function al_result(){
		$user_id = $this->session->userdata('user_id');
		
		
		if(isset($_POST['submit'])){
			
			$stream = $this->input->post('stream1');
			$year = $this->input->post('year');
			$pass = $this->input->post('pass1');
			
			if($this->session->userdata('user_id')==1){
				
			$this->Reports_model->get_al_data($stream,$year,$pass);

		}
		else{
			$this->Reports_model->get_al_data_branch($stream,$year,$pass,$user_id);
		}
			
		}
		
		else{
			
			if($user_id==1){
			  $this->Reports_model->get_student_al_data();
			}
				else{
			  $this->Reports_model->get_branch_student_al_data($user_id);
			}	
			}
			$query= $this->db->get();
			$row_count = $query->num_rows();
			$row = $query->result();

			//get A/L Year
			$this->Reports_model->get_al_year();
			$query1 = $this->db->get();
			$rows1 = $query1->result();
				$data = array(
					'student' =>$row,
					'count' =>1,				
					'row_count'=>$row_count,
					'year' => $rows1,
					);
			
			$this->load->view('Reports/al',$data);
	}
	
	public function branch(){
		$user_id = $this->session->userdata('user_id');
		
		
		if(isset($_POST['submit'])){
			
			$branch_id = $this->input->post('branch_id');
			
			if($this->session->userdata('user_id')==1){
				
			$this->Reports_model->get_branch_data($branch_id);

		}
		else{
			
		}
			
		}
		
		else{
			
			if($user_id==1){
			  $this->Reports_model->get_student_data();
			}
				else{
			  
			}	
			}
			$query= $this->db->get();
			$row_count = $query->num_rows();
			$row = $query->result();

			//get status
			$query1 = $this->db->query('select * from branch');
			$row1 = $query1->result();
				$data = array(
					'student' =>$row,
					'count' =>1,				
					'row_count'=>$row_count,
					'branches' => $row1,
					);
			$this->load->view('Reports/branch',$data);
	}

}
?>
