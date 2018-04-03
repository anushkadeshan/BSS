<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
class GN_Controller extends CI_Controller
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
		$this->load->model('GN_Model');
		}

	public function index(){

		$this->GN_Model->show_data();
		$query = $this->db->get();
		$rows = $query->result();

		$query1 = $this->db->query('select * from dsd_ofiice');
		$rows1 = $query1->result();

		$data = array(
				'gn' => $rows,
				'dsd' =>$rows1,
			);

		$this->load->view('GN',$data);
		
	}


	public function save(){
		if(isset($_POST['submit'])){

			$gn = $this->input->post('gn');
			$dis = $this->input->post('ds');
			

			$data = array(
					'GN_Office' => $gn,
					'DSD_ID' => $dis,
					
				);

			$this->GN_Model->save_data($data);
			if($this->db->affected_rows()>0){
				$this->session->set_flashdata('msg', 'Data Added Successfully to the Database');
				$this->session->set_flashdata('type', 'success');
				$this->session->set_flashdata('icon', 'ok');
				redirect('GN_Controller/index');

			}
		}

		else{

			echo "Submit Not Ok";
		}
	} 

	public function delete(){
		if(!($this->security->get_csrf_token_name())){
			redirect('GN_Controller/index');
		}

		else{
			
			$id = $this->input->post('id');

			$this->GN_Model->delete_data($id);
			if($this->db->affected_rows()>0){
				$this->session->set_flashdata('msg', 'Data is Deleted Successfully');
				$this->session->set_flashdata('type', 'success');
				$this->session->set_flashdata('icon', 'ok');

				redirect('GN_Controller/index');
			}

			else{
				$this->session->set_flashdata('msg', 'Something Error in Deleting');
				$this->session->set_flashdata('type', 'danger');
				$this->session->set_flashdata('icon', 'remove');
				redirect('GN_Controller/index');
			}

		}
	}

	public function edit(){
		$id = $this->input->post('id');
		$query0 = $this->db->query('select * from dsd_ofiice');
		$result0 = $query0->result();
		$this->GN_Model->get_update_data($id);
		$query = $this->db->get();
		$result = $query->result();
		$data = array(
			'gn' =>$result,
			'dsd' =>$result0,
			);
		$this->load->view('update_gn',$data);

	}

	public function update(){
		$id = $this->input->post('id');
		$gn = $this->input->post('gn');
		$ds = $this->input->post('ds');
		

		$data = array(
				'GN_Office' => $gn,
				'DSD_ID' => $ds,
				
			);
		$this->GN_Model->update_data($id,$data);
		if($this->db->affected_rows()>0){
			$this->session->set_flashdata('msg', 'Data is Updated Successfully');
			$this->session->set_flashdata('type', 'success');
			$this->session->set_flashdata('icon', 'ok');

			redirect('GN_Controller/index');
		}

		else{
			$this->session->set_flashdata('msg', 'Something Error in Updating Please Try again');
			$this->session->set_flashdata('type', 'danger');
			$this->session->set_flashdata('icon', 'remove');
			redirect('GN_Controller/index');
		}

	}


}

	?>