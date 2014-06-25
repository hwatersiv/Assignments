<?php 
session_start();


if(isset($_POST['action']) && $_POST['action'] == 'register')
{
	register_user($_POST);
}

if(isset($_POST['action']) && $_POST['action'] == 'login')
{
	login_user($_POST);
}


//Validation
function register_user($post)
{
	require_once("reg-connection.php");
	foreach ($_POST as $key => $value)
	{
		if(empty($value))
		{
			$_SESSION['error'][$key] = "The ".$key." cannot be blank";
		}
		if($key = 'first_name')
		{
			if (strlen($value) < 3)
			{
				$_SESSION['error'][$key] = "The first name cannot be less than 3 characters long.";
			}
		}
		if($key = 'last_name')
		{
			if (strlen($value) < 3)
			{
				$_SESSION['error'][$key] = "The last name cannot be less than 3 characters long.";
			}
		}
		if($key = 'email')
		{
			if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
			{
				$_SESSION['error'][$key] = "The email (".$_POST['email'].") is not a valid email";
			}
		}
		if($key = 'password')
		{
			if (strlen($_POST['password']) < 3)
			{
				$_SESSION['error'][$key] = "The password must be more than 3 characters long.";
			}
		}
		if($key = 'confirm_password')
		{
			if ($_POST['password'] != $_POST['confirm_password'])
			{
				$_SESSION['error'][$key] = "The password and confirm password must match.";
			}
		}
	}

	if(!isset($_SESSION['error']))
	{
		$_SESSION['success']['register'] = "You have registered successfully! Thank you.";

	}
	if(isset($_SESSION['success']))
	{
		$q = "INSERT INTO register.user (first_name, last_name, email, password, created_at, updated_at) VALUES ('{$_POST['first_name']}', '{$_POST['last_name']}', '{$_POST['email']}', '{$_POST['password']}', NOW(), NOW())";

		mysqli_query($connection, $q);

		header("Location: register.php");
	}
}

function login_user($post)
{
	require_once("reg-connection.php");
	$q = "SELECT * FROM user WHERE user.password = '{$_POST['password']}' AND user.email = '{$_POST['email']}'";

	$result = mysqli_query($connection, $q);
	$user = mysqli_fetch_assoc($result);
	// attempts to find user with the above credentials

	if(count($user > 0))
	{
		$_SESSION['user_id'] = $user[0]['id'];
		$_SESSION['first_name'] = $user[0]['first_name'];
		$_SESSION['logged_in'] = TRUE;
		header("Location: reg-success.php");
	}
	else
	{
		$_SESSION['errors']['login'] = "can't find a user with those credentials";
		header("Location: register.php");
		die();
	}
}
?>