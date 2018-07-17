<?php
	//session_start();
	defined('BASEPATH') OR exit('No direct script allowed');

	/**
	*  LOGIN 
	*/
	class LoginRegister extends CI_Controller
	{
		public function __construct(){
			parent::__construct();
			$this->load->model('register_model');
			$this->load->model('login_model');
		}
		
		public function loginPage()
		{
			if($this->session->userdata('username') == "admin")
			{
				$data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
				$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
				$data['header'] = $this->load->view('templates/headerAdmin.php', NULL, TRUE);
				$data['footer'] = $this->load->view('templates/footer.php', NULL, TRUE);
				$this->load->view('loginregister/login.php', $data);
			}
			else if($this->session->userdata('username') != '')
			{
				$data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
				$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
				$data['header'] = $this->load->view('templates/headerUser.php', NULL, TRUE);
				$data['footer'] = $this->load->view('templates/footer.php', NULL, TRUE);
				//$data['username'] = $this->session->userdata('username');
				$this->load->view('loginregister/login.php', $data);
			}
			else{
				$data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
				$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
				$data['header'] = $this->load->view('templates/header.php', NULL, TRUE);
				$data['footer'] = $this->load->view('templates/footer.php', NULL, TRUE);
				$this->load->view('loginregister/login.php', $data);
			}
		}

		public function loginProcess()
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('username', 'Username', 'required');  
			$this->form_validation->set_rules('password', 'Password', 'required');  
			if($this->form_validation->run())  
			{  
				 //true  
				 $username = $this->input->post('username');  
				 $passtext = $this->input->post('password');
				 $passSalt = $passtext . 123;
				 $password = md5($passSalt);
				 //model function  
				if($this->login_model->can_login($username, $password))  
                {  
					$user = $this->login_model->get_user($username);
					foreach ($user as $row) {
						$id = $row['id'];
						$uname = $row['username'];
						$fName = $row['firstName'];
						$lName = $row['lastName'];
						$email = $row['email'];
						$phone = $row['phone'];
						$address = $row['address'];
						$userimg = $row['userimg'];						
					}
			
					$session_data = array(  
						'id_user'    =>		$id,
						'username'   =>     $uname,
						'firstname'	 =>		$fName,
						'lastname'	 =>		$lName,
						'fullname'	 =>		$fName . $lName,
						'email'		 =>		$email,
						'phone'		 =>		$phone,
						'address'    =>		$address,
						'userimg'	 => 	$userimg

				   );  
				   $this->session->set_userdata($session_data);  
				   redirect('LoginRegister/enter');  
				  
			  }  
			  else  
			  {  
				   $this->session->set_flashdata('error', 'Invalid Username or Password');  
				   redirect('LoginRegister/loginPage');  
			  }  
				 
			   
		  }  
		  else  
		  {  
			   //false  
			   $this->loginPage();  
		  }  
	  }  

	  public function enter(){  
		  if($this->session->userdata('username') != '')  
		  {  
			  //var_dump($this->session->userdata('address'));
			  redirect('Home/index');  
		  }  
		  else  
		  {  
			  redirect('LoginRegister/loginPage');  
		  }  
	  }  

	  public function logout()  
	  {  
			  $this->session->unset_userdata('username');  
			  $this->session->unset_userdata('email');
			  $this->session->unset_userdata('fullname');
			  $this->session->unset_userdata('phonne');  
			  $this->session->unset_userdata('address');
			  $this->session->unset_userdata('firstname'); 
			  $this->session->unset_userdata('lastname'); 
			  $this->session->unset_userdata('userimg'); 
			  redirect('LoginRegister/loginPage');  
	  }  
   
		






		//DOWN HERE IS FOR REGISTER\\
		public function registerSuccess()
		{
				$data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
				$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
				$data['header'] = $this->load->view('templates/header.php', NULL, TRUE);
				$data['footer'] = $this->load->view('templates/footer.php', NULL, TRUE);
				$this->load->view('loginregister/registerSuccess.php', $data);
			
		}
        
        public function registerPage()
		{
			$data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
			$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
			$data['header'] = $this->load->view('templates/header.php', NULL, TRUE);
			$data['footer'] = $this->load->view('templates/footer.php', NULL, TRUE);
			$this->load->view('loginregister/register.php', $data);
		}

		public function registerProcess()
		{			
			$uname         = $this->input->post('username');
			$fname         = $this->input->post('fname');
			$lname         = $this->input->post('lname');
			$email         = $this->input->post('email');
			$password      = $this->input->post('password');
			$phone         = $this->input->post('phone');
			$address       = $this->input->post('address');
			
			/*
				HASHING PROCESS
			*/
			$salt = $password . 123;
			$hash = md5($salt);
			
			$up['upload_path']          = './assets/UserImage';
            $up['allowed_types']        = 'jpeg|jpg|png';
            $up['max_size']             = 100000000;
            $up['max_width']            = 10240;
            $up['max_height']           = 7608;

            $this->load->library('upload', $up);
            $this->upload->initialize($up);

        	if ( ! $this->upload->do_upload('userImg'))
            {
                $error = array('error' => $this->upload->display_errors());

                $this->load->view('upload/Upload_Form.php', $error);
                echo 'upload Failed';
            }
            else
            {
                $uploadData = array('upload_data' => $this->upload->data());

				foreach ($uploadData as $row):
					$file = $row['file_name'];
				endforeach;
				
			}
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
			$this->register_model->register_user($uname, $fname, $lname, $email, $hash, $phone, $file, $address);
			
			$this->email->initialize($config);
			$this->email->set_mailtype('html');
			$this->email->set_newline("\r\n");
			$this->email->from('suluh.damar@student.umn.ac.id', 'ThePetHouse Admin');
			$this->email->to($email);
			
			$this->email->subject('Welcome To ThePetHouse');

			

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
			$htmlContent .= '							<span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">ThePetHouse message System.</span>';
			$htmlContent .= '							<table class="main" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background: #ffffff; border-radius: 3px;">';

			$htmlContent .= '							<!-- START MAIN CONTENT AREA -->';
			$htmlContent .= '							<tr>';
			$htmlContent .= '								<td class="wrapper" style="font-family: sans-serif; font-size: 14px; vertical-align: top; box-sizing: border-box; padding: 20px;">';
			$htmlContent .= '								<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;">';
			$htmlContent .= '									<tr>';
			$htmlContent .= '									<td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">';
			$htmlContent .= '										<p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Hi </p>'; $htmlContent .= $fname . ' ,';
			$htmlContent .= '										<p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Welcome to ThePetHouse, now you can use our service by Login to Your Account</p>';
			$htmlContent .= '										<table border="0" cellpadding="0" cellspacing="0" class="btn btn-primary" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; box-sizing: border-box;">';
			$htmlContent .= '										<tbody>';
			$htmlContent .= '											<tr>';
			$htmlContent .= '											<td align="left" style="font-family: sans-serif; font-size: 14px; vertical-align: top; padding-bottom: 15px;">';
			$htmlContent .= '												<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: auto;">';
			$htmlContent .= '												<tbody>';
			$htmlContent .= '													<tr>';
			$htmlContent .= '													<td style="font-family: sans-serif; font-size: 14px; vertical-align: top; background-color: #3498db; border-radius: 5px; text-align: center;"> <a href="http://localhost/ThePet/index.php/LoginRegister/loginPage" target="_blank" style="display: inline-block; color: #ffffff; background-color: #3498db; border: solid 1px #3498db; border-radius: 5px; box-sizing: border-box; cursor: pointer; text-decoration: none; font-size: 14px; font-weight: bold; margin: 0; padding: 12px 25px; text-transform: capitalize; border-color: #3498db;">Login</a> </td>';
			$htmlContent .= '													</tr>';
			$htmlContent .= '												</tbody>';
			$htmlContent .= '												</table>';
			$htmlContent .= '											</td>';
			$htmlContent .= '											</tr>';
			$htmlContent .= '										</tbody>';
			$htmlContent .= '										</table>';
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
				redirect('/LoginRegister/registerSuccess');
			}else{
				echo $this->email->print_debugger();
				redirect('/LoginRegister/registerSuccess');
			}			
			
		}

		

	}
?>