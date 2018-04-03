<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
class Update_Progress_Controller extends CI_Controller
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
		$this->load->model('Update_progress_Model');
		}

	public function index(){
	$policy_id = 14; 
	$branch_id = $this->session->userdata('branch_id');
    $user_id = $this->session->userdata('user_id');
    $this->Update_progress_Model->check_authentication($user_id,$policy_id);
    $result = $this->db->get();

    if($result->num_rows()>0){
    	$query1 = $this->db->query('select * from current_status');
    	$rows1 = $query1->result();
    if($user_id==1){
    	$query9 = $this->db->where('al_year',0)->get('student');
	  $al_year = $query9->num_rows();
      $this->Update_progress_Model->get_student_data();
      
    }
		else{

	  $query9 = $this->db->where('Branch_ID', $branch_id)->where('al_year',0)->get('student');
	  $al_year = $query9->num_rows();
      $this->Update_progress_Model->get_branch_student_data($user_id);
      
    }
		$query= $this->db->get();
		$row = $query->result();
		$data = array(
			'student' =>$row,
			'count' =>1,
			'status' => $rows1,
			'al_year' => $al_year,
			);

		$this->session->set_flashdata('msg', "You need to update students First Attempt A/L Year of " .$al_year. " files (Student Form).");
		$this->session->set_flashdata('type', 'danger');
      	$this->session->set_flashdata('icon', 'remove');
      	$this->session->set_flashdata('color', '#a50000');
		
		$this->load->view('Progress/Update_student_1',$data);
		}
    else{
      $this->session->set_flashdata('msg', 'You dont have Authentication to access this content');
      $this->session->set_flashdata('type', 'danger');
      $this->session->set_flashdata('icon', 'remove');
      redirect('Dashboard_Controller/index');
    }
	}

	public function load_select_page(){
	$policy_id = 14; 
    $user_id = $this->session->userdata('user_id');
    $this->Update_progress_Model->check_authentication($user_id,$policy_id);
    $result = $this->db->get();

    if($result->num_rows()>0){

    	if(isset($_POST['submit'])){
    		$id = $this->input->post('id');
    		$status = $this->input->post('status');

    		$data = array(
    			'status_id' => $status,
    			);

    		$this->Update_progress_Model->update_status($id,$data);
    	}

    	else{
    		$id = $this->session->userdata('st_id');
	    	$status = $this->session->userdata('status');
    	}
    	
    	$this->session->set_userdata('st_id', $id);
		$this->session->set_userdata('status', $status);
    	$this->load->view('Progress/select_update');	
    }
    else{
    	$this->session->set_flashdata('msg', 'You dont have Authentication to access this content');
	    $this->session->set_flashdata('type', 'danger');
	    $this->session->set_flashdata('icon', 'remove');
	    redirect('Dashboard_Controller/index');
    }
		
	}
	public function edit_2(){
		$policy_id = 14; 
	    $user_id = $this->session->userdata('user_id');
	    $this->Update_progress_Model->check_authentication($user_id,$policy_id);
	    $result = $this->db->get();

	    if($result->num_rows()>0){
	    	
	    		$id = $this->session->userdata('st_id');
	    		$status = $this->session->userdata('status');

	    		$this->Update_progress_Model->edit_1_data($id);
	    		$query = $this->db->get();
	    		$row = $query->result();

				$query1 = $this->db->query('select * from dsd_ofiice');
				$rows1 = $query1->result();

				$query2 = $this->db->query('select * from branch');
				$rows2 = $query2->result();

				$query3 = $this->db->query('select * from current_status');
				$rows3 = $query3->result();

				$query4 = $this->db->query('select * from gn_office');
   				$rows4 = $query4->result();

	    		$data = array(
	    			'student' =>$row,
	    			'dsd' =>$rows1,
					'branch' =>$rows2,
					'status' => $rows3,
					'gn' => $rows4
	    			);

	    		$this->load->view('Progress/Update_student_2', $data);
 	    	
	    }
	    else{
	      $this->session->set_flashdata('msg', 'You dont have Authentication to access this content');
	      $this->session->set_flashdata('type', 'danger');
	      $this->session->set_flashdata('icon', 'remove');
	      redirect('Dashboard_Controller/index');
    	}

	}

	public function update_2(){

			$id = $this->input->post('id');
			$name = $this->input->post('name');
			$name = ucwords($name);

			$nic = $this->input->post('nic');
			$dob = $this->input->post('dob');
			$ethnicity = $this->input->post('ethnicity');
			$ethnicity = ucwords($ethnicity);
			$gender = $this->input->post('gender');
			$add = $this->input->post('add');
			$add = ucwords($add);
			$tp = $this->input->post('tp');
			$gName = $this->input->post('gName');
			$gName = ucwords($gName);
			$rel = $this->input->post('rel');
			$rel = ucwords($rel);
			$al_year = $this->input->post('al_year');
			$bmi = $this->input->post('bmi');
			$dsd = $this->input->post('dsd');
			$gn = $this->input->post('gn');
			$branch = $this->input->post('branch');
			$sector = $this->input->post('sector');
			$dis = $this->input->post('dis');
			$dsd_name = $this->input->post('dsd_name');
			$samurdi = $this->input->post('samurdi');
			$low = $this->input->post('low');
			$bmipci = $this->input->post('bmipci');
			$pci = $this->input->post('pci');
			$client_code = $this->input->post('client_code');
			$user_id = $this->session->userdata('user_id');
			$status = $this->input->post('status');

			$data = array(
					
					'Gender' => $gender,
					'ST_Name'=> $name,
					'NIC' => $nic,
					'Ethnicity'=> $ethnicity,
					'DOB' => $dob,
					'Address' =>$add,
					'Contact_No'=> $tp,
					'Guardian_Name' => $gName,
					'Relationship' => $rel,
         			'al_year' => $al_year,
					'Direct_BMI' =>$bmi,
					'DSD_ID' =>$dsd,
					'GN_ID'=>$gn,
					'Sector_ID'=>$sector,
					'Branch_ID'=>$branch,
					'samurdi' => $samurdi,
					'LowIncome' =>$low,
					'BmiPci' =>$bmipci,
					'noneBmiPci' =>$pci,
					'client_code' =>$client_code,
         			'user_id' => $user_id,
					
				);

			$this->Update_progress_Model->update_2($id,$data);
			if($this->db->affected_rows()>0){

				
					$this->session->set_flashdata('msg', 'Data Updates Successfully to the Database Please Update Futher Details.');
					$this->session->set_flashdata('type', 'success');
					$this->session->set_flashdata('icon', 'ok');
	          		redirect('Update_Progress_Controller/load_select_page');
          								

			}

			else{
					$this->session->set_flashdata('msg', 'Data Updating Error');
					$this->session->set_flashdata('type', 'danger');
					$this->session->set_flashdata('icon', 'remove');
	          			redirect('Update_Progress_Controller/load_select_page');
					
			}
	}

	public function edit_3(){
		$id = $this->session->userdata('st_id');
		$status = $this->session->userdata('status');

		switch ($status) {
			case '1':
			case '3':
			case '4':
			case '5':
			case '6':
			case '8':
			case '9':

			$this->Update_progress_Model->edit_2_OL_data($id);
			$query = $this->db->get();


			if($query->num_rows()>0){
				$row = $query->result();
				$data = array(
					'ol_data' => $row,
				);
			$this->load->view('Progress/Update_student_3',$data);	
			}

			else{
				$this->session->set_flashdata('msg', 'Data getting Error');
				$this->session->set_flashdata('type', 'danger');
				$this->session->set_flashdata('icon', 'remove');
	          	redirect('Update_Progress_Controller/load_select_page');
				
			}
			break;
			case '7':
			break;
			default:
				
			break;
		}

		
	}

	public function update_3(){
		if(isset($_POST['submit'])){

			$st_id = $this->session->userdata('st_id');
			$status = $this->session->userdata('status');
			$user_id = $this->session->userdata('user_id');
			//OL data
  				$a = $this->input->post('a');
  				$b = $this->input->post('b');
  				$c = $this->input->post('c');
  				$s = $this->input->post('s');
  				$w = $this->input->post('w');
  				$maths = $this->input->post('maths');
  				$year = $this->input->post('year');
  				$medium = $this->input->post('medium');

  				$data = array(
  					'OL_A' => $a,
  					'OL_B' => $b,
  					'OL_C' => $c,
  					'OL_S' => $s,
  					'OL_W' => $w,
  					'Maths_Result' => $maths,
  					'Exam_Year' => $year,
  					'Medium' => $medium,
  					'Student_ID' => $st_id,
  					'user_id' => $user_id,
  					);

  				$this->Update_progress_Model->check_update($st_id);
  				$query = $this->db->get();
  				if($query->num_rows()==1){

  					$this->Update_progress_Model->update_3($st_id,$data);

  					if($this->db->affected_rows()>0){

	  					$this->session->set_flashdata('msg', 'Data Updates Successfully to the Database Please Update Futher Details.');
						$this->session->set_flashdata('type', 'success');
						$this->session->set_flashdata('icon', 'ok');
	          			redirect('Update_Progress_Controller/load_select_page');
  					}

  					else{
  						$this->session->set_flashdata('msg', 'Update Error');
						$this->session->set_flashdata('type', 'danger');
						$this->session->set_flashdata('icon', 'remove');
	          			redirect('Update_Progress_Controller/load_select_page');
						
  					
  				}
			
  				}

  				else{
  					$this->Update_progress_Model->insert_3($data);
  					if($this->db->affected_rows()>0){
  						$this->session->set_flashdata('msg', 'Data Updates Successfully to the Database Please Update Futher Details.');
						$this->session->set_flashdata('type', 'success');
						$this->session->set_flashdata('icon', 'ok');
	          			redirect('Update_Progress_Controller/load_select_page');
	          			
  					}

  					else{
  						$this->session->set_flashdata('msg', 'Insert Error');
						$this->session->set_flashdata('type', 'danger');
						$this->session->set_flashdata('icon', 'remove');
	          			redirect('Update_Progress_Controller/load_select_page');
						

  					}
  				}
		}

		else{
			$this->session->set_flashdata('msg', 'Unauthorize Access');
			$this->session->set_flashdata('type', 'danger');
			$this->session->set_flashdata('icon', 'remove');
	        redirect('Update_Progress_Controller/load_select_page');
			
		}
	}

	public function edit_4(){
		$id = $this->session->userdata('st_id');
		$status = $this->session->userdata('status');

		switch ($status) {
			case '3':
			case '4':
			case '5':
			case '6':
			case '8':
			case '9':
			case '7' :

			$this->Update_progress_Model->edit_2_AL_data($id);
			$query = $this->db->get();

			
				$row = $query->result();
				$data = array(
					'al_data' => $row,
				);
			$this->load->view('Progress/Update_student_4',$data);	
			
			break;
			
			default:
				
			break;
		}
	}

	public function update_al_1st(){
		if(isset($_POST['submit'])){

			$st_id = $this->session->userdata('st_id');
			$status = $this->session->userdata('status');
			$user_id = $this->session->userdata('user_id');

			//OL data
  				$stream = $this->input->post('stream1');
  				$school = $this->input->post('school1');
  				$year = $this->input->post('year1');
  				$index = $this->input->post('index1');
  				$a = $this->input->post('a_al1');
  				$b = $this->input->post('b_al1');
  				$c = $this->input->post('c_al1');
  				$s = $this->input->post('s_al1');
  				$w = $this->input->post('w_al1');
  				$pass = $this->input->post('pass1');
  				$z = $this->input->post('z1');
  				$d_rank = $this->input->post('d_rank1');
  				$i_rank = $this->input->post('i_rank1');

  				$data = array(
  					'Stream' =>$stream,
  					'School' =>$school,
  					'Year' => $year,
  					'Index_No' => $index,
  					'AL_A' => $a,
  					'AL_B' => $b,
  					'AL_C' => $c,
  					'AL_S' => $s,
  					'AL_W' => $w,
  					'Pass_Fail' => $pass,
  					'Attempt' =>1,
  					'Z_Score' => $z,
  					'District_Rank' => $d_rank,
  					'Island_Rank' => $i_rank,
  					'Student_ID' => $st_id,
  					'user_id' => $user_id,

  					);

  				$this->Update_progress_Model->check_update_al($st_id);
  				$query = $this->db->get();
  				if($query->num_rows()==1){

  					$this->Update_progress_Model->update_4($st_id,$data);

  					if($this->db->affected_rows()>0){

	  					$this->session->set_flashdata('msg', 'Data Updates Successfully to the Database Please Update Futher Details.');
						$this->session->set_flashdata('type', 'success');
						$this->session->set_flashdata('icon', 'ok');
	          			redirect('Update_Progress_Controller/load_select_page');
  					}

  					else{
  						$this->session->set_flashdata('msg', 'Update Error');
						$this->session->set_flashdata('type', 'danger');
						$this->session->set_flashdata('icon', 'remove');
	          			redirect('Update_Progress_Controller/load_select_page');
						
  					
  				}
			
  				}

  				else{
  					$this->Update_progress_Model->insert_4($data);
  					if($this->db->affected_rows()>0){
  						$this->session->set_flashdata('msg', 'Data insert Successfully to the Database Please Update Futher Details.');
						$this->session->set_flashdata('type', 'success');
						$this->session->set_flashdata('icon', 'ok');
	          			redirect('Update_Progress_Controller/load_select_page');
	          			
  					}

  					else{
  						$this->session->set_flashdata('msg', 'Insert Error');
						$this->session->set_flashdata('type', 'danger');
						$this->session->set_flashdata('icon', 'remove');
	          			redirect('Update_Progress_Controller/load_select_page');
  					}
  				}
		}

		else{
			$this->session->set_flashdata('msg', 'Unauthorize Access');
			$this->session->set_flashdata('type', 'danger');
			$this->session->set_flashdata('icon', 'remove');
	        redirect('Update_Progress_Controller/load_select_page');
			
		}
	}

	public function edit_5(){
		$id = $this->session->userdata('st_id');
		$status = $this->session->userdata('status');

		switch ($status) {
			case '3':
			case '4':
			case '5':
			case '6':
			case '8':
			

			
			$this->Update_progress_Model->edit_2_AL_data_2nd_attempt($id);
			$query1 = $this->db->get();

			$rows1 = $query1->result();

			if($query1->num_rows()>0){
				$data = array(
					'second_attempt' => $rows1,
				);
			$this->load->view('Progress/Update_student_5',$data);	
			}

			else{
				$this->session->set_flashdata('msg', 'Data getting Error.Check the Student Status is updated');
				$this->session->set_flashdata('type', 'danger');
				$this->session->set_flashdata('icon', 'remove');
	          	redirect('Update_Progress_Controller/load_select_page');
				
			}
			break;
			
			default:
				
			break;
		}
	}

	public function update_al_2nd(){
		if(isset($_POST['submit'])){

			$st_id = $this->session->userdata('st_id');
			$status = $this->session->userdata('status');
			$user_id = $this->session->userdata('user_id');

			//OL data
  				$stream = $this->input->post('stream1');
  				$school = $this->input->post('school1');
  				$year = $this->input->post('year1');
  				$index = $this->input->post('index1');
  				$a = $this->input->post('a_al1');
  				$b = $this->input->post('b_al1');
  				$c = $this->input->post('c_al1');
  				$s = $this->input->post('s_al1');
  				$w = $this->input->post('w_al1');
  				$pass = $this->input->post('pass1');
  				$z = $this->input->post('z1');
  				$d_rank = $this->input->post('d_rank1');
  				$i_rank = $this->input->post('i_rank1');

  				$data = array(
  					'Stream' =>$stream,
  					'School' =>$school,
  					'Year' => $year,
  					'Index_No' => $index,
  					'AL_A' => $a,
  					'AL_B' => $b,
  					'AL_C' => $c,
  					'AL_S' => $s,
  					'AL_W' => $w,
  					'Pass_Fail' => $pass,
  					'Attempt' =>2,
  					'Z_Score' => $z,
  					'District_Rank' => $d_rank,
  					'Island_Rank' => $i_rank,
  					'Student_ID' => $st_id,
  					'user_id' =>$user_id,
  					);

  				$this->Update_progress_Model->check_update_al_2nd($st_id);
  				$query = $this->db->get();
  				if($query->num_rows()==1){

  					$this->Update_progress_Model->update_5($st_id,$data);

  					if($this->db->affected_rows()>0){

	  					$this->session->set_flashdata('msg', 'Data Updates Successfully to the Database Please Update Futher Details.');
						$this->session->set_flashdata('type', 'success');
						$this->session->set_flashdata('icon', 'ok');
	          			redirect('Update_Progress_Controller/load_select_page');
  					}

  					else{
  						$this->session->set_flashdata('msg', 'Update Error');
						$this->session->set_flashdata('type', 'danger');
						$this->session->set_flashdata('icon', 'remove');
	          			redirect('Update_Progress_Controller/load_select_page');
						
  					
  				}
			
  				}

  				else{
  					$this->Update_progress_Model->insert_5($data);
  					if($this->db->affected_rows()>0){
  						$this->session->set_flashdata('msg', 'Data insert Successfully to the Database Please Update Futher Details.');
						$this->session->set_flashdata('type', 'success');
						$this->session->set_flashdata('icon', 'ok');
	          			redirect('Update_Progress_Controller/load_select_page');
	          			
  					}

  					else{
  						$this->session->set_flashdata('msg', 'Insert Error');
						$this->session->set_flashdata('type', 'danger');
						$this->session->set_flashdata('icon', 'remove');
	          			redirect('Update_Progress_Controller/load_select_page');
  					}
  				}
		}

		else{
			$this->session->set_flashdata('msg', 'Unauthorize Access');
			$this->session->set_flashdata('type', 'danger');
			$this->session->set_flashdata('icon', 'remove');
	        redirect('Update_Progress_Controller/load_select_page');
			
		}
	}

	public function edit_6(){
		$st_id = $this->session->userdata('st_id');
		$status = $this->session->userdata('status');

		switch ($status) {
			case '2':
			//Dropout
			$this->Update_progress_Model->edit_dropout_data($st_id);
			$query1 = $this->db->get();

			$rows1 = $query1->result();

			if($query1->num_rows()>0){
				$data = array(
					'dropout' => $rows1,
				);
			$this->load->view('Progress/update_after_al_status',$data);	
			}

			else{
				$this->session->set_flashdata('msg', 'Data getting Error.Check the Student Status is updated');
				$this->session->set_flashdata('type', 'danger');
				$this->session->set_flashdata('icon', 'remove');
	          	redirect('Update_Progress_Controller/load_select_page');
				
			}
			break;
			case '3':
			//no job

			$this->Update_progress_Model->edit_no_job_data($st_id);
			$query1 = $this->db->get();

			$rows1 = $query1->result();

			if($query1->num_rows()>0){
				$data = array(
					'no_job' => $rows1,
				);
			$this->load->view('Progress/update_after_al_status',$data);	
			}

			else{
				$this->session->set_flashdata('msg', 'Data getting Error.Check the Student Status is updated');
				$this->session->set_flashdata('type', 'danger');
				$this->session->set_flashdata('icon', 'remove');
	          	redirect('Update_Progress_Controller/load_select_page');
				
			}
			break;

			case '4':
			case '5':

			$this->Update_progress_Model->edit_vt_data($st_id);
			$query1 = $this->db->get();

			$rows1 = $query1->result();

			if($query1->num_rows()>0){
				$data = array(
					'vt' => $rows1,
				);
			$this->load->view('Progress/update_after_al_status',$data);	
			}

			else{
				$this->session->set_flashdata('msg', 'Data getting Error.Check the Student Status is updated');
				$this->session->set_flashdata('type', 'danger');
				$this->session->set_flashdata('icon', 'remove');
	          	redirect('Update_Progress_Controller/load_select_page');
				
			}
			break;
			case '6':
			// after AL Jobs
			$this->Update_progress_Model->edit_job_data($st_id);
			$query1 = $this->db->get();

			$rows1 = $query1->result();

			if($query1->num_rows()>0){
				$data = array(
					'job_data' => $rows1,
				);
			$this->load->view('Progress/update_after_al_status',$data);	
			}

			else{
				$this->session->set_flashdata('msg', 'Data getting Error.Check the Student Status is updated');
				$this->session->set_flashdata('type', 'danger');
				$this->session->set_flashdata('icon', 'remove');
	          	redirect('Update_Progress_Controller/load_select_page');
				
			}
			break;

			case '8':
			// after AL University
			$this->Update_progress_Model->edit_university_data($st_id);
			$query1 = $this->db->get();

			$rows1 = $query1->result();

			if($query1->num_rows()>0){
				$data = array(
					'university' => $rows1,
				);
			$this->load->view('Progress/update_after_al_status',$data);	
			}

			else{
				$this->session->set_flashdata('msg', 'Data getting Error.Check the Student Status is updated');
				$this->session->set_flashdata('type', 'danger');
				$this->session->set_flashdata('icon', 'remove');
	          	redirect('Update_Progress_Controller/load_select_page');
				
			}
			break;
			break;
			
			default:
				
			break;
		}

	}

	public function update_after_al(){
		$st_id = $this->session->userdata('st_id');
		$status = $this->session->userdata('status');

		switch ($status) {
			case '2':
			//dropout
			if(isset($_POST['submit'])){
				$st_id = $this->session->userdata('st_id');
				$status = $this->session->userdata('status');
				$user_id = $this->session->userdata('user_id');


  				$reason = $this->input->post('reason');

  				$data = array(
  					'Reason' => $reason,
  					'student_id' => $st_id,
  					'user_id' => $user_id,
  					);

  				$this->Update_progress_Model->check_dropout($st_id);
  				$query = $this->db->get();
  				if($query->num_rows()==1){
  					$this->Update_progress_Model->update_10($st_id,$data);

  					if($this->db->affected_rows()>0){
  						$this->session->set_flashdata('msg', 'Data Updates Successfully to the Database Please Update Futher Details.');
						$this->session->set_flashdata('type', 'success');
						$this->session->set_flashdata('icon', 'ok');
	          			redirect('Update_Progress_Controller/load_select_page');
  					}

  					else{
  						$this->session->set_flashdata('msg', 'Update Error');
						$this->session->set_flashdata('type', 'danger');
						$this->session->set_flashdata('icon', 'remove');
	          			redirect('Update_Progress_Controller/load_select_page');
  					}
  				}

  				else{
  					$this->Update_progress_Model->insert_10($data);
  					if($this->db->affected_rows()>0){
  						$this->session->set_flashdata('msg', 'Data insert Successfully to the Database Please Update Futher Details.');
						$this->session->set_flashdata('type', 'success');
						$this->session->set_flashdata('icon', 'ok');
	          			redirect('Update_Progress_Controller/load_select_page');
  					}

  					else{
  						$this->session->set_flashdata('msg', 'Insert Error');
						$this->session->set_flashdata('type', 'danger');
						$this->session->set_flashdata('icon', 'remove');
	          			redirect('Update_Progress_Controller/load_select_page');
  					}
  				}

			}

			else{
				$this->session->set_flashdata('msg', 'Unauthorize Access');
				$this->session->set_flashdata('type', 'danger');
				$this->session->set_flashdata('icon', 'remove');
	        	redirect('Update_Progress_Controller/load_select_page');
			}
			
			break;

			case '3':
			//no job
			if(isset($_POST['submit'])){
				$st_id = $this->session->userdata('st_id');
				$status = $this->session->userdata('status');
				$user_id = $this->session->userdata('user_id');

  				$reason = $this->input->post('reason');

  				$data = array(
  					'reason' => $reason,
  					'student_id' => $st_id,
  					'user_id' =>$user_id,
  					);

  				$this->Update_progress_Model->check_no_job($st_id);
  				$query = $this->db->get();
  				if($query->num_rows()==1){
  					$this->Update_progress_Model->update_6($st_id,$data);

  					if($this->db->affected_rows()>0){
  						$this->session->set_flashdata('msg', 'Data Updates Successfully to the Database Please Update Futher Details.');
						$this->session->set_flashdata('type', 'success');
						$this->session->set_flashdata('icon', 'ok');
	          			redirect('Update_Progress_Controller/load_select_page');
  					}

  					else{
  						$this->session->set_flashdata('msg', 'Update Error');
						$this->session->set_flashdata('type', 'danger');
						$this->session->set_flashdata('icon', 'remove');
	          			redirect('Update_Progress_Controller/load_select_page');
  					}
  				}

  				else{
  					$this->Update_progress_Model->insert_6($data);
  					if($this->db->affected_rows()>0){
  						$this->session->set_flashdata('msg', 'Data insert Successfully to the Database Please Update Futher Details.');
						$this->session->set_flashdata('type', 'success');
						$this->session->set_flashdata('icon', 'ok');
	          			redirect('Update_Progress_Controller/load_select_page');
  					}

  					else{
  						$this->session->set_flashdata('msg', 'Insert Error');
						$this->session->set_flashdata('type', 'danger');
						$this->session->set_flashdata('icon', 'remove');
	          			redirect('Update_Progress_Controller/load_select_page');
  					}
  				}

			}

			else{
				$this->session->set_flashdata('msg', 'Unauthorize Access');
				$this->session->set_flashdata('type', 'danger');
				$this->session->set_flashdata('icon', 'remove');
	        	redirect('Update_Progress_Controller/load_select_page');
			}
			
			break;
			//after AL courses
			case '4':
			case '5':
			if(isset($_POST['submit'])){
				$st_id = $this->session->userdata('st_id');
				$status = $this->session->userdata('status');
				$user_id = $this->session->userdata('user_id');


  				$course = $this->input->post('course');
				$category = $this->input->post('category');
				$institute = $this->input->post('institute');
				$year = $this->input->post('year');

				$data = array(
					'VT_Name' => $course,
					'Category' => $category,
					'Institute' => $institute,
					'Year_Completion' => $year,
					'Student_ID' => $st_id, 
					'user_id' => $user_id,
					);


  				$this->Update_progress_Model->check_vt($st_id);
  				$query = $this->db->get();
  				if($query->num_rows()==1){
  					$this->Update_progress_Model->update_7($st_id,$data);

  					if($this->db->affected_rows()>0){
  						$this->session->set_flashdata('msg', 'Data Updates Successfully to the Database Please Update Futher Details.');
						$this->session->set_flashdata('type', 'success');
						$this->session->set_flashdata('icon', 'ok');
	          			redirect('Update_Progress_Controller/load_select_page');
  					}

  					else{
  						$this->session->set_flashdata('msg', 'Update Error');
						$this->session->set_flashdata('type', 'danger');
						$this->session->set_flashdata('icon', 'remove');
	          			redirect('Update_Progress_Controller/load_select_page');
  					}
  				}

  				else{
  					$this->Update_progress_Model->insert_7($data);
  					if($this->db->affected_rows()>0){
  						$this->session->set_flashdata('msg', 'Data insert Successfully to the Database Please Update Futher Details.');
						$this->session->set_flashdata('type', 'success');
						$this->session->set_flashdata('icon', 'ok');
	          			redirect('Update_Progress_Controller/load_select_page');
  					}

  					else{
  						$this->session->set_flashdata('msg', 'Insert Error');
						$this->session->set_flashdata('type', 'danger');
						$this->session->set_flashdata('icon', 'remove');
	          			redirect('Update_Progress_Controller/load_select_page');
  					}
  				}

			}

			else{
				$this->session->set_flashdata('msg', 'Unauthorize Access');
				$this->session->set_flashdata('type', 'danger');
				$this->session->set_flashdata('icon', 'remove');
	        	redirect('Update_Progress_Controller/load_select_page');
			}
			break;
			case '6':
			//after AL Job
			if(isset($_POST['submit'])){
				$st_id = $this->session->userdata('st_id');
				$user_id = $this->session->userdata('user_id');
				$status = $this->session->userdata('status');

  				$position = $this->input->post('position');
				$company = $this->input->post('company');
				

				$data = array(
					'Job_Position' => $position,
					'Company' => $company,
					'Student_ID' => $st_id, 
					'user_id' => $user_id,
					);

  				$this->Update_progress_Model->check_job($st_id);
  				$query = $this->db->get();
  				if($query->num_rows()==1){
  					$this->Update_progress_Model->update_8($st_id,$data);

  					if($this->db->affected_rows()>0){
  						$this->session->set_flashdata('msg', 'Data Updates Successfully to the Database Please Update Futher Details.');
						$this->session->set_flashdata('type', 'success');
						$this->session->set_flashdata('icon', 'ok');
	          			redirect('Update_Progress_Controller/load_select_page');
  					}

  					else{
  						$this->session->set_flashdata('msg', 'Update Error');
						$this->session->set_flashdata('type', 'danger');
						$this->session->set_flashdata('icon', 'remove');
	          			redirect('Update_Progress_Controller/load_select_page');
  					}
  				}

  				else{
  					$this->Update_progress_Model->insert_8($data);
  					if($this->db->affected_rows()>0){
  						$this->session->set_flashdata('msg', 'Data insert Successfully to the Database Please Update Futher Details.');
						$this->session->set_flashdata('type', 'success');
						$this->session->set_flashdata('icon', 'ok');
	          			redirect('Update_Progress_Controller/load_select_page');
  					}

  					else{
  						$this->session->set_flashdata('msg', 'Insert Error');
						$this->session->set_flashdata('type', 'danger');
						$this->session->set_flashdata('icon', 'remove');
	          			redirect('Update_Progress_Controller/load_select_page');
  					}
  				}

			}

			else{
				$this->session->set_flashdata('msg', 'Unauthorize Access');
				$this->session->set_flashdata('type', 'danger');
				$this->session->set_flashdata('icon', 'remove');
	        	redirect('Update_Progress_Controller/load_select_page');
			}
			
			break;

			case '8':
			//After AL University
			if(isset($_POST['submit'])){
				$st_id = $this->session->userdata('st_id');
				$status = $this->session->userdata('status');
				$user_id = $this->session->userdata('user_id');

  				$uni = $this->input->post('uni');
				$fac = $this->input->post('fac');
				

				$data = array(
					'Name' => $uni,
					'Faculty' => $fac,
					'Student_ID' => $st_id, 
					'user_id' => $user_id,
					);

  				$this->Update_progress_Model->check_uni($st_id);
  				$query = $this->db->get();
  				if($query->num_rows()==1){
  					$this->Update_progress_Model->update_9($st_id,$data);

  					if($this->db->affected_rows()>0){
  						$this->session->set_flashdata('msg', 'Data Updates Successfully to the Database Please Update Futher Details.');
						$this->session->set_flashdata('type', 'success');
						$this->session->set_flashdata('icon', 'ok');
	          			redirect('Update_Progress_Controller/load_select_page');
  					}

  					else{
  						$this->session->set_flashdata('msg', 'Update Error');
						$this->session->set_flashdata('type', 'danger');
						$this->session->set_flashdata('icon', 'remove');
	          			redirect('Update_Progress_Controller/load_select_page');
  					}
  				}

  				else{
  					$this->Update_progress_Model->insert_9($data);
  					if($this->db->affected_rows()>0){
  						$this->session->set_flashdata('msg', 'Data insert Successfully to the Database Please Update Futher Details.');
						$this->session->set_flashdata('type', 'success');
						$this->session->set_flashdata('icon', 'ok');
	          			redirect('Update_Progress_Controller/load_select_page');
  					}

  					else{
  						$this->session->set_flashdata('msg', 'Insert Error');
						$this->session->set_flashdata('type', 'danger');
						$this->session->set_flashdata('icon', 'remove');
	          			redirect('Update_Progress_Controller/load_select_page');
  					}
  				}

			}

			else{
				$this->session->set_flashdata('msg', 'Unauthorize Access');
				$this->session->set_flashdata('type', 'danger');
				$this->session->set_flashdata('icon', 'remove');
	        	redirect('Update_Progress_Controller/load_select_page');
			}
			
			
			break;
			
			default:
				
			break;
		}
	}

	public function edit_7(){
		$id = $this->session->userdata('st_id');
		$status = $this->session->userdata('status');

		switch ($status) {
			case '1':
			case '2':
			case '3':
			case '4':
			case '5':
			case '6':
			case '7':
			case '8':
			case '9':

			$this->Update_progress_Model->edit_scholar($id);
			$query = $this->db->get();


			if($query->num_rows()>0){
				$row = $query->result();
				$data = array(
					'scholar' => $row,
				);
			$this->load->view('Progress/Update_student_6',$data);	
			}

			else{
				$this->session->set_flashdata('msg', 'Data getting Error');
				$this->session->set_flashdata('type', 'danger');
				$this->session->set_flashdata('icon', 'remove');
	          	redirect('Update_Progress_Controller/load_select_page');
				
			}
			break;
			
			default:
				
			break;
		}

		
	}

public function update_scholar(){
	//update scholarship data
			if(isset($_POST['submit'])){
				$st_id = $this->session->userdata('st_id');
				$status = $this->session->userdata('status');
				$user_id = $this->session->userdata('user_id');

  				//scholar data
  				$amount = $this->input->post('amount');
  				$p_year = $this->input->post('p_year');
  				$month = $this->input->post('month');
  				$p_year = $this->input->post('p_year');
  				$renewel = $this->input->post('renewel');
  				$p_status = $this->input->post('p_status');
          		$finished_year = $this->input->post('finished_year');
  				//$dropout = $this->input->post('dropout');

  				
  				// Scholar array
  				$data = array(
  						'Scholar_Amount' => $amount,
  						'Payment_Start_Year' => $p_year,
  						'Payment_Start_Month' => $month,
  						'Renewal_Document' => $renewel,
  						'p_status' => $p_status,
              			'finished_year' => $finished_year,
  						//'Reason_For_Dropouts' => $dropout,
  						'Student_ID' => $st_id,
  						'user_id' => $user_id,
  					);

  				$this->Update_progress_Model->check_scholar($st_id);
  				$query = $this->db->get();
  				if($query->num_rows()==1){
  					$this->Update_progress_Model->update_11($st_id,$data);

  					if($this->db->affected_rows()>0){
  						$this->session->set_flashdata('msg', 'Data Updates Successfully to the Database Please Update Futher Details.');
						$this->session->set_flashdata('type', 'success');
						$this->session->set_flashdata('icon', 'ok');
	          			redirect('Update_Progress_Controller/load_select_page');
  					}

  					else{
  						$this->session->set_flashdata('msg', 'Update Error');
						$this->session->set_flashdata('type', 'danger');
						$this->session->set_flashdata('icon', 'remove');
	          			redirect('Update_Progress_Controller/load_select_page');
  					}
  				}

  				else{
  					$this->Update_progress_Model->insert_11($data);
  					if($this->db->affected_rows()>0){
  						$this->session->set_flashdata('msg', 'Data insert Successfully to the Database Please Update Futher Details.');
						$this->session->set_flashdata('type', 'success');
						$this->session->set_flashdata('icon', 'ok');
	          			redirect('Update_Progress_Controller/load_select_page');
  					}

  					else{
  						$this->session->set_flashdata('msg', 'Insert Error');
						$this->session->set_flashdata('type', 'danger');
						$this->session->set_flashdata('icon', 'remove');
	          			redirect('Update_Progress_Controller/load_select_page');
  					}
  				}

			}

			else{
				$this->session->set_flashdata('msg', 'Unauthorize Access');
				$this->session->set_flashdata('type', 'danger');
				$this->session->set_flashdata('icon', 'remove');
	        	redirect('Update_Progress_Controller/load_select_page');
			}
}


}

?>