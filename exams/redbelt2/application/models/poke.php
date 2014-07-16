<?php

class Poke extends CI_Model {

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

	function show_users($id)
	{
		$query = "SELECT * FROM users WHERE id <> ?";
		return $this->db->query($query, $id)->result_array();
	}

	function get_poke_num($id)
	{
		return $this->db->query("SELECT pokes FROM users WHERE id = ?", $id)->result_array();
	}

	function add_poke($new_poke_num, $id)
	{
		$q = "UPDATE users SET pokes = ? WHERE id = ?";
		$values = array($new_poke_num, $id);
		$this->db->query($q, $values);
	}

	function add_to_poked_by($user_data)
	{
		// $q = "INSERT INTO poked_bys (name, times, users_id) VALUES (?, ?, ?) ON DUPLICATE KEY UPDATE name = VALUES(name), VALUES (times + 1), users_id = VALUES(users_id)";
		$q = "REPLACE INTO poked_bys (name, times, users_id) VALUES (?, 1, ?)";
		$values = array($user_data[0]['name'], $user_data[0]['id']);
		$this->db->query($q, $values);
	}

	function poked_by($id)
	{
		$q = "SELECT poked_bys.name, poked_bys.times
			  FROM poked_bys
			  JOIN users ON poked_bys.users_id = users.id
			  WHERE users.id = ?";
		return $this->db->query($q, $id)->result_array();
	}
}

?>