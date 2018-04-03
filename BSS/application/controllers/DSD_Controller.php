<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
class DSD_Controller extends CI_Controller
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
		$this->load->model('DS_Model');
		}

	public function index(){
		$policy_id = 12; 
		$user_id = $this->session->userdata('user_id');
		$this->DS_Model->check_authentication($user_id,$policy_id);
		$result = $this->db->get();

		if($result->num_rows()>0){
		$query = $this->db->query('select * from dsd_ofiice');
		$rows = $query->result();

		$data = array(
				'dsd' => $rows,
			);

		$this->load->view('DSD',$data);
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
			$policy_id = 9; 
			$user_id = $this->session->userdata('user_id');
			$this->DS_Model->check_authentication($user_id,$policy_id);
			$result = $this->db->get();

		if($result->num_rows()>0){
			$ds = $this->input->post('ds');
			$dis = $this->input->post('dis');
			$pro = $this->input->post('pro');

			$data = array(
					'DSD_Name' => $ds,
					'District' => $dis,
					'Province' => $pro,
					'user_id' => $user_id,
				);

			$this->DS_Model->save_data($data);
			if($this->db->affected_rows()>0){
				$this->session->set_flashdata('msg', 'Data Added Successfully to the Database');
				$this->session->set_flashdata('type', 'success');
				$this->session->set_flashdata('icon', 'ok');
				redirect('DSD_Controller/index');

			}
		}
		else{
			$this->session->set_flashdata('msg', 'You dont have Authentication to access this content');
			$this->session->set_flashdata('type', 'danger');
			$this->session->set_flashdata('icon', 'remove');
			redirect('Dashboard_Controller/index');
		}
		}
		else{

			echo "Submit Not Ok";
		}
	} 

	public function delete(){
		if(!($this->security->get_csrf_token_name())){
			redirect('DSD_Controller/index');
		}

		else{
			$policy_id = 11; 
			$user_id = $this->session->userdata('user_id');
			$this->DS_Model->check_authentication($user_id,$policy_id);
			$result = $this->db->get();

			if($result->num_rows()>0){
			$id = $this->input->post('id');

			$this->DS_Model->delete_data($id);
			if($this->db->affected_rows()>0){
				$this->session->set_flashdata('msg', 'Data is Deleted Successfully');
				$this->session->set_flashdata('type', 'success');
				$this->session->set_flashdata('icon', 'ok');

				redirect('DSD_Controller/index');
			}

			else{
				$this->session->set_flashdata('msg', 'Something Error in Deleting');
				$this->session->set_flashdata('type', 'danger');
				$this->session->set_flashdata('icon', 'remove');
				redirect('DSD_Controller/index');
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

	public function edit(){
		$policy_id = 10; 
		$user_id = $this->session->userdata('user_id');
		$this->DS_Model->check_authentication($user_id,$policy_id);
		$result = $this->db->get();

		if($result->num_rows()>0){

		$id = $this->input->post('id');
		$this->DS_Model->get_update_data($id);
		$query = $this->db->get();
		$result = $query->result();
		$data = array(
			'dsd' =>$result,
			);
		$this->load->view('update_dsd',$data);
	}
	else{
			$this->session->set_flashdata('msg', 'You dont have Authentication to access this content');
			$this->session->set_flashdata('type', 'danger');
			$this->session->set_flashdata('icon', 'remove');
			redirect('Dashboard_Controller/index');
		}
	}

	public function update(){
		$policy_id = 10; 
		$user_id = $this->session->userdata('user_id');
		$this->DS_Model->check_authentication($user_id,$policy_id);
		$result = $this->db->get();

		if($result->num_rows()>0){

		$id = $this->input->post('id');
		$ds = $this->input->post('ds');
		$dis = $this->input->post('dis');
		$pro = $this->input->post('pro');

		$data = array(
				'DSD_Name' => $ds,
				'District' => $dis,
				'Province' => $pro,
			);
		$this->DS_Model->update_data($id,$data);
		if($this->db->affected_rows()>0){
			$this->session->set_flashdata('msg', 'Data is Updated Successfully');
			$this->session->set_flashdata('type', 'success');
			$this->session->set_flashdata('icon', 'ok');

			redirect('DSD_Controller/index');
		}

		else{
			$this->session->set_flashdata('msg', 'Something Error in Updating Please Try again');
			$this->session->set_flashdata('type', 'danger');
			$this->session->set_flashdata('icon', 'remove');
			redirect('DSD_Controller/index');
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

	?>