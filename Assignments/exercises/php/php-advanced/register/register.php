<?php 
session_start();
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<style>
		label{
			display: block;
		}
	</style>
</head>
<body>
	<h1>Register</h1>
	<?php 
		if (isset($_SESSION['error']))
		{ 
			foreach ($_SESSION['error'] as $key => $value)
			{ ?>
				<p><?= $_SESSION['error'][$key] ?></p>
	<?php   }
		} ?>
	<form action="register-process.php" method="post">
		<label for="email">Email:<input type="text" name="email" placeholder="Enter Email"></label>
		<label for="first_name">First Name:<input type="text" name="first_name" placeholder="Enter First Name"></label>
		<label for="last_name">Last Name:<input type="text" name="last_name" placeholder="Enter Last Name"></label>
		<label for="password">Password:<input type="text" name="password" placeholder="Enter Password"></label>
		<label for="confirm_password">Confirm Password:<input type="text" name="confirm_password" placeholder="Re-enter Password"></label>
		<label for="birth_date">Birth Date:<input type="text" name="birth_date" placeholder="MM/DD/YYYY"></label>
		<label for="profile_pic">Profile Picture:<input type="file" name="profile_pic"></label>
		<input type="submit" name="Submit">
	</form>
</body>
</html>
<?php 
$_SESSION = array();

?>