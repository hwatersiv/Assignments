<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<style>

		.home{
			display: inline-block;
			margin-left: 80%;
			margin-right: 2%;
		}

		.logout{
			display: inline-block;
		}
		.row{
			margin-left: 5%;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-default">
		<h4 class="home"><a href="">Home</a></h4>
		<h4 class="logout"><a href="">Logout</a></h4>
	</nav>
	<div class="row">
		<h2><?= $user[0]['alias']?>'s Profile</h2>
		<label class="col-md-2">Name:</label><h5 class="col-md-10"><?= $user[0]['name'] ?></h6>
		<label class="col-md-2">Email Address:</label><h5 class="col-md-4"><?= $user[0]['email'] ?></h6>
	</div>
</body>
</html>