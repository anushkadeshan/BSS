<?php 
	/**
	* 
	*/
	class User_controller extends CI_Controller
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
			if($this->session->userdata('user_id')!=1) {
        			$this->load->helper('url');
        			$this->session->set_flashdata('last_page', current_url());
        			$this->session->set_flashdata('flash_data','Sorry! You do not have permission to access this page');
                	$this->session->set_flashdata('type', 'danger');
        			redirect('Dashboard_controller/index');
			}
			$this->load->model('User_model');
		}

		public function index()
		{

			$query = $this->db->query('select * from branch');
			$rows = $query->result();

			$this->User_model->user_data();
			$query1 = $this->db->get();
			$rows1 = $query1->result();

			$data = array(
				'branch' => $rows,
				'users' => $rows1,
				);

			$this->load->view('Users/users',$data);
		}


		public function save(){
			

				$un = $this->input->post('un');
				$password = md5($this->input->post('pass2'));
				$email = $this->input->post('email');
				$branch = $this->input->post('branch');

				$data = array(
					'username' => $un,
					'pass' =>$password,
					'email' =>$email,
					'branch_id' => $branch,
					);
				$this->User_model->save_user($data);
				if($this->db->affected_rows()>0){
					$this->session->set_flashdata('msg',' User Created and Add Privilages by clicking edit button');
			 		$this->session->set_flashdata('type','success');
			 		$this->session->set_flashdata('icon','ok');
			 		redirect('User_controller/index');
				}

				else{
					$this->session->set_flashdata('msg',' User not created.Something Error!');
			 		$this->session->set_flashdata('type','success');
			 		$this->session->set_flashdata('icon','ok');
			 		redirect('User_controller/index');
				}
			
			
		}

		public function active(){
			 $id = $this->input->post('id');
			 $value = $this->input->post('value');

			 $data = array(
			 	'active' => $value,
			 	);

			 $this->User_model->active_data($id,$data);

			 if($this->db->affected_rows()>0){
			 	if($value==1){
			 		$this->session->set_flashdata('msg',' User Activated');
			 		$this->session->set_flashdata('type','success');
			 		$this->session->set_flashdata('icon','ok');
			 		redirect('User_controller/index');
			 	}

			 	if($value==0){
			 		$this->session->set_flashdata('msg',' User Deactivated');
			 		$this->session->set_flashdata('type','warning');
			 		$this->session->set_flashdata('icon','warning-sign');
			 		redirect('User_controller/index');
			 	}
			 	
			 }

			 else{
			 	$this->session->set_flashdata('msg',' Submit Not  Ok');
			 	$this->session->set_flashdata('type','danger');
			 	$this->session->set_flashdata('icon','remove');
			 }
		}
 
		public function delete(){
			$id = $this->input->post('id');

			$this->User_model->delete_user($id);
			$this->User_model->delete_user_policies($id);
			if($this->db->affected_rows()>0){
				$this->session->set_flashdata('msg',' User Deleted');
			 		$this->session->set_flashdata('type','success');
			 		$this->session->set_flashdata('icon','ok');
			 		redirect('User_controller/index');
			}

			else{
				$this->session->set_flashdata('msg',' User not Deleted. Something Error!');
			 		$this->session->set_flashdata('type','danger');
			 		$this->session->set_flashdata('icon','remove');
			 		redirect('User_controller/index');
			}
		}

		public function edit(){
			$id = $this->input->post('id');

			$this->User_model->edit_data($id);
			$query = $this->db->get();
			$rows = $query->result();

			$query1 = $this->db->query('select * from policies');
			$rows1 = $query1->result();
			$data = array(
				'edit_data' =>$rows,
				'policies' => $rows1,
				);

			$this->load->view('Users/edit_user',$data);
		}

		public function update(){
			$id = $this->input->post('id');

			$this->User_model->delete_before_update($id);
			
				$policies = $this->input->post('policies');
                
                for ($i=0; $i < count($policies) ; $i++) {
                
                 $data=array(
                    'user_id' => $id,
                    'policy_id'=>$policies[$i],
                    );
                $this->db->insert('user_policy', $data);
                
                }
              if($this->db->affected_rows()>0){
                $this->session->set_flashdata('msg',' Policies Updated Successfully');
			 	$this->session->set_flashdata('type','success');
			 	$this->session->set_flashdata('icon','ok');
			 	redirect('User_controller/index');
             		
                }

                else{
                	$this->session->set_flashdata('msg',' User Policies not updated. Something Error!');
			 		$this->session->set_flashdata('type','danger');
			 		$this->session->set_flashdata('icon','remove');
			 		redirect('User_controller/index');
                }
			
			
		}
	}
?>