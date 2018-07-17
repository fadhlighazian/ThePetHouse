<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotel extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('booking_orders_model');
	}
	
	public function index()
	{
		if($this->session->userdata('username') == 'admin')
		{
			$data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
			$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
			$data['header'] = $this->load->view('templates/headerAdmin.php', NULL, TRUE);
			$data['footer'] = $this->load->view('templates/footer.php', NULL, TRUE);
			$this->load->view('hotel/booking_MainUser.php', $data);
		}
		else if($this->session->userdata('username') != '')
		{
			$data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
			$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
			$data['header'] = $this->load->view('templates/headerUser.php', NULL, TRUE);
			$data['footer'] = $this->load->view('templates/footer.php', NULL, TRUE);
			$this->load->view('hotel/booking_MainUser.php', $data);
		}
		else
		{
			$data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
			$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
			$data['header'] = $this->load->view('templates/header.php', NULL, TRUE);
			$data['footer'] = $this->load->view('templates/footer.php', NULL, TRUE);
			$this->load->view('hotel/booking_MainGuest.php', $data);
		}
	}

	public function booking_FormCtr(){
			if($this->session->userdata('username') == "admin")
			{
				$data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
				$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
				$data['header'] = $this->load->view('templates/headerAdmin.php', NULL, TRUE);
				$data['footer'] = $this->load->view('templates/footer.php', NULL, TRUE);
				$this->load->view('hotel/booking_Form.php', $data);
			}
			else if($this->session->userdata('username') != '')
			{
				$data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
				$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
				$data['header'] = $this->load->view('templates/headerUser.php', NULL, TRUE);
				$data['footer'] = $this->load->view('templates/footer.php', NULL, TRUE);
				$this->load->view('hotel/booking_Form.php', $data);
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
		$fulladdress   = $this->input->post('address');
		$email        = $this->input->post('email');
		$phone      = $this->input->post('phone');
		$checkin      = $this->input->post('checkin');
		$checkout      = $this->input->post('checkout');
		$notes      = $this->input->post('message');

		$this->booking_orders_model->add_booking($fullname, $furkidname, $fulladdress, $email, $phone, $checkin, $checkout, $notes, $userID);
		redirect('/Hotel/success');
	}

	public function success()
	{
		if($this->session->userdata('username') == 'admin')
		{
			$data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
			$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
			$data['header'] = $this->load->view('templates/headerAdmin.php', NULL, TRUE);
			$data['footer'] = $this->load->view('templates/footer.php', NULL, TRUE);
			$this->load->view('hotel/bookingHotelSuccess.php', $data);
		}
		else if($this->session->userdata('username') != '')
		{
			$data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
			$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
			$data['header'] = $this->load->view('templates/headerUser.php', NULL, TRUE);
			$data['footer'] = $this->load->view('templates/footer.php', NULL, TRUE);
			$this->load->view('hotel/bookingHotelSuccess.php', $data);
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
