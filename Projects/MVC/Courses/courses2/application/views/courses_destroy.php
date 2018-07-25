<?php 

// var_dump($course[0]);
// die('You died');

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Delete a course</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<h2 class="col-md-12">Are you show you want to delete the following course?</h2>
			<label class="col-md-2">Name:</label>
			<p class="col-md-10"><?= $course[0]['name'] ?></p>
			<label class="col-md-2">Description:</label>
			<p class="col-md-10"><?= $course[0]['description'] ?></p>
			<form action="/courses/delete/<?= $course[0]['id'] ?>" method="post">
				<button class="btn btn-default col-md-offset-1">No</button>
				<button class="btn btn-danger col-md-offset-1" >Yes! I want to delete this</button>
			</form>
		</div>
	</div>
</body>