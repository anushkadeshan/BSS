<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
class Student_Controller extends CI_Controller
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
		$this->load->model('Student_Model');
		}

	public function index(){
		
    $policy_id = 16; 
    $user_id = $this->session->userdata('user_id');
    $this->Student_Model->check_authentication($user_id,$policy_id);
    $result = $this->db->get();

    if($result->num_rows()>0){
    if($user_id==1){
      $this->Student_Model->get_student_data();
    }
		else{
      $this->Student_Model->get_branch_student_data($user_id);
    }
		$query= $this->db->get();
		$row = $query->result();
		$data = array(
			'student' =>$row,
			'count' =>1,
			);
		
		$this->load->view('Progress/All_Student',$data);
		}
    else{
      $this->session->set_flashdata('msg', 'You dont have Authentication to access this content');
      $this->session->set_flashdata('type', 'danger');
      $this->session->set_flashdata('icon', 'remove');
      redirect('Dashboard_Controller/index');
    }
	}

	public function n_student(){
    $policy_id = 13; 
    $user_id = $this->session->userdata('user_id');
    $this->Student_Model->check_authentication($user_id,$policy_id);
    $result = $this->db->get();

    if($result->num_rows()>0){

    if($this->session->userdata('user_id')==1){
      $query1 = $this->db->query('select * from dsd_ofiice');
      $rows1 = $query1->result();

      $query4 = $this->db->query('select * from gn_office');
      $rows4 = $query4->result();
    }

    else{

        $this->Student_Model->get_dsd($user_id);
        $query1 = $this->$this->db->get();
        $rows1 = $query1->result();
    }
		
    $query2 = $this->db->query('select * from branch');
    $rows2 = $query2->result();

    $query3 = $this->db->query('select * from current_status');
    $rows3 = $query3->result();

		$data = array(
				'dsd' =>$rows1,
				'branch' =>$rows2,
				'status' => $rows3,
        'gn' => $rows4,
			);

		$this->load->view('Progress/Add_New_Student',$data);
  }
  else{
      $this->session->set_flashdata('msg', 'You dont have Authentication to access this content');
      $this->session->set_flashdata('type', 'danger');
      $this->session->set_flashdata('icon', 'remove');
      redirect('Dashboard_Controller/index');
    }
	}


	public function save(){
		if(isset($_POST['submit'])){

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
			$status = $this->input->post('status');
			$client_code = $this->input->post('client_code');

			
			$ref_no = $this->input->post('code');
			$ref_no = ucwords($ref_no);
			$user_id = $this->session->userdata('user_id');
			
				$data = array(
					'Ref_No' => $ref_no,
					'Gender' => $gender,
					'ST_Name'=> $name,
					'NIC' => $nic,
					'Ethnicity'=> $ethnicity,
					'DOB' => $dob,
					'Address' =>$add,
					'Contact_No'=> $tp,
					'Guardian_Name' => $gName,
					'Relationship' => $rel,
					'Direct_BMI' =>$bmi,
					'DSD_ID' =>$dsd,
					'GN_ID'=>$gn,
					'Sector_ID'=>$sector,
					'Branch_ID'=>$branch,
					'samurdi' => $samurdi,
					'LowIncome' =>$low,
					'BmiPci' =>$bmipci,
					'noneBmiPci' =>$pci,
					'status_id' => $status,
					'client_code' =>$client_code,
					'user_id' => $user_id,
					
				);

			$this->Student_Model->save_data($data);
			$insert_id = $this->db->insert_id();
			if($this->db->affected_rows()>0){
					$this->session->set_flashdata('msg', 'Data Added Successfully to the Database Please Enter Futher Details.');
					$this->session->set_flashdata('type', 'success');
					$this->session->set_flashdata('icon', 'ok');
					$this->session->set_userdata('status', $status);
          $insert_id = $this->db->insert_id();
					$this->session->set_userdata('id', $insert_id);
          redirect('Student_Controller/Load_futher_info');					

			}

			else{
					$this->session->set_flashdata('msg', 'Data Adding Error');
					$this->session->set_flashdata('type', 'danger');
					$this->session->set_flashdata('icon', 'remove');
					redirect('Student_Controller/index');
			}

			
			
		}

		else{

			echo "Submit Not Ok";
		}
	} 

	public function Load_futher_info(){

    $this->load->view('Progress/Futher_info');

  	}

  	public function save_futher(){
  		$no_attempt = $this->input->post('no_attempt');
  		$status = $this->input->post('status');
  		$ST_ID = $this->input->post('id');
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
          

  				//scholar data
  				$amount = $this->input->post('amount');
  				$p_year = $this->input->post('p_year');
  				$month = $this->input->post('month');
  				$p_year = $this->input->post('p_year');
  				$renewel = $this->input->post('renewel');
  				//$dropout = $this->input->post('dropout');

  				//OL array
  				$data_OL = array(
  						'OL_A' => $a,
  						'OL_B' => $b,
  						'OL_C' => $c,
  						'OL_S' => $s,
  						'OL_W' => $w,
  						'Maths_Result' => $maths,
  						'Exam_Year' => $year,
  						'Medium' => $medium,
  						'Student_ID' => $ST_ID,
              'user_id' => $user_id,

  					);
  				// Scholar array
  				$data_scholar = array(
  						'Scholar_Amount' => $amount,
  						'Payment_Start_Year' => $p_year,
  						'Payment_Start_Month' => $month,
  						'Renewal_Document' => $renewel,
  						//'Reason_For_Dropouts' => $dropout,
  						'Student_ID' => $ST_ID,
              'user_id' => $user_id,

  					);

  		if( ($status==3) || ($status==4) || ($status==5) || ($status==6) || ($status==8)){
  			

  				//AL first attempt
  				$stream1 = $this->input->post('stream1');
  				$school1 = $this->input->post('school1');
  				$year1 = $this->input->post('year1');
  				$index1 = $this->input->post('index1');
  				$a_al1 = $this->input->post('a_al1');
  				$b_al1 = $this->input->post('b_al1');
  				$c_al1 = $this->input->post('c_al1');
  				$s_al1 = $this->input->post('s_al1');
  				$w_al1 = $this->input->post('w_al1');
  				$pass1 = $this->input->post('pass1');
  				$z1 = $this->input->post('z1');
  				$d_rank1 = $this->input->post('d_rank1');
  				$i_rank1 = $this->input->post('i_rank1');

  				//AL second attempt
  				$stream2 = $this->input->post('stream2');
  				$school2 = $this->input->post('school2');
  				$year2 = $this->input->post('year2');
  				$index2 = $this->input->post('index2');
  				$a_al2 = $this->input->post('a_al2');
  				$b_al2 = $this->input->post('b_al2');
  				$c_al2 = $this->input->post('c_al2');
  				$s_al2 = $this->input->post('s_al2');
  				$w_al2 = $this->input->post('w_al2');
  				$pass2 = $this->input->post('pass2');
  				$z2 = $this->input->post('z2');
  				$d_rank2 = $this->input->post('d_rank2');
  				$i_rank2 = $this->input->post('i_rank2');

  			if($no_attempt==2){

  				
  				// AL result attempt 1 & 2
  				$data_AL = array(
  					array(
  						'Stream' => $stream1,
  						'School' => $school1,
  						'Year' => $year1,
  						'Index_No' => $index1,
  						'AL_A' => $a_al1,
  						'AL_B' => $b_al1,
  						'AL_C' => $c_al1,
  						'AL_S' => $s_al1,
  						'AL_W' => $w_al1,
  						'Pass_Fail' => $pass1,
  						'Z_Score' => $z1,
  						'District_Rank' => $d_rank1,
  						'Island_Rank' => $i_rank1,
  						'Attempt' => 1,
  						'Student_ID' => $ST_ID,
              'user_id' => $user_id,

  						),
  					array(
  						'Stream' => $stream2,
  						'School' => $school2,
  						'Year' => $year2,
  						'Index_No' => $index2,
  						'AL_A' => $a_al2,
  						'AL_B' => $b_al2,
  						'AL_C' => $c_al2,
  						'AL_S' => $s_al2,
  						'AL_W' => $w_al2,
  						'Pass_Fail' => $pass2,
  						'Z_Score' => $z2,
  						'District_Rank' => $d_rank2,
  						'Island_Rank' => $i_rank2,
  						'Attempt' => 2,
  						'Student_ID' => $ST_ID,
              'user_id' => $user_id,

  						)
  						
  					);
  				
  				$this->Student_Model->save_futher_info($data_OL,$data_scholar,$data_AL);
  				if($this->db->affected_rows()>0){
  				$this->session->unset_userdata('status');
  				$this->session->unset_userdata('id');
          $this->session->set_flashdata('msg', 'Data is Added Successfully. Add require Infomation also');
          $this->session->set_flashdata('type', 'success'); 
          $this->session->set_flashdata('icon', 'ok');
          $this->session->set_flashdata('status', $status); 
          $this->session->set_flashdata('id', $ST_ID);
            redirect('Student_Controller/after_AL_status');
  				}

  			else{
  				echo "unsuccess";
  			}
  		}


  		else
  			{
  				$data_AL = array(
  						'Stream' => $stream1,
  						'School' => $school1,
  						'Year' => $year1,
  						'Index_No' => $index1,
  						'AL_A' => $a_al1,
  						'AL_B' => $b_al1,
  						'AL_C' => $c_al1,
  						'AL_S' => $s_al1,
  						'AL_W' => $w_al1,
  						'Pass_Fail' => $pass1,
  						'Z_Score' => $z1,
  						'District_Rank' => $d_rank1,
  						'Island_Rank' => $i_rank1,
  						'Attempt' => 1,
  						'Student_ID' => $ST_ID,
              'user_id' => $user_id,
              
  					);
  				$this->Student_Model->save_futher_info_attempt1($data_OL,$data_scholar,$data_AL);
  				if($this->db->affected_rows()>0){
  					$this->session->unset_userdata('status');
  					$this->session->unset_userdata('id');
  					$this->session->set_flashdata('msg', 'Data is Added Successfully. Add require Infomation also');
					$this->session->set_flashdata('type', 'success'); 
					$this->session->set_flashdata('icon', 'ok');
					$this->session->set_flashdata('status', $status); 
					$this->session->set_flashdata('id', $ST_ID);
  					redirect('Student_Controller/after_AL_status');
  				
  				}

  			else{
  				echo "unsuccess 1st attempt";
  				$this->session->unset_userdata('status');
  				$this->session->unset_userdata('id');
  			}
  			}
  			
  		}

  		if($status==1){

  			$this->Student_Model->save_futher_info_OL($data_OL,$data_scholar);
  			if($this->db->affected_rows()>0){
  				$this->session->unset_userdata('status');
  		 		$this->session->unset_userdata('id');
  				$this->session->set_flashdata('msg', 'Data is Added Successfully. Add Another Infomation');
				$this->session->set_flashdata('type', 'success'); 
				$this->session->set_flashdata('icon', 'ok');

				redirect('Student_Controller/n_student');

  			}

  			else{
  				echo "error save OL";
  			}
  		}

      //save 1st attempt
      if($status==9){
        //AL first attempt

      $no_attempt = $this->input->post('no_attempt');
      $status = $this->input->post('status');
      $ST_ID = $this->input->post('id');
      $user_id = $this->session->userdata('user_id');

          $stream1 = $this->input->post('stream1');
          $school1 = $this->input->post('school1');
          $year1 = $this->input->post('year1');
          $index1 = $this->input->post('index1');
          $a_al1 = $this->input->post('a_al1');
          $b_al1 = $this->input->post('b_al1');
          $c_al1 = $this->input->post('c_al1');
          $s_al1 = $this->input->post('s_al1');
          $w_al1 = $this->input->post('w_al1');
          $pass1 = $this->input->post('pass1');
          $z1 = $this->input->post('z1');
          $d_rank1 = $this->input->post('d_rank1');
          $i_rank1 = $this->input->post('i_rank1'); 
          
        $data_AL = array(
              'Stream' => $stream1,
              'School' => $school1,
              'Year' => $year1,
              'Index_No' => $index1,
              'AL_A' => $a_al1,
              'AL_B' => $b_al1,
              'AL_C' => $c_al1,
              'AL_S' => $s_al1,
              'AL_W' => $w_al1,
              'Pass_Fail' => $pass1,
              'Z_Score' => $z1,
              'District_Rank' => $d_rank1,
              'Island_Rank' => $i_rank1,
              'Attempt' => 1,
              'Student_ID' => $ST_ID,
              'user_id' => $user_id,
              
            );
        $this->Student_Model->save_futher_info_attempt1($data_OL,$data_scholar,$data_AL);
        if($this->db->affected_rows()>0){
          $this->session->unset_userdata('status');
          $this->session->unset_userdata('id');
          $this->session->set_flashdata('msg', 'Data is Added Successfully. Add Another Infomation');
        $this->session->set_flashdata('type', 'success'); 
        $this->session->set_flashdata('icon', 'ok');

        redirect('Student_Controller/n_student');

        }

        else{
          echo "error save 2nd Attempt";
        }
      }

  		if($status==7){
  			echo "student ol". $status;
  		}

  		if($status==2){
  			echo "drop out". $status;
  		}

  		if($status==null){
  			echo "Status is null";
  		}


  		$this->session->unset_userdata('status');
  		$this->session->unset_userdata('id');
  	}

  	public function after_AL_status(){
  		$this->load->view('Progress/after_al_status');
  	}

  public function delete_page(){
    $policy_id = 15; 
    $user_id = $this->session->userdata('user_id');
    $this->Student_Model->check_authentication($user_id,$policy_id);
    $result = $this->db->get();

    if($result->num_rows()>0){
    if($user_id==1){
      $this->Student_Model->get_student_data();
    }
    else{
      $this->Student_Model->get_branch_student_data($user_id);
    }
    $query= $this->db->get();
    $row = $query->result();
    $data = array(
      'student' =>$row,
      'count' =>1,
      );
    
    $this->load->view('Progress/Delete_Student',$data);
    }
    else{
      $this->session->set_flashdata('msg', 'You dont have Authentication to access this content');
      $this->session->set_flashdata('type', 'danger');
      $this->session->set_flashdata('icon', 'remove');
      redirect('Dashboard_Controller/index');
    }
  }


	public function delete(){
		if(!($this->security->get_csrf_token_name())){
			redirect('Student_Controller/index');
		}

		else{
      $policy_id = 15; 
      $user_id = $this->session->userdata('user_id');
      $this->Student_Model->check_authentication($user_id,$policy_id);
      $result = $this->db->get();

    if($result->num_rows()>0){

			
			$id = $this->uri->segment(3);

			$this->Student_Model->delete_data($id);
			if($this->db->affected_rows()>0){
				$this->session->set_flashdata('msg', 'Data is Deleted Successfully');
				$this->session->set_flashdata('type', 'success');
				$this->session->set_flashdata('icon', 'ok');

				redirect('Student_Controller/delete_page');
			}

			else{
				$this->session->set_flashdata('msg', 'Data is Deleted Successfully');
				$this->session->set_flashdata('type', 'success');
				$this->session->set_flashdata('icon', 'ok');
				redirect('Student_Controller/delete_page');
			}
    }
    else{
      $this->session->set_flashdata('msg', 'You dont have Authentication to access this content');
      $this->session->set_flashdata('type', 'danger');
      $this->session->set_flashdata('icon', 'remove');
      redirect('Dashboard_Controller/index');
    }
		}
	}



}

	?>