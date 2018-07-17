<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class booking_orders_model_salon extends CI_Model {

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
		$str = "SELECT * FROM booking_salon";
		$query = $this->db->query($str);
		return $query->result_array();
	}

	public function get_confirmed_booking(){
		$str = "SELECT * FROM booking_confirmed_salon";
		$query = $this->db->query($str);
		return $query->result_array();
	}
	
	public function add_booking($fullname, $furkidname,  $typesalon, $fulladdress, $email, $phone, $checkin, $notes, $userID, $petCategory){
        $this->db->query("INSERT INTO booking_salon(names, fur_name, type_salon, addresses, email, phone, check_in, note, id_user, id_pet) 
						  VALUES ('$fullname', '$furkidname', '$typesalon', '$fulladdress', '$email', '$phone', '$checkin', '$notes' , '$userID','$petCategory')");
	}
	
	public function confirmedOrderInsert($idOrder, $Name, $furname, $address, $email, $phone, $checkin, $typesalon, $userNotes, $idOrderSS){
        $this->db->query("INSERT INTO booking_confirmed_salon(id, name, fur_name, type_salon, address, email, phone, check_in, note, id_order) 
						  VALUES ('$idOrder','$Name', '$furname', '$typesalon', '$address', '$email', '$phone', '$checkin', '$userNotes', '$idOrderSS')");
	}

	public function bookingMoved($idOrder){
		$str = "DELETE FROM booking_salon WHERE id = $idOrder";
		$query = $this->db->query($str);
		
	}

	public function declineOrder($idOrder){
		$str = "DELETE FROM booking_salon WHERE id = $idOrder";
		$query = $this->db->query($str);
		
	}
	
	//untuk mengambil isi category pet (dog,cat)
	public function get_pet_category(){
		$query = $this->db->get("pet_category");
		return $query;
	}

	//untuk melakukan chained terhadap dropdown ke-2 
	public function get_data_chained($id){
		$query = $this->db->query("SELECT * FROM pricelist_salon where id_pet = '$id'");
		return $query;
	}

	public function bookingCompleted($idOrder){
		$str = "DELETE FROM booking_confirmed_salon WHERE id = $idOrder";
		$query = $this->db->query($str);
		
	}

	public function insertHistory($idOrder, $Name, $furname, $address, $email, $phone, $checkin, $typesalon, $userNotes, $idUser){
        $this->db->query("INSERT INTO history_salon(id, name, fur_name, type_salon, address, email, phone, check_in, note, id_user) 
						  VALUES ('$idOrder','$Name', '$furname', '$typesalon', '$address', '$email', '$phone', '$checkin', '$userNotes' , '$idUser')");
	}


}
