<?php
class Course extends CI_Model {
    function show_courses()
    {
        return $this->db->query("SELECT * FROM courses ORDER BY id DESC")->result_array();
    }

    function create($new_course)
    {
    	$q = "INSERT INTO courses (name, description, created_at, updated_at) VALUES (?, ?, ?, NOW())";
    	$values = array($new_course['course'], $new_course['description'], date("Y-m-d, H:i:s"));
    	$this->db->query($q, $values);
    }

    function course_by_id($id)
    {
    	return $this->db->query("SELECT * FROM courses WHERE id = ?", $id)->result_array();
    }

    function delete($id)
    {
    	$this->db->query("DELETE FROM courses WHERE id = ?", $id);
    }
}

?>