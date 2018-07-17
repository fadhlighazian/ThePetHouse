<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class history_models extends CI_Model {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	//public function index()
	//{
	//	$this->load->view('welcome_message');
	//}
	
	public function get_historySalon(){
		$str = "SELECT * FROM history_salon";
		$query = $this->db->query($str);
		return $query->result_array();
	}

	public function get_historyHotel(){
		$str = "SELECT * FROM history_hotel";
		$query = $this->db->query($str);
		return $query->result_array();
	}

	public function get_historySalonUser(){
		$this->db->where('name', $this->session->userdata('username')); 
        $query = $this->db->get('history_salon'); 
        
        return $query->result_array();
	}

	public function get_historyHotelUser(){
		$this->db->where('name', $this->session->userdata('username')); 
        $query = $this->db->get('history_hotel'); 
        
        return $query->result_array();
	}



}
