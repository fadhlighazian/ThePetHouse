<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class booking_orders_model extends CI_Model {

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
	
	public function get_user($username){
        $this->db->where('username', $username);  
        $query = $this->db->get('users'); 
        
        return $query->result_array();
    }  

	public function get_booking(){
		$str = "SELECT * FROM booking_hotel";
		$query = $this->db->query($str);
		

		return $query->result_array();
	}
	public function add_booking($fullname, $furkidname, $fulladdress, $email, $phone, $checkin , $checkout, $notes, $userID){
        $this->db->query("INSERT INTO booking_hotel(names, fur_name, addresses, email, phone, check_in, check_out, note, id_user) 
						  VALUES ('$fullname', '$furkidname', '$fulladdress', '$email', '$phone', '$checkin', '$checkout', '$notes', '$userID')");
	}

	public function confirmedOrderInsert($idOrder, $Name, $furname, $address, $email, $phone, $checkin, $checkout,$price ,$userNotes, $idOrderSS){
        $this->db->query("INSERT INTO booking_confirmed(id, name, fur_name, address, email, phone, check_in, check_out, price, note, id_order) 
						  VALUES ('$idOrder','$Name', '$furname', '$address', '$email', '$phone', '$checkin', '$checkout', '$price', '$userNotes', '$idOrderSS')");
	}

	public function get_confirmed_booking(){
		$str = "SELECT * FROM booking_confirmed";
		$query = $this->db->query($str);
		

		return $query->result_array();
	}

	public function bookingMoved($idOrder){
		$str = "DELETE FROM booking_hotel WHERE id = $idOrder";
		$query = $this->db->query($str);
		
	}

	public function declineOrder($idOrder){
		$str = "DELETE FROM booking_hotel WHERE id = $idOrder";
		$query = $this->db->query($str);
		
	}

	public function bookingCompleted($idOrder){
		$str = "DELETE FROM booking_confirmed WHERE id = $idOrder";
		$query = $this->db->query($str);
		
	}

	public function insertHistory($idOrder, $Name, $furname, $address, $email, $phone, $checkin, $checkout,$price ,$userNotes, $idUser){
        $this->db->query("INSERT INTO history_hotel(id, name, fur_name, address, email, phone, check_in, check_out, price, note, id_user) 
						  VALUES ('$idOrder','$Name', '$furname', '$address', '$email', '$phone', '$checkin', '$checkout', '$price', '$userNotes', '$idUser')");
	}


	
}
