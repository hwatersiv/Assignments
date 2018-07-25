<?php

class Data extends CI_Model {

	function create_user($user_data)
	{	

		$query = "INSERT INTO users (name, alias, email, password, created_at, updated_at) VALUES (?, ?, ?, ?, NOW(), NOW())";
		$values = array($user_data['name'], $user_data['alias'], $user_data['email'], $user_data['password']);
		return $this->db->query($query, $values);

	}

	function login_validate($login_data)
	{
		$query = "SELECT * FROM users WHERE email = ? AND password = ?";
		$values = array($login_data['email'], $login_data['password']);
		return $this->db->query($query, $values)->result_array();
	}

	function show_users()
	{
		$query = "SELECT * FROM users";
		return $this->db->query($query)->result_array();
	}

	function show_user_by_id($user_id)
	{
		$query = "SELECT name, alias, email FROM users WHERE id = ?";
		return $this->db->query($query, $user_id)->result_array();
	}
}

?>