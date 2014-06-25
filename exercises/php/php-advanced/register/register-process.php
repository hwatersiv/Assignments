<?php 
	session_start();


foreach ($_POST as $key => $value) {
	

	if (empty($value))
	{
		$_SESSION['error'][$key] = $key." is required to register.";
	}
	elseif ($key == 'email')
	{
		if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
		{
			$_SESSION['error']['email'] = "Email is invalid.";
		}
	}
	elseif($key == 'first_name')
	{
		if(preg_match('#[0-9]#',$_POST['first_name']))
		{
			$_SESSION['error']['first_name'] = "The first name cannot contain numbers.";
		}
	}
	elseif($key == 'last_name')
	{
		if(preg_match('#[0-9]#',$_POST['last_name']))
		{
			$_SESSION['error']['last_name'] = "The last name cannot contain numbers.";
		}
	}
	elseif($key == 'password')
	{
		if(strlen($_POST['password']) <= 6)
		{
			$_SESSION['error']['password'] = "The password must be longer than 7 characters";
		}
	}
	elseif($key == 'confirm_password')
	{
		if($_POST['confirm_password'] != $_POST['password'])
		{
			$_SESSION['error']['confirm_password'] = "The confirm password must match the password.";
		}
	}

}

header("Location: register.php")
?>