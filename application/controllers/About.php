<?php
	defined('BASEPATH') OR exit('No direct script allowed');

	class About extends CI_Controller
	{
		public function index()
		{
			if($this->session->userdata('username') == "admin")
			{
				$data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
				$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
				$data['header'] = $this->load->view('templates/headerAdmin.php', NULL, TRUE);
				$data['footer'] = $this->load->view('templates/footer.php', NULL, TRUE);
				$this->load->view('about/about.php', $data);
			}
			else if($this->session->userdata('username') != '')
			{
				$data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
				$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
				$data['header'] = $this->load->view('templates/headerUser.php', NULL, TRUE);
				$data['footer'] = $this->load->view('templates/footer.php', NULL, TRUE);
				$this->load->view('about/about.php', $data);
			}
			else
			{
				$data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
				$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
				$data['header'] = $this->load->view('templates/header.php', NULL, TRUE);
				$data['footer'] = $this->load->view('templates/footer.php', NULL, TRUE);
				$this->load->view('about/about.php', $data);

			}
		}
	}

?>