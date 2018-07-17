<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_model extends CI_Model {


	public function can_login($username, $password)  
    {  
           $this->db->where('username', $username);  
           $this->db->where('password', $password);  
           $query = $this->db->get('users');  
           //SELECT * FROM users WHERE username = '$username' AND password = '$password'  
           if($query->num_rows() > 0)  
           {  
                return true;  
           }  
           else  
           {  
                return false;       
           }  
    }
    public function get_user($username){
        $this->db->where('username', $username);  
        $query = $this->db->get('users'); 
        
        return $query->result_array();
    }  

    public function get_image($username){
        $str = "SELECT userimg FROM users WHERE username = $username";
		$query = $this->db->query($str);
		

		return $query->result_array();
    }  
}
