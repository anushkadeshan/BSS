<?php 
	/**
	* 
	*/
	class Dashboard_Controller extends CI_Controller
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

			$this->load->model('Dashboard_model');
		}

		public function index()
		{
			$user_id = $this->session->userdata('user_id');
			
			//for admin
			if($user_id==1){
				$total_students = $this->db->count_all('student'); 

				$query1 = $this->db->where('Direct_BMI',1)->get('student');
				$bmi = $query1->num_rows();

				$query2 = $this->db->where('Gender','Male')->get('student');
				$male = $query2->num_rows();

				$query3 = $this->db->where('samurdi',1)->get('student');
				$samurdi = $query3->num_rows();

				$query4 = $this->db->where('LowIncome',1)->get('student');
				$low = $query4->num_rows();

				$this->Dashboard_model->count_status();
				$query5 = $this->db->get();
				$row = $query5->result();

				$query6 = $this->db->where('Sector_ID','Plantation')->get('student');
				$sector = $query6->num_rows();

				$this->Dashboard_model->activity_log();
				$query7 = $this->db->get();
				$activity = $query7->result();

				$this->Dashboard_model->count_branch();
				$query8 = $this->db->get();
				$branch_count = $query8->result();

				$query9 = $this->db->where('al_year',0)->get('student');
				$al_year = $query9->num_rows();

				$query10 = $this->db->where('p_status',0)->get('scholar_details');
				$p_status = $query10->num_rows();



			}

			//for each branches
			else{

				$branch_id = $this->session->userdata('branch_id');
				$user_id = $this->session->userdata('user_id');

				$query = $this->db->where('Branch_ID', $branch_id)->get('student');
				$total_students = $query->num_rows();

				$query1 = $this->db->where('Branch_ID', $branch_id)->where('Direct_BMI',1)->get('student');
				$bmi = $query1->num_rows();

				$query2 = $this->db->where('Branch_ID', $branch_id)->where('Gender','Male')->get('student');
				$male = $query2->num_rows();

				$query3 = $this->db->where('Branch_ID', $branch_id)->where('samurdi',1)->get('student');
				$samurdi = $query3->num_rows();

				$query4 = $this->db->where('Branch_ID', $branch_id)->where('LowIncome',1)->get('student');
				$low = $query4->num_rows();

				$this->Dashboard_model->count_status_branch($branch_id);
				$query5 = $this->db->get();
				$row = $query5->result();

				$query6 = $this->db->where('Branch_ID', $branch_id)->where('Sector_ID','Plantation')->get('student');
				$sector = $query6->num_rows();

				$this->Dashboard_model->activity_log_branch($user_id);
				$query7 = $this->db->get();
				$activity = $query7->result();

				$query9 = $this->db->where('Branch_ID', $branch_id)->where('al_year',0)->get('student');
				$al_year = $query9->num_rows();

				$query10 = $this->db->where('user_id', $user_id)->where('p_status',0)->get('scholar_details');
				$p_status = $query10->num_rows();

				$branch_count = null;
	

			}

			$data = array(
				'total_students' => $total_students,
				'total_bmi' => $bmi,
				'total_male' =>$male,
				'total_samurdi' => $samurdi,
				'total_low_income' => $low,
				'count_status' => $row,
				'total_sector' => $sector,
				'activity' => $activity,
				'branch_count' => $branch_count,
				'al_year' => $al_year,
				'p_status' => $p_status,
				);

			$this->load->view('dashboard',$data);

			$this->session->set_flashdata('msg', "You need to update students First Attempt A/L Year of " .$al_year. " files (Student Form).");
			$this->session->set_flashdata('msg1', "You need to update students Payment Status of " .$p_status. " files (Scholarships Form).");
			$this->session->set_flashdata('type', 'danger');
      		$this->session->set_flashdata('icon', 'remove');
      		$this->session->set_flashdata('color', '#a50000');
		}

		public function backup(){
			// Load the DB utility class
			$this->load->dbutil();

			// Backup your entire database and assign it to a variable
			$backup = $this->dbutil->backup();

			// Load the file helper and write the file to your server
			$time = date('Y-m-d H:i:s');
			$backup_name = $time.'.gz';
			$this->load->helper('file');
			write_file('/backup/'.$backup_name, $backup);

			// Load the download helper and send the file to your desktop
			$this->load->helper('download');
			force_download($backup_name, $backup);
		}

		public function birthday(){
			
		}

	}
?>
