<?php
session_start();
require_once("connection.php");

function page()
{
	if(isset($_SESSION['error']))
	{
		return $page = "email-index.php";
	}
	elseif ($_SESSION['success'])
	{
		return $page = "email-success.php";
	}
}

$page = null;

// Validation List
foreach ($_POST as $name => $value)
{	
	if(empty($value))
	{
		$_SESSION['error'][$name] = "A blank email address is not acceptable. Please enter an email address.";
	}
	elseif(!filter_var($value, FILTER_VALIDATE_EMAIL))
	{
		$_SESSION['error'][$name] = "The email address you entered " . $value . " is NOT a valid email address!";
	}
	else
	{

		$_SESSION['success'][$name] = "The email address you entered (" . $value . ") is a VALID email address! Thank You!";
	}
}

// Once valid insert into database
if(isset($_SESSION['success']))
{
	$query = "INSERT INTO email (email_address, created_at, updated_at)VALUES('{$_POST['email']}', NOW(), NOW())";

	mysqli_query($connection, $query);
}

header("Location:" . page());
?>