<?php 

class Login extends CI_Model {
    
	function create_user($user_data)
	{
		$query = "INSERT INTO users (first_name, last_name, email, password, created_at, updated_at) VALUES (?, ?, ?, ?, NOW(), NOW())";
		$values = array($user_data['first_name'], $user_data['last_name'], $user_data['email'], $user_data['password']);
		return $this->db->query($query, $values);

	}

	function login_validate($login_data)
	{
		// echo "<pre>";
		// var_dump($login_data);
		// echo "</pre>";
		// die("You are DEAD!");
		$query = "SELECT * FROM users WHERE email = ? AND password = ?";
		$values = array($login_data['email'], $login_data['password']);
		return $this->db->query($query, $values)->result_array();
	}



}





?>