<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salon extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('booking_orders_model_salon');
	}
	
	public function index()
	{
			if($this->session->userdata('username') == "admin")
			{
				$data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
				$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
				$data['header'] = $this->load->view('templates/headerAdmin.php', NULL, TRUE);
				$data['footer'] = $this->load->view('templates/footer.php', NULL, TRUE);
				$this->load->view('salon/salon_MainUser.php', $data);
			}
			else if($this->session->userdata('username') != '')
			{
				$data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
				$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
				$data['header'] = $this->load->view('templates/headerUser.php', NULL, TRUE);
				$data['footer'] = $this->load->view('templates/footer.php', NULL, TRUE);	
				$data['category'] = $this->booking_orders_model_salon->get_pet_category();

				$this->load->view('salon/salon_MainUser.php', $data);

			}
			else
			{
				$data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
				$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
				$data['header'] = $this->load->view('templates/header.php', NULL, TRUE);
				$data['footer'] = $this->load->view('templates/footer.php', NULL, TRUE);
				$this->load->view('salon/salon_MainGuest.php', $data);
			}
	}

	public function booking_FormCtr(){
			if($this->session->userdata('username') == "admin")
			{
				$data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
				$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
				$data['header'] = $this->load->view('templates/headerAdmin.php', NULL, TRUE);
				$data['footer'] = $this->load->view('templates/footer.php', NULL, TRUE);
				$data['category'] = $this->booking_orders_model_salon->get_pet_category();

				$this->load->view('salon/booking_Salon.php', $data);
			}
			else if($this->session->userdata('username') != '')
			{
				$data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
				$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
				$data['header'] = $this->load->view('templates/headerUser.php', NULL, TRUE);
				$data['footer'] = $this->load->view('templates/footer.php', NULL, TRUE);
				$data['category'] = $this->booking_orders_model_salon->get_pet_category();

				$this->load->view('salon/booking_Salon.php', $data);
			}
			else
			{
				redirect('LoginRegister/loginPage');
			}
			
	}
	public function booking_process(){
		$userID       = $this->input->post('userID');
		$fullname       = $this->input->post('name');
		$furkidname   = $this->input->post('furkidName');
		$typesalon    = $this->input->post('typesalon');
		$fulladdress   = $this->input->post('address');
		$email        = $this->input->post('email');
		$phone      = $this->input->post('phone');
		$checkin      = $this->input->post('checkin');
		$notes      = $this->input->post('message');

		if($this->input->post('pet') == 'Dog' || $this->input->post('pet') == 'dog'){
			$petCategory = 1;
		}
		else $petCategory = 2;

		$this->booking_orders_model_salon->add_booking($fullname, $furkidname, $typesalon, $fulladdress,  $email, $phone, $checkin, $notes, $userID , $petCategory);
		redirect('/Salon/success');
	}

	public function get_chained(){
		$id = $_POST['id'];
		$dropdown_chained = $this->booking_orders_model_salon->get_data_chained($id);
		foreach ($dropdown_chained->result() as $row) {
			echo "<option>".$row->type_salon ." " .$row->price_salon."</option>";
		}
	}

	public function success()
	{
			if($this->session->userdata('username') == "admin")
			{
				$data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
				$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
				$data['header'] = $this->load->view('templates/headerAdmin.php', NULL, TRUE);
				$data['footer'] = $this->load->view('templates/footer.php', NULL, TRUE);
				$this->load->view('salon/bookingSalonSuccess.php', $data);
			}
			else if($this->session->userdata('username') != '')
			{
				$data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
				$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
				$data['header'] = $this->load->view('templates/headerUser.php', NULL, TRUE);
				$data['footer'] = $this->load->view('templates/footer.php', NULL, TRUE);	
				

				$this->load->view('salon/bookingSalonSuccess.php', $data);

			}
			else
			{
				$data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
				$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
				$data['header'] = $this->load->view('templates/header.php', NULL, TRUE);
				$data['footer'] = $this->load->view('templates/footer.php', NULL, TRUE);
				redirect('/Home/index');
			}
	}
}
