<?php 
session_start();

var_dump($_SESSION);

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration</title>
	<style>
		label{
			display: block;
		}
	</style>
</head>
<body>
	<h1>Register</h1>
	<?php
	if(isset($_SESSION['error']))
	{
		foreach ($_SESSION['error'] as $key => $message)
		{
			echo "<p>".$message."</p>";
			$_SESSION = array();
		}
	}
	if(isset($_SESSION['success']))
	{
		echo "<p>".$_SESSION['success']['register']."</p>";
		$_SESSION = array();
	}
	?>
	<form action="reg-process.php" method="post">
		<input type="hidden" name="action" value="register">
		<label>First Name:<input type="text" name="first_name"></label>
		<label>Last Name:<input type="text" name="last_name"></label>
		<label>Email:<input type="text" name="email"></label>
		<label>Password:<input type="password" name="password"></label>
		<label>Confirm Password:<input type="password" name="confirm_password"></label>
		<input type="submit" name="submit" value="Register">
	</form>
	<h1>Login</h1>
	<form action="reg-process.php" method="post">
		<input type="hidden" name="action" value="login">
		<label>Email:<input type="text" name="email"></label>
		<label>Password:<input type="password" name="password"></label>
		<input type="submit" name="submit" value="Login">
	</form>
</body>
</html>
