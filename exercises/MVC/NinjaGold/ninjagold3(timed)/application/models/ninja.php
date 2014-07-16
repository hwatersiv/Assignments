<?php

class Ninja extends CI_Model {
    
	function show()
	{
		return $this->db->query("SELECT * FROM message ORDER BY created_at DESC")->result_array();
	}

    function add($message)
    {
    	$this->db->query("INSERT INTO message (message, created_at, updated_at) VALUE (?, NOW(), NOW())", $message);
    }
}

?>