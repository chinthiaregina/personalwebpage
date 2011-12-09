<?php

class User_model extends CI_Model
{
	public function register_user($data)
	{
		$this->db->set('username', $data['username']);
		$this->db->set('name', $data['name']);
		$this->db->set('email', $data['email']);
		$this->db->set('password', sha1($data['password']));
		
		$this->db->insert('users');
	}
	
	public function username_exists($username){
		$this->db->where('username', $username);
		$query = $this->db->get('users');
		if ($query->num_rows() > 0) {
			return TRUE;
		}
		else {
			return FALSE;
		}
	}
}

?>