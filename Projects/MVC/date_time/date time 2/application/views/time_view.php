<?php date_default_timezone_set('America/Los_Angeles') ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Date Time</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<h1>The current time and date</h1>
			<h2><?= date('F j, Y') ?></h2>
			<h2><?= date('g:i a') ?></h2>
		</div>
	</div>
</body>
</html>