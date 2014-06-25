<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<style>
		.row{
			text-align: center;
		}
		#logout{
			position: absolute;
			right: 10px;
			top: 10px;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-default" role="navigation">
		<div class="navbar-header">
			<h3>Welcome <?= $this->session->userdata[0]['first_name'] ?></h3>
			<form action="/logins/logout" method="post">
				<button type="submit" id="logout"class="btn btn-default">Logout</button>
			</form>		
		</div>
	</nav>
	<div class="row">
		<div>
			First Name: <h4><?= $this->session->userdata[0]['first_name'] ?></h4>
			Last Name: <h4><?= $this->session->userdata[0]['last_name'] ?></h4>
			Email Address: <h4><?= $this->session->userdata[0]['email'] ?></h4>
		</div>
	</div>
</body>
</html>