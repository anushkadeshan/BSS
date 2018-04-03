<?php

/**
* 
*/
class welcome_controller extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('/front/welcome_model');
	}

	public function index()
	{
		$this->load->view('front/index');
	}

	public function room_show()
	{
		if(isset($_POST['submit'])){

			
			$Checking = $this->input->post('date1');
			$checkout = $this->input->post('date2');
			$adults = $this->input->post('adult');
			$childs = $this->input->post('child');
			
			
			
			
			$res = $this->welcome_model->search_capacity($adults,$childs);

			$query =  $this->db->get();
			$Available = $query->num_rows();
			
			if($Available<1){
				
				$this->session->set_flashdata('msg', 'Sorry : Rooms are not Available according to your query.');
				$this->session->set_flashdata('type','danger');
			 	$this->session->set_flashdata('icon','remove');
				redirect('front/welcome_controller/index');
			}
			
			foreach($query->result() as $q){
				$roomID = $q->RoomID;
				$qty = $q->Quantity;
				$rTpyeID = $q->RoomTypeID;
			}
				$this->welcome_model->search_booking($roomID,$Checking,$checkout);
					$query1 = $this->db->get();
					$rows = $query1->result();

					$numrows = $query1->num_rows();
					if($numrows<$qty){
						$results = $query->result();
						$data = array(
						'rooms' => $results,
						'cIN' =>$Checking,
						'cOUT'=>$checkout,
						'booked_qty' => $numrows,
						
		 				);

					$this->session->set_flashdata('msg', 'Congratz! Rooms are Available');
					$this->session->set_flashdata('type','success');
			 		$this->session->set_flashdata('icon','ok');
					$this->load->view('front/room_result', $data);
					}

					else{
						
					$this->session->set_flashdata('msg', 'Soory No Rooms between these days.Try another dates');	
					$this->session->set_flashdata('type','danger');
			 		$this->session->set_flashdata('icon','remove');
					redirect('front/welcome_controller/index');
					}

		}

		else{
			echo "Submit not Ok";
		}

	}


	public function show_individual(){
		$id= $this->input->post('id');
		


		$this->welcome_model->show_individual_data($id);
		$query = $this->db->get();
		$row = $query->result();

		foreach($row as $r){
			$rTpyeID = $r->RoomTypeID;
		}
		$this->welcome_model->get_facilities($rTpyeID);
		$query1 = $this->db->get();
		$row1 = $query1->result();
		$data = array(
			'details' =>$row,
			'facilities' =>$row1,
			'cIN' => $this->input->post('cIN'),
			'cOUT' =>$this->input->post('cOUT'),
			'qty' => $this->input->post('qty'),
			'booked_qty' => $this->input->post('booked'),
			);
		$this->load->view('front/room_self', $data);
	}

	public function customer_info(){
		$data = array(
			'id' =>$this->input->post('id'),
			'cIN' => $this->input->post('cIN'),
			'cOUT' =>$this->input->post('cOUT'),
			'image' =>$this->input->post('image'),
			'name' =>$this->input->post('name'),
			'qty' => $this->input->post('qty'),
			'booked_qty' => $this->input->post('booked'),
			);
		$this->load->view('front/customer_info', $data);
	}

	public function book(){
		if(isset($_POST['submit'])){

			$email = $this->input->post('email');

			$this->welcome_model->check_email($email);

			if($this->db->affected_rows()>0){
				$this->session->set_flashdata('msg', 'Sorry! this email is already registered to this system.please login using this email and book again');
				$this->session->set_flashdata('type','danger');
			 	$this->session->set_flashdata('icon','remove');
				redirect('front/welcome_controller/index');

			}

			else{
				$data = array(
				'FirstName' => $this->input->post('fName'),
				'MiddleName' => $this->input->post('mName'),
				'LastName'=> $this->input->post('lName'),
				'Address'=> $this->input->post('address'),
				'Email'=> $this->input->post('email'),
				'Telephone'=> $this->input->post('phone'),
				
				);

			$this->welcome_model->insert_customer($data);
			if($this->db->affected_rows()>0){

				$query = $this->db->query('select MAX(CustomerID) AS maxID from customer');

				foreach($query->result() as $q){
					$cutomerID = $q->maxID;
				}

				$qty = $this->input->post('qty');
				$booked_qty = $this->input->post('booked');
				$balance = $qty - $booked_qty;
				$data1 = array(
				'RoomID' => $this->input->post('id'),
				'ArrivalDate' => $this->input->post('cIN'),
				'DepartureDate' => $this->input->post('cOUT'),
				'balance_qty' => $balance,
				'CustomerID' => $cutomerID,
				);

				$this->welcome_model->insert_booking($data1);
				if($this->db->affected_rows()>0){

					$this->session->set_flashdata('msg', 'Congratz! Booking was successfull.we wil send you and confirmation email');
					$this->session->set_flashdata('type','success');
			 		$this->session->set_flashdata('icon','ok');
			 		redirect('front/welcome_controller/index');
			     }

			     else{
			     	$this->session->set_flashdata('msg', 'Booking not Ok');
					$this->session->set_flashdata('type','danger');
			 		$this->session->set_flashdata('icon','remove');
			 		redirect('front/welcome_controller/index');
			     }
			}

			else {
				$this->session->set_flashdata('msg', 'Insert not Ok');
				$this->session->set_flashdata('type','danger');
			 	$this->session->set_flashdata('icon','remove');
			 	redirect('front/welcome_controller/index');
			}

		}

		}

		else{
			echo "submit not ok";
		}
	}
}
 ?>