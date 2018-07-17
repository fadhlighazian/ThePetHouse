<?php
	defined('BASEPATH') OR exit('No direct script allowed');

	/**
	* 
	*/
	class BookingOrders extends CI_Controller
	{
		public function __construct(){
			parent::__construct();
			$this->load->model('booking_orders_model');
		}
		
		public function index()
		{
			if($this->session->userdata('username') == "admin")
			{
				//$data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
				$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
				$data['header'] = $this->load->view('templates/headerAdmin.php', NULL, TRUE);
				$data['footer'] = $this->load->view('templates/footer.php', NULL, TRUE);
				$data['booking'] = $this->booking_orders_model->get_booking();
				$data['confirmedBooking'] = $this->booking_orders_model->get_confirmed_booking();

				$this->load->view('booking_hotel/booking_orders.php', $data);
			}
			else
			{
				$data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
				$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
				$data['header'] = $this->load->view('templates/header.php', NULL, TRUE);
				$data['footer'] = $this->load->view('templates/footer.php', NULL, TRUE);
				$data['booking'] = $this->booking_orders_model->get_booking();

				$this->load->view('booking_hotel/booking_orders.php', $data);
			}
		}


		public function bookingAccept()
		{
			$data['idOrder'] = $this->input->post('idOrder'); 
			$data['Name'] = $this->input->post('Name');
			$data['email'] = $this->input->post('email'); 
			$data['address'] = $this->input->post('address'); 
			$data['furname'] = $this->input->post('furname'); 
			$data['phone'] = $this->input->post('phone'); 
			$data['checkin'] = $this->input->post('checkin'); 
			$data['checkout'] = $this->input->post('checkout'); 
			$data['userNotes'] = $this->input->post('userNotes');

			$data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
			$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
			$data['header'] = $this->load->view('templates/headerAdmin.php', NULL, TRUE);
			$data['footer'] = $this->load->view('templates/footer.php', NULL, TRUE);
			$this->load->view('booking_hotel/accept_Booking.php', $data);
		}

		public function bookingAcceptProcess()
		{
			
			$idOrder = $this->input->post('idOrder'); 
			$Name = $this->input->post('Name');
			$price = $this->input->post('price'); 
			$email = $this->input->post('email'); 
			$message = $this->input->post('message');
			$address = $this->input->post('address'); 
			$furname = $this->input->post('furname'); 
			$phone = $this->input->post('phone'); 
			$checkin = $this->input->post('checkin'); 
			$checkout = $this->input->post('checkout'); 
			$userNotes = $this->input->post('userNotes');
			$idOrderSS = $this->input->post('idOrder');

			
			$this->booking_orders_model->confirmedOrderInsert($idOrder,$Name, $furname, $address, $email, $phone, $checkin, $checkout,$price, $userNotes, $idOrderSS);
			$this->booking_orders_model->bookingMoved($idOrder);

			// load email library
			$this->load->library('email');

			/*
			*	CONFIG
			*/
			$config = array('protocol' => 'smtp',
							'smtp_host' => 'ssl://smtp.googlemail.com',
							'smtp_port' => 465,
							'smtp_user' => 'suluh.damar@student.umn.ac.id', // change it to yours
							'smtp_pass' => 'sayaloading', // change it to yours
							'mailtype' => 'html',
							'charset' => 'utf-8',
							'wordwrap' => TRUE
			);

			$this->email->initialize($config);
			$this->email->set_mailtype('html');
			$this->email->set_newline("\r\n");
			$this->email->from('suluh.damar@student.umn.ac.id', 'ThePetHouse Admin');
			$this->email->to($email);
			
			$this->email->subject('Booking Confirmation');

			

			/*
			*	EMAIL CONTENT
			*/
			$htmlContent = '';
			$htmlContent .= '';
			$htmlContent .= '		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
			$htmlContent .= '				<html xmlns="http://www.w3.org/1999/xhtml">';
			$htmlContent .= '				<head>';
			$htmlContent .= '					<meta name="viewport" content="width=device-width">';
			$htmlContent .= '					<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">';
			$htmlContent .= '					<title>Simple Transactional Email</title>';
			$htmlContent .= '					<style>';
			$htmlContent .= '					@media only screen and (max-width: 620px) {';
			$htmlContent .= '					table[class=body] h1 {';
			$htmlContent .= '						font-size: 28px !important;';
			$htmlContent .= '						margin-bottom: 10px !important;';
			$htmlContent .= '					}';
			$htmlContent .= '					table[class=body] p,';
			$htmlContent .= '							table[class=body] ul,';
			$htmlContent .= '							table[class=body] ol,';
			$htmlContent .= '							table[class=body] td,';
			$htmlContent .= '							table[class=body] span,';
			$htmlContent .= '							table[class=body] a {';
			$htmlContent .= '						font-size: 16px !important;';
			$htmlContent .= '					}';
			$htmlContent .= '					table[class=body] .wrapper,';
			$htmlContent .= '							table[class=body] .article {';
			$htmlContent .= '						padding: 10px !important;';
			$htmlContent .= '					}';
			$htmlContent .= '					table[class=body] .content {';
			$htmlContent .= '						padding: 0 !important;';
			$htmlContent .= '					}';
			$htmlContent .= '					table[class=body] .container {';
			$htmlContent .= '						padding: 0 !important;';
			$htmlContent .= '						width: 100% !important;';
			$htmlContent .= '					}';
			$htmlContent .= '					table[class=body] .main {';
			$htmlContent .= '						border-left-width: 0 !important;';
			$htmlContent .= '						border-radius: 0 !important;';
			$htmlContent .= '						border-right-width: 0 !important;';
			$htmlContent .= '					}';
			$htmlContent .= '					table[class=body] .btn table {';
			$htmlContent .= '						width: 100% !important;';
			$htmlContent .= '					}';
			$htmlContent .= '					table[class=body] .btn a {';
			$htmlContent .= '						width: 100% !important;';
			$htmlContent .= '					}';
			$htmlContent .= '					table[class=body] .img-responsive {';
			$htmlContent .= '						height: auto !important;';
			$htmlContent .= '						max-width: 100% !important;';
			$htmlContent .= '						width: auto !important;';
			$htmlContent .= '					}';
			$htmlContent .= '					}';
			$htmlContent .= '					@media all {';
			$htmlContent .= '					.ExternalClass {';
			$htmlContent .= '						width: 100%;';
			$htmlContent .= '					}';
			$htmlContent .= '					.ExternalClass,';
			$htmlContent .= '							.ExternalClass p,';
			$htmlContent .= '							.ExternalClass span,';
			$htmlContent .= '							.ExternalClass font,';
			$htmlContent .= '							.ExternalClass td,';
			$htmlContent .= '							.ExternalClass div {';
			$htmlContent .= '						line-height: 100%;';
			$htmlContent .= '					}';
			$htmlContent .= '					.apple-link a {';
			$htmlContent .= '						color: inherit !important;';
			$htmlContent .= '						font-family: inherit !important;';
			$htmlContent .= '						font-size: inherit !important;';
			$htmlContent .= '						font-weight: inherit !important;';
			$htmlContent .= '						line-height: inherit !important;';
			$htmlContent .= '						text-decoration: none !important';
			$htmlContent .= '					}';
			$htmlContent .= '					.btn-primary table td:hover {';
			$htmlContent .= '						background-color: #34495e !important;';
			$htmlContent .= '					}';
			$htmlContent .= '					.btn-primary a:hover {';
			$htmlContent .= '						background-color: #34495e !important;';
			$htmlContent .= '						border-color: #34495e !important;';
			$htmlContent .= '					}';
			$htmlContent .= '					}';
			$htmlContent .= '					</style>';
			$htmlContent .= '				</head>';
			$htmlContent .= '				<body class="" style="background-color: #f6f6f6; font-family: sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; line-height: 1.4; margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">';
			$htmlContent .= '					<table border="0" cellpadding="0" cellspacing="0" class="body" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background-color: #f6f6f6;">';
			$htmlContent .= '					<tr>';
			$htmlContent .= '						<td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">&nbsp;</td>';
			$htmlContent .= '						<td class="container" style="font-family: sans-serif; font-size: 14px; vertical-align: top; display: block; Margin: 0 auto; max-width: 580px; padding: 10px; width: 580px;">';
			$htmlContent .= '						<div class="content" style="box-sizing: border-box; display: block; Margin: 0 auto; max-width: 580px; padding: 10px;">';
			$htmlContent .= '';
			$htmlContent .= '							<!-- START CENTERED WHITE CONTAINER -->';
			$htmlContent .= '							<span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">Booking Confirmation</span>';
			$htmlContent .= '							<table class="main" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background: #ffffff; border-radius: 3px;">';

			$htmlContent .= '							<!-- START MAIN CONTENT AREA -->';
			$htmlContent .= '							<tr>';
			$htmlContent .= '								<td class="wrapper" style="font-family: sans-serif; font-size: 14px; vertical-align: top; box-sizing: border-box; padding: 20px;">';
			$htmlContent .= '								<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;">';
			$htmlContent .= '									<tr>';
			$htmlContent .= '									<td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">';
			$htmlContent .= '										<p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Dear Mr/Mrs.'; $htmlContent .= $Name . ' , </p>';
			$htmlContent .= '										<p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Your Hotel Booking Has Been Confirmed</p>';
			$htmlContent .= '										<table border="0" cellpadding="0" cellspacing="0" class="btn btn-primary" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; box-sizing: border-box;">';
			$htmlContent .= '										<tbody>';
			$htmlContent .= '											<tr>';
			$htmlContent .= '											<td align="left" style="font-family: sans-serif; font-size: 14px; vertical-align: top; padding-bottom: 15px;">';
			$htmlContent .= '												<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: auto;">';
			$htmlContent .= '												<tbody>';
			$htmlContent .= '													<tr>';
			$htmlContent .= '													</tr>';
			$htmlContent .= '												</tbody>';
			$htmlContent .= '												</table>';
			$htmlContent .= '											</td>';
			$htmlContent .= '											</tr>';
			$htmlContent .= '										</tbody>';
			$htmlContent .= '										</table>';
			$htmlContent .= '										<p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">This is your booking information</p>';
			$htmlContent .= '										<p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Booking ID 			  : ' . $idOrder . '</p>';
			$htmlContent .= '										<p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Price     			  : Rp.' . $price . '</p>';
			$htmlContent .= '										<p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Notes From Our Employee : '  . $message . '</p>';
			$htmlContent .= '										<p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">We Care And We Serve With Excelence!</p>';
			$htmlContent .= '										<p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">We Hope You Satisfied With Our Service</p>';
			$htmlContent .= '									</td>';
			$htmlContent .= '									</tr>';
			$htmlContent .= '								</table>';
			$htmlContent .= '								</td>';
			$htmlContent .= '							</tr>';
			$htmlContent .= '';
			$htmlContent .= '							<!-- END MAIN CONTENT AREA -->';
			$htmlContent .= '							</table>';
			$htmlContent .= '';
			$htmlContent .= '							<!-- START FOOTER -->';
			$htmlContent .= '							<div class="footer" style="clear: both; Margin-top: 10px; text-align: center; width: 100%;">';
			$htmlContent .= '							<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;">';
			$htmlContent .= '								<tr>';
			$htmlContent .= '								<td class="content-block" style="font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; font-size: 12px; color: #999999; text-align: center;">';
			$htmlContent .= '									<span class="apple-link" style="color: #999999; font-size: 12px; text-align: center;">ThePetHouse, 21 Revolution Street, Los Angeles, California</span>';
			$htmlContent .= '								</td>';
			$htmlContent .= '								</tr>';
			$htmlContent .= '								<tr>';
			$htmlContent .= '								<td class="content-block powered-by" style="font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; font-size: 12px; color: #999999; text-align: center;">';
			$htmlContent .= '									Powered by <a href="http://localhost/ThePet/index.php/Home/index" style="color: #999999; font-size: 12px; text-align: center; text-decoration: none;">ThePetHouse</a>.';
			$htmlContent .= '								</td>';
			$htmlContent .= '								</tr>';
			$htmlContent .= '							</table>';
			$htmlContent .= '							</div>';
			$htmlContent .= '							<!-- END FOOTER -->';
			$htmlContent .= '';
			$htmlContent .= '						<!-- END CENTERED WHITE CONTAINER -->';
			$htmlContent .= '						</div>';
			$htmlContent .= '						</td>';
			$htmlContent .= '						<td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">&nbsp;</td>';
			$htmlContent .= '					</tr>';
			$htmlContent .= '					</table>';
			$htmlContent .= '				</body>';
			$htmlContent .= '		</html>';
			/*
			*	END EMAIL CONTENT
			*/
			$this->email->message($htmlContent);		
			
			if ($this->email->send()){
				echo "E-mail has been sent";
				redirect('/BookingOrders/index');
			}else{
				//echo $this->email->print_debugger();
				redirect('/LoginRegister/registerSuccess');
			}


		}



















		
		//DOWN HERE DECLINE BOOKING\\

		public function bookingDecline()
		{
			$data['idOrder'] = $this->input->post('idOrder'); 
			$data['Name'] = $this->input->post('Name');
			$data['email'] = $this->input->post('email'); 
			$data['address'] = $this->input->post('address'); 
			$data['furname'] = $this->input->post('furname'); 
			$data['phone'] = $this->input->post('phone'); 
			$data['checkin'] = $this->input->post('checkin'); 
			$data['checkout'] = $this->input->post('checkout'); 
			$data['userNotes'] = $this->input->post('userNotes');

			$data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
			$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
			$data['header'] = $this->load->view('templates/headerAdmin.php', NULL, TRUE);
			$data['footer'] = $this->load->view('templates/footer.php', NULL, TRUE);
			$this->load->view('booking_hotel/decline_Booking.php', $data);
		}

		public function bookingDeclineProcess()
		{
			$idOrder = $this->input->post('idOrder'); 
			$Name = $this->input->post('Name'); 
			$email = $this->input->post('email'); 
			$address = $this->input->post('address'); 
			$furname = $this->input->post('furname'); 
			$phone = $this->input->post('phone'); 
			$checkin = $this->input->post('checkin'); 
			$checkout = $this->input->post('checkout'); 
			$userNotes = $this->input->post('userNotes');

			$message = $this->input->post('message');
			
			$this->booking_orders_model->declineOrder($idOrder);

			// load email library
			$this->load->library('email');

			/*
			*	CONFIG
			*/
			$config = array('protocol' => 'smtp',
							'smtp_host' => 'ssl://smtp.googlemail.com',
							'smtp_port' => 465,
							'smtp_user' => 'suluh.damar@student.umn.ac.id', // change it to yours
							'smtp_pass' => 'sayaloading', // change it to yours
							'mailtype' => 'html',
							'charset' => 'utf-8',
							'wordwrap' => TRUE
			);

			$this->email->initialize($config);
			$this->email->set_mailtype('html');
			$this->email->set_newline("\r\n");
			$this->email->from('suluh.damar@student.umn.ac.id', 'ThePetHouse Admin');
			$this->email->to($email);
			
			$this->email->subject('Booking Information');

			

			/*
			*	EMAIL CONTENT
			*/
			$htmlContent = '';
			$htmlContent .= '';
			$htmlContent .= '		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
			$htmlContent .= '				<html xmlns="http://www.w3.org/1999/xhtml">';
			$htmlContent .= '				<head>';
			$htmlContent .= '					<meta name="viewport" content="width=device-width">';
			$htmlContent .= '					<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">';
			$htmlContent .= '					<title>Simple Transactional Email</title>';
			$htmlContent .= '					<style>';
			$htmlContent .= '					@media only screen and (max-width: 620px) {';
			$htmlContent .= '					table[class=body] h1 {';
			$htmlContent .= '						font-size: 28px !important;';
			$htmlContent .= '						margin-bottom: 10px !important;';
			$htmlContent .= '					}';
			$htmlContent .= '					table[class=body] p,';
			$htmlContent .= '							table[class=body] ul,';
			$htmlContent .= '							table[class=body] ol,';
			$htmlContent .= '							table[class=body] td,';
			$htmlContent .= '							table[class=body] span,';
			$htmlContent .= '							table[class=body] a {';
			$htmlContent .= '						font-size: 16px !important;';
			$htmlContent .= '					}';
			$htmlContent .= '					table[class=body] .wrapper,';
			$htmlContent .= '							table[class=body] .article {';
			$htmlContent .= '						padding: 10px !important;';
			$htmlContent .= '					}';
			$htmlContent .= '					table[class=body] .content {';
			$htmlContent .= '						padding: 0 !important;';
			$htmlContent .= '					}';
			$htmlContent .= '					table[class=body] .container {';
			$htmlContent .= '						padding: 0 !important;';
			$htmlContent .= '						width: 100% !important;';
			$htmlContent .= '					}';
			$htmlContent .= '					table[class=body] .main {';
			$htmlContent .= '						border-left-width: 0 !important;';
			$htmlContent .= '						border-radius: 0 !important;';
			$htmlContent .= '						border-right-width: 0 !important;';
			$htmlContent .= '					}';
			$htmlContent .= '					table[class=body] .btn table {';
			$htmlContent .= '						width: 100% !important;';
			$htmlContent .= '					}';
			$htmlContent .= '					table[class=body] .btn a {';
			$htmlContent .= '						width: 100% !important;';
			$htmlContent .= '					}';
			$htmlContent .= '					table[class=body] .img-responsive {';
			$htmlContent .= '						height: auto !important;';
			$htmlContent .= '						max-width: 100% !important;';
			$htmlContent .= '						width: auto !important;';
			$htmlContent .= '					}';
			$htmlContent .= '					}';
			$htmlContent .= '					@media all {';
			$htmlContent .= '					.ExternalClass {';
			$htmlContent .= '						width: 100%;';
			$htmlContent .= '					}';
			$htmlContent .= '					.ExternalClass,';
			$htmlContent .= '							.ExternalClass p,';
			$htmlContent .= '							.ExternalClass span,';
			$htmlContent .= '							.ExternalClass font,';
			$htmlContent .= '							.ExternalClass td,';
			$htmlContent .= '							.ExternalClass div {';
			$htmlContent .= '						line-height: 100%;';
			$htmlContent .= '					}';
			$htmlContent .= '					.apple-link a {';
			$htmlContent .= '						color: inherit !important;';
			$htmlContent .= '						font-family: inherit !important;';
			$htmlContent .= '						font-size: inherit !important;';
			$htmlContent .= '						font-weight: inherit !important;';
			$htmlContent .= '						line-height: inherit !important;';
			$htmlContent .= '						text-decoration: none !important';
			$htmlContent .= '					}';
			$htmlContent .= '					.btn-primary table td:hover {';
			$htmlContent .= '						background-color: #34495e !important;';
			$htmlContent .= '					}';
			$htmlContent .= '					.btn-primary a:hover {';
			$htmlContent .= '						background-color: #34495e !important;';
			$htmlContent .= '						border-color: #34495e !important;';
			$htmlContent .= '					}';
			$htmlContent .= '					}';
			$htmlContent .= '					</style>';
			$htmlContent .= '				</head>';
			$htmlContent .= '				<body class="" style="background-color: #f6f6f6; font-family: sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; line-height: 1.4; margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">';
			$htmlContent .= '					<table border="0" cellpadding="0" cellspacing="0" class="body" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background-color: #f6f6f6;">';
			$htmlContent .= '					<tr>';
			$htmlContent .= '						<td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">&nbsp;</td>';
			$htmlContent .= '						<td class="container" style="font-family: sans-serif; font-size: 14px; vertical-align: top; display: block; Margin: 0 auto; max-width: 580px; padding: 10px; width: 580px;">';
			$htmlContent .= '						<div class="content" style="box-sizing: border-box; display: block; Margin: 0 auto; max-width: 580px; padding: 10px;">';
			$htmlContent .= '';
			$htmlContent .= '							<!-- START CENTERED WHITE CONTAINER -->';
			$htmlContent .= '							<span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">Booking Declined</span>';
			$htmlContent .= '							<table class="main" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background: #ffffff; border-radius: 3px;">';

			$htmlContent .= '							<!-- START MAIN CONTENT AREA -->';
			$htmlContent .= '							<tr>';
			$htmlContent .= '								<td class="wrapper" style="font-family: sans-serif; font-size: 14px; vertical-align: top; box-sizing: border-box; padding: 20px;">';
			$htmlContent .= '								<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;">';
			$htmlContent .= '									<tr>';
			$htmlContent .= '									<td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">';
			$htmlContent .= '										<p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Dear Mr/Mrs.'; $htmlContent .= $Name . ' , </p>';
			$htmlContent .= '										<p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Your Hotel Booking Has Been Declined</p>';
			$htmlContent .= '										<table border="0" cellpadding="0" cellspacing="0" class="btn btn-primary" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; box-sizing: border-box;">';
			$htmlContent .= '										<tbody>';
			$htmlContent .= '											<tr>';
			$htmlContent .= '											<td align="left" style="font-family: sans-serif; font-size: 14px; vertical-align: top; padding-bottom: 15px;">';
			$htmlContent .= '												<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: auto;">';
			$htmlContent .= '												<tbody>';
			$htmlContent .= '													<tr>';
			$htmlContent .= '													</tr>';
			$htmlContent .= '												</tbody>';
			$htmlContent .= '												</table>';
			$htmlContent .= '											</td>';
			$htmlContent .= '											</tr>';
			$htmlContent .= '										</tbody>';
			$htmlContent .= '										</table>';
			$htmlContent .= '										<p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">This is your booking information</p>';
			$htmlContent .= '										<p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Booking ID 			                : ' . $idOrder . '</p>';
			$htmlContent .= '										<p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Reasons Why we declined your booking  : '  . $message . '</p>';
			$htmlContent .= '										<p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">We Care And We Serve With Excelence!</p>';
			$htmlContent .= '										<p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">We Hope You Satisfied With Our Service</p>';
			$htmlContent .= '									</td>';
			$htmlContent .= '									</tr>';
			$htmlContent .= '								</table>';
			$htmlContent .= '								</td>';
			$htmlContent .= '							</tr>';
			$htmlContent .= '';
			$htmlContent .= '							<!-- END MAIN CONTENT AREA -->';
			$htmlContent .= '							</table>';
			$htmlContent .= '';
			$htmlContent .= '							<!-- START FOOTER -->';
			$htmlContent .= '							<div class="footer" style="clear: both; Margin-top: 10px; text-align: center; width: 100%;">';
			$htmlContent .= '							<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;">';
			$htmlContent .= '								<tr>';
			$htmlContent .= '								<td class="content-block" style="font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; font-size: 12px; color: #999999; text-align: center;">';
			$htmlContent .= '									<span class="apple-link" style="color: #999999; font-size: 12px; text-align: center;">ThePetHouse, 21 Revolution Street, Los Angeles, California</span>';
			$htmlContent .= '								</td>';
			$htmlContent .= '								</tr>';
			$htmlContent .= '								<tr>';
			$htmlContent .= '								<td class="content-block powered-by" style="font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; font-size: 12px; color: #999999; text-align: center;">';
			$htmlContent .= '									Powered by <a href="http://localhost/ThePet/index.php/Home/index" style="color: #999999; font-size: 12px; text-align: center; text-decoration: none;">ThePetHouse</a>.';
			$htmlContent .= '								</td>';
			$htmlContent .= '								</tr>';
			$htmlContent .= '							</table>';
			$htmlContent .= '							</div>';
			$htmlContent .= '							<!-- END FOOTER -->';
			$htmlContent .= '';
			$htmlContent .= '						<!-- END CENTERED WHITE CONTAINER -->';
			$htmlContent .= '						</div>';
			$htmlContent .= '						</td>';
			$htmlContent .= '						<td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">&nbsp;</td>';
			$htmlContent .= '					</tr>';
			$htmlContent .= '					</table>';
			$htmlContent .= '				</body>';
			$htmlContent .= '		</html>';
			/*
			*	END EMAIL CONTENT
			*/
			$this->email->message($htmlContent);		
			
			if ($this->email->send()){
				echo "E-mail has been sent";
				redirect('/BookingOrders/index');
			}else{
				echo $this->email->print_debugger();
			}
		}


		public function ordersHotelComplete(){
			
			$idOrder = $this->input->post('idOrder'); 
			$Name = $this->input->post('Name');
			$price = $this->input->post('price'); 
			$email = $this->input->post('email'); 
			$message = $this->input->post('message');
			$address = $this->input->post('address'); 
			$furname = $this->input->post('furname'); 
			$phone = $this->input->post('phone'); 
			$checkin = $this->input->post('checkin'); 
			$checkout = $this->input->post('checkout'); 
			$userNotes = $this->input->post('userNotes');
			$idUser = $this->session->userdata('id_user');
			
			$this->booking_orders_model->insertHistory($idOrder,$Name, $furname, $address, $email, $phone, $checkin, $checkout,$price, $userNotes, $idUser);
			$this->booking_orders_model->bookingCompleted($idOrder);
			
			// load email library
			$this->load->library('email');

			/*
			*	CONFIG
			*/
			$config = array('protocol' => 'smtp',
							'smtp_host' => 'ssl://smtp.googlemail.com',
							'smtp_port' => 465,
							'smtp_user' => 'suluh.damar@student.umn.ac.id', // change it to yours
							'smtp_pass' => 'sayaloading', // change it to yours
							'mailtype' => 'html',
							'charset' => 'utf-8',
							'wordwrap' => TRUE
			);

			$this->email->initialize($config);
			$this->email->set_mailtype('html');
			$this->email->set_newline("\r\n");
			$this->email->from('suluh.damar@student.umn.ac.id', 'ThePetHouse Admin');
			$this->email->to($email);
			
			$this->email->subject('Booking Completed');

			

			/*
			*	EMAIL CONTENT
			*/
			$htmlContent = '';
			$htmlContent .= '';
			$htmlContent .= '		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
			$htmlContent .= '				<html xmlns="http://www.w3.org/1999/xhtml">';
			$htmlContent .= '				<head>';
			$htmlContent .= '					<meta name="viewport" content="width=device-width">';
			$htmlContent .= '					<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">';
			$htmlContent .= '					<title>Simple Transactional Email</title>';
			$htmlContent .= '					<style>';
			$htmlContent .= '					@media only screen and (max-width: 620px) {';
			$htmlContent .= '					table[class=body] h1 {';
			$htmlContent .= '						font-size: 28px !important;';
			$htmlContent .= '						margin-bottom: 10px !important;';
			$htmlContent .= '					}';
			$htmlContent .= '					table[class=body] p,';
			$htmlContent .= '							table[class=body] ul,';
			$htmlContent .= '							table[class=body] ol,';
			$htmlContent .= '							table[class=body] td,';
			$htmlContent .= '							table[class=body] span,';
			$htmlContent .= '							table[class=body] a {';
			$htmlContent .= '						font-size: 16px !important;';
			$htmlContent .= '					}';
			$htmlContent .= '					table[class=body] .wrapper,';
			$htmlContent .= '							table[class=body] .article {';
			$htmlContent .= '						padding: 10px !important;';
			$htmlContent .= '					}';
			$htmlContent .= '					table[class=body] .content {';
			$htmlContent .= '						padding: 0 !important;';
			$htmlContent .= '					}';
			$htmlContent .= '					table[class=body] .container {';
			$htmlContent .= '						padding: 0 !important;';
			$htmlContent .= '						width: 100% !important;';
			$htmlContent .= '					}';
			$htmlContent .= '					table[class=body] .main {';
			$htmlContent .= '						border-left-width: 0 !important;';
			$htmlContent .= '						border-radius: 0 !important;';
			$htmlContent .= '						border-right-width: 0 !important;';
			$htmlContent .= '					}';
			$htmlContent .= '					table[class=body] .btn table {';
			$htmlContent .= '						width: 100% !important;';
			$htmlContent .= '					}';
			$htmlContent .= '					table[class=body] .btn a {';
			$htmlContent .= '						width: 100% !important;';
			$htmlContent .= '					}';
			$htmlContent .= '					table[class=body] .img-responsive {';
			$htmlContent .= '						height: auto !important;';
			$htmlContent .= '						max-width: 100% !important;';
			$htmlContent .= '						width: auto !important;';
			$htmlContent .= '					}';
			$htmlContent .= '					}';
			$htmlContent .= '					@media all {';
			$htmlContent .= '					.ExternalClass {';
			$htmlContent .= '						width: 100%;';
			$htmlContent .= '					}';
			$htmlContent .= '					.ExternalClass,';
			$htmlContent .= '							.ExternalClass p,';
			$htmlContent .= '							.ExternalClass span,';
			$htmlContent .= '							.ExternalClass font,';
			$htmlContent .= '							.ExternalClass td,';
			$htmlContent .= '							.ExternalClass div {';
			$htmlContent .= '						line-height: 100%;';
			$htmlContent .= '					}';
			$htmlContent .= '					.apple-link a {';
			$htmlContent .= '						color: inherit !important;';
			$htmlContent .= '						font-family: inherit !important;';
			$htmlContent .= '						font-size: inherit !important;';
			$htmlContent .= '						font-weight: inherit !important;';
			$htmlContent .= '						line-height: inherit !important;';
			$htmlContent .= '						text-decoration: none !important';
			$htmlContent .= '					}';
			$htmlContent .= '					.btn-primary table td:hover {';
			$htmlContent .= '						background-color: #34495e !important;';
			$htmlContent .= '					}';
			$htmlContent .= '					.btn-primary a:hover {';
			$htmlContent .= '						background-color: #34495e !important;';
			$htmlContent .= '						border-color: #34495e !important;';
			$htmlContent .= '					}';
			$htmlContent .= '					}';
			$htmlContent .= '					</style>';
			$htmlContent .= '				</head>';
			$htmlContent .= '				<body class="" style="background-color: #f6f6f6; font-family: sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; line-height: 1.4; margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">';
			$htmlContent .= '					<table border="0" cellpadding="0" cellspacing="0" class="body" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background-color: #f6f6f6;">';
			$htmlContent .= '					<tr>';
			$htmlContent .= '						<td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">&nbsp;</td>';
			$htmlContent .= '						<td class="container" style="font-family: sans-serif; font-size: 14px; vertical-align: top; display: block; Margin: 0 auto; max-width: 580px; padding: 10px; width: 580px;">';
			$htmlContent .= '						<div class="content" style="box-sizing: border-box; display: block; Margin: 0 auto; max-width: 580px; padding: 10px;">';
			$htmlContent .= '';
			$htmlContent .= '							<!-- START CENTERED WHITE CONTAINER -->';
			$htmlContent .= '							<span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">Booking Information</span>';
			$htmlContent .= '							<table class="main" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background: #ffffff; border-radius: 3px;">';

			$htmlContent .= '							<!-- START MAIN CONTENT AREA -->';
			$htmlContent .= '							<tr>';
			$htmlContent .= '								<td class="wrapper" style="font-family: sans-serif; font-size: 14px; vertical-align: top; box-sizing: border-box; padding: 20px;">';
			$htmlContent .= '								<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;">';
			$htmlContent .= '									<tr>';
			$htmlContent .= '									<td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">';
			$htmlContent .= '										<p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Dear Mr/Mrs.'; $htmlContent .= $Name . ' , </p>';
			$htmlContent .= '										<p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Your Hotel Booking Has Been Completed</p>';
			$htmlContent .= '										<table border="0" cellpadding="0" cellspacing="0" class="btn btn-primary" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; box-sizing: border-box;">';
			$htmlContent .= '										<tbody>';
			$htmlContent .= '											<tr>';
			$htmlContent .= '											<td align="left" style="font-family: sans-serif; font-size: 14px; vertical-align: top; padding-bottom: 15px;">';
			$htmlContent .= '												<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: auto;">';
			$htmlContent .= '												<tbody>';
			$htmlContent .= '													<tr>';
			$htmlContent .= '													</tr>';
			$htmlContent .= '												</tbody>';
			$htmlContent .= '												</table>';
			$htmlContent .= '											</td>';
			$htmlContent .= '											</tr>';
			$htmlContent .= '										</tbody>';
			$htmlContent .= '										</table>';
			$htmlContent .= '										<p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">This is your booking information</p>';
			$htmlContent .= '										<p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Booking ID 			  : ' . $idOrder . '</p>';
			$htmlContent .= '										<p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Price     			  : Rp.' . $price . '</p>';
			$htmlContent .= '										<p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Notes From Our Employee : '  . $message . '</p>';
			$htmlContent .= '										<p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Thank You For Using Our Services !</p>';
			$htmlContent .= '										<p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">We Care And We Serve With Excelence!</p>';
			$htmlContent .= '										<p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">We Hope You Satisfied With Our Service</p>';
			$htmlContent .= '									</td>';
			$htmlContent .= '									</tr>';
			$htmlContent .= '								</table>';
			$htmlContent .= '								</td>';
			$htmlContent .= '							</tr>';
			$htmlContent .= '';
			$htmlContent .= '							<!-- END MAIN CONTENT AREA -->';
			$htmlContent .= '							</table>';
			$htmlContent .= '';
			$htmlContent .= '							<!-- START FOOTER -->';
			$htmlContent .= '							<div class="footer" style="clear: both; Margin-top: 10px; text-align: center; width: 100%;">';
			$htmlContent .= '							<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;">';
			$htmlContent .= '								<tr>';
			$htmlContent .= '								<td class="content-block" style="font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; font-size: 12px; color: #999999; text-align: center;">';
			$htmlContent .= '									<span class="apple-link" style="color: #999999; font-size: 12px; text-align: center;">ThePetHouse, 21 Revolution Street, Los Angeles, California</span>';
			$htmlContent .= '								</td>';
			$htmlContent .= '								</tr>';
			$htmlContent .= '								<tr>';
			$htmlContent .= '								<td class="content-block powered-by" style="font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; font-size: 12px; color: #999999; text-align: center;">';
			$htmlContent .= '									Powered by <a href="http://localhost/ThePet/index.php/Home/index" style="color: #999999; font-size: 12px; text-align: center; text-decoration: none;">ThePetHouse</a>.';
			$htmlContent .= '								</td>';
			$htmlContent .= '								</tr>';
			$htmlContent .= '							</table>';
			$htmlContent .= '							</div>';
			$htmlContent .= '							<!-- END FOOTER -->';
			$htmlContent .= '';
			$htmlContent .= '						<!-- END CENTERED WHITE CONTAINER -->';
			$htmlContent .= '						</div>';
			$htmlContent .= '						</td>';
			$htmlContent .= '						<td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">&nbsp;</td>';
			$htmlContent .= '					</tr>';
			$htmlContent .= '					</table>';
			$htmlContent .= '				</body>';
			$htmlContent .= '		</html>';
			/*
			*	END EMAIL CONTENT
			*/
			$this->email->message($htmlContent);		
			
			if ($this->email->send()){
				echo "E-mail has been sent";
				redirect('/BookingOrders/index');
			}else{
				//echo $this->email->print_debugger();
				redirect('/LoginRegister/registerSuccess');
			}
		}



	}
?>

