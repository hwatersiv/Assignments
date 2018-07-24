<?php
session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Submit Email</title>
</head>
<body>
	<?php
	if (isset($_SESSION['error'])) {
		foreach ($_SESSION['error'] as $name => $message)
		{ 
			?>
			<p><?= $message ?></p>
			<?php
			
		}
	}
	?>
	<h1>Please enter your email address:</h1>
	<form action="process.php" method="post">
		<input type="text" name="email" placeholder="Email Address">
		<input type="submit" value="submit">
	</form>
</body>
</html>
<?php
$_SESSION = array();
?>