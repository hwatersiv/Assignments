<?php
session_start();

if (!isset($_SESSION['counter']))
{
	$_SESSION['counter'] = 0;
}
else
{
	$_SESSION['counter']++;
}

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<style type="text/css">
		div{
			border: 3px solid black;
			width: 20%;
			height: 300px;
			margin-right: 33%;
			margin-left: 33%;
		}
		h1{
			margin-left: 10%;
		}
		input{
			margin-right: 33%;
			margin-left: 33%;			
		}
	</style>
</head>
<body>
	<div>
		<h1>You have visited this site</h1>
		<h1><?= $_SESSION['counter'] ?></h1>
		<h1>times</h1>
	</div>
	<form action="process.php" method="post">
	<input type="submit" value="start over (destroy session)">
	</form>
</body>
</html>