<?php

class Ninja extends CI_Model {
    function add($message)
    {
        $this->db->query("INSERT INTO messages (message, created_at, updated_at) VALUES (?, NOW(), NOW())", $message);
    }

    function get()
    {
    	return $this->db->query("SELECT * FROM messages ORDER BY created_at DESC")->result_array();
    }
}

?>