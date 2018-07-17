<?php
	defined('BASEPATH') OR exit('No direct script allowed');

	/**
	* 
	*/
	class History extends CI_Controller
	{
		public function __construct(){
			parent::__construct();
			$this->load->model('history_models');
		}
		
		public function index()
		{
			if($this->session->userdata('username') == "admin")
			{
				$data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
				$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
				$data['header'] = $this->load->view('templates/headerAdmin.php', NULL, TRUE);
				$data['footer'] = $this->load->view('templates/footer.php', NULL, TRUE);
				$data['historySalon'] = $this->history_models->get_historySalon();
				$data['historyHotel'] = $this->history_models->get_historyHotel();

				$this->load->view('history/historyAdmin.php', $data);
			}
			else if($this->session->userdata('username') != "")
			{
				$data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
				$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
				$data['header'] = $this->load->view('templates/headerUser.php', NULL, TRUE);
				$data['footer'] = $this->load->view('templates/footer.php', NULL, TRUE);
				$data['historySalonUser'] = $this->history_models->get_historySalonUser();
				$data['historyHotelUser'] = $this->history_models->get_historyHotelUser();

				$this->load->view('history/historyUser.php', $data);
			}
			else
			{
				$data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
				$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
				$data['header'] = $this->load->view('templates/header.php', NULL, TRUE);
				$data['footer'] = $this->load->view('templates/footer.php', NULL, TRUE);
				//$data['booking'] = $this->history_models->get_booking();

				$this->load->view('booking_salon/booking_orders_salon.php', $data);
			}
		}
	}
?>

