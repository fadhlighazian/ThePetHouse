<?php
	defined('BASEPATH') OR exit('No direct script allowed');

	/**
	* 
	*/
	class EditUser extends CI_Controller
	{
		public function __construct(){
			parent::__construct();
			$this->load->model('edit_user_models');
			$this->load->model('login_model');
		}
		
		public function index()
		{
	
			if($this->session->userdata('username') != '')
			{
				$data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
				$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
				$data['header'] = $this->load->view('templates/headerUser.php', NULL, TRUE);
				$data['footer'] = $this->load->view('templates/footer.php', NULL, TRUE);
				$this->load->view('user/editUser.php', $data);
			}
			else
			{
				$data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
				$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
				$data['header'] = $this->load->view('templates/header.php', NULL, TRUE);
				$data['footer'] = $this->load->view('templates/footer.php', NULL, TRUE);
				$this->load->view('home/home.php', $data);
			}
		}
		public function editProfilePictureProcess()
		{
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
			$this->edit_user_models->updatePicture($file);
			
			//Destroy old session 
			$this->session->unset_userdata('email');
			$this->session->unset_userdata('fullname');
			$this->session->unset_userdata('phonne');  
			$this->session->unset_userdata('address');
			$this->session->unset_userdata('firstname'); 
			$this->session->unset_userdata('lastname'); 
			$this->session->unset_userdata('userimg'); 

			//new session
			$user = $this->login_model->get_user($this->session->userdata('username'));
					foreach ($user as $row) {
						$id = $row['id'];
						//$uname = $row['username'];
						$fName = $row['firstName'];
						$lName = $row['lastName'];
						$email = $row['email'];
						$phone = $row['phone'];
						$address = $row['address'];
						$userimg = $row['userimg'];						
					}
			
					$session_data = array(  
						//'username'   =>     $uname,
						'firstname'	 =>		$fName,
						'lastname'	 =>		$lName,
						'fullname'	 =>		$fName . $lName,
						'email'		 =>		$email,
						'phone'		 =>		$phone,
						'address'    =>		$address,
						'userimg'	 => 	$userimg

				   );  
				   $this->session->set_userdata($session_data);
				   redirect('EditUser/index');  

		}

		public function editProfileProcess()
		{
			$uname         = $this->input->post('username');
			$fname         = $this->input->post('fname');
			$lname         = $this->input->post('lname');
			$email         = $this->input->post('email');
			$phone         = $this->input->post('phone');
			$address       = $this->input->post('address');

			$this->edit_user_models->updateUserDetails($uname, $fname, $lname, $email, $phone, $address);

			//Destroy old session 
			$this->session->unset_userdata('email');
			$this->session->unset_userdata('fullname');
			$this->session->unset_userdata('phonne');  
			$this->session->unset_userdata('address');
			$this->session->unset_userdata('firstname'); 
			$this->session->unset_userdata('lastname'); 
			$this->session->unset_userdata('userimg'); 

			//new session
			$user = $this->login_model->get_user($this->session->userdata('username'));
			$this->session->unset_userdata('username');		
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
				   redirect('EditUser/index'); 
		}
		
	}
?>