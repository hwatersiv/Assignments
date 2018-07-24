<?php

class Note extends CI_Model {

	function show_notes()
	{
		return $this->db->query("SELECT * FROM notes ORDER BY updated_at DESC")->result_array();
	}

	function add($new_note)
	{
		$q = "INSERT INTO notes (title, created_at, updated_at) VALUES (?, NOW(), NOW())";
		$this->db->query($q, $new_note);
		return $this->db->insert_id();
	}

	function update($description, $id)
	{
		$q = "UPDATE notes SET description = ? WHERE id = ?";
		$values = array($description['description'], intval($id));
		$this->db->query($q, $values);

	}

	function delete($id)
	{
		$q = "DELETE FROM notes WHERE id = ?";
		$this->db->query($q, $id);
	}

}