<?php
session_start();
require_once("connection.php")
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
	<form action="email-process.php" method="post" enctype="multipart/form-data">
		<input type="text" name="email" placeholder="Email Address">
		<input type="submit" value="submit">
	</form>
</body>
</html>
<?php
$_SESSION = array();
?>