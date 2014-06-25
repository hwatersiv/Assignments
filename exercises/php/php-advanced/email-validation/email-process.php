<?php
session_start();


foreach ($_POST as $name => $value)
{	
	$page = null;
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
		$_SESSION['success'][$name] = "The email address you entered " . $value . " is a VALID email address! Thank You!";
	}
}
function page()
{
	if(isset($_SESSION['error']))
	{
		return $page = "index.php";
	}
	elseif ($_SESSION['success'])
	{
		return $page = "success.php";
	}
}

header("Location:" . page());
?>