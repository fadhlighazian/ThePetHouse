<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class register_model extends CI_Model {


	public function register_user($uname, $fname, $lname, $email, $hash, $phone,  $file, $address){
        $this->db->query("INSERT INTO users(username, firstName, lastName, email, password, phone, userimg, address) 
						  VALUES ('$uname', '$fname', '$lname', '$email', '$hash', '$phone', '$file', '$address')");
    }
}
