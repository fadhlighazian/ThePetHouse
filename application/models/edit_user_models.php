<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class edit_user_models extends CI_Model {

	public function updatePicture($file){
        //$str = "UPDATE users SET userimg = " . $file " WHERE username = " . $this->session->userdata('username');
		//$query = $this->db->query($str);
        
        
        $this->db->set('userimg', $file);
        $this->db->where('username', $this->session->userdata('username'));
        $this->db->update('users');

		//return $query->result_array();
    }

    public function updateUserDetails($uname, $fname, $lname, $email, $phone, $address){
        $this->db->set('username', $uname);
        $this->db->set('firstName', $fname);
        $this->db->set('lastName', $lname);
        $this->db->set('email', $email);
        $this->db->set('phone', $phone);
        $this->db->set('address', $address);
        
        $this->db->where('username', $this->session->userdata('username'));
        $this->db->update('users');
    }
}
