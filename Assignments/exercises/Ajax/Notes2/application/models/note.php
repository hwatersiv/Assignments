<?php 
class Note extends CI_Model {

	function show_notes()
	{
		return $this->db->query("SELECT * FROM notes ORDER BY created_at DESC")->result_array();
	}

	function add($new_note)
	{
		$q = "INSERT INTO notes (title, description, created_at, updated_at) VALUES (?, ?, NOW(), NOW())";
		$values = array($new_note['note']['title'], $new_note['note']['description']);
		$this->db->query($q, $values);
		return $this->db->insert_id();
	}

	function update($description, $id)
	{
		// var_dump($description['description']);
		// die("you died!");
		$q = "UPDATE notes SET description = ?, updated_at = NOW() WHERE id = ?";
		$values = array($description['description'], intval($id));
		$this->db->query($q, $values);
	}

	function delete($id)
	{
		$this->db->query("DELETE FROM notes WHERE id = ?", intval($id));
	}
}
?>
