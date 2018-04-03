<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller
{
	

	public function index(){

		

		if(isset($this->session->userdata['username'])){
				$this->load->view('dashboard');
		}

		else{
		$this->load->view('login');
			}

		
	}

	public function check(){
		if(isset($_POST['submit'])){
			
				$username = $this->input->post('username');
				$password = md5($this->input->post('password'));

				$this->load->model('login_model');
				$query = $this->login_model->check_login($username,$password);

				if(!empty($query)) {
					
                $data = [
                    'username' => $query->username,
                    'user_id' => $query->id,
                    'branch_id' => $query->branch_id,
                    
                ];
 				
     			$this->db->select('active');
      			$this->db->where('username', $username);
      			$query=$this->db->get('login');

     			$row = $query->row_array();
      			$active = $row['active'];

      			if($active==0){
        		
        		$this->session->set_flashdata('flash_data','You are not active yet.Please contact admin');
        		$this->session->set_flashdata('type', 'danger');

        		redirect('Login_controller/index');
      			}
      			else{
      				$this->session->set_userdata($data);
                	redirect('Dashboard_Controller/index');
      			}
                
            } else {
                $this->session->set_flashdata('flash_data', 'Username or password is wrong!');
                $this->session->set_flashdata('type', 'danger');

                $this->load->view('login');
            }
			
			}
			else{

				
				echo "submit not ok";
			}

		}

		public function Logout(){


			  $this->session->userdata = array();
        	  $this->session->sess_destroy();
       		  $this->session->set_flashdata('flash_data', 'You have successfully logout!');
       		  $this->session->set_flashdata('type', 'success');
        	  $this->index();

		}

		public function Logout2(){


			  $this->session->userdata = array();
        	  $this->session->sess_destroy();
       		  $this->session->set_flashdata('flash_data', 'Your Session is Expired');
       		  $this->session->set_flashdata('type', 'danger');
        	  $this->index();

		}
	}


?>
