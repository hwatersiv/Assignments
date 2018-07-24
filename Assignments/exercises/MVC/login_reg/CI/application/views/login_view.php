<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<style>
		.row{
			text-align: center;
		}
		#login{
			border: 2px solid black;
			padding: 15px;
			margin-top: 10px;
		}
		#register{
			border: 2px solid black;
			margin-top: 10px;
			padding: 15px;
		}
	</style>
</head>
<body>
	<div class="row">
		<div>
			<form role="form" class="col-md-6 col-md-offset-3" id="login" action="/logins/login_validation" name="action" value="login" method="post">Login
				<?= "<br /><p>".$this->session->flashdata('login_err')."</p>" ?>
				<div class="from-group">
					<label>Email Address</label>
					<input type="email" name="email" placeholder="Email Address">
				</div>
				<div class="from-group">
					<label>Password</label>
					<input type="password" name="password" placeholder="Password">
				</div>
				<input type="submit" class="btn btn-primary" value="Login">
			</form>
		</div>
		<div>
			<form role="form" class="col-md-6 col-md-offset-3" id="register" action="/logins/reg_validation" name="action" value="register" method="post">Or Register
				<?= $this->session->flashdata('errors'); ?>
				<?= "<br /><p>".$this->session->flashdata('success')."</p>" ?>
				<div class="form-group">
					<label>First Name</label>
					<input type="text" name="first_name" placeholder="First Name">	
				</div>
				<div class="form-group">
					<label>Last Name</label>
					<input type="text" name="last_name" placeholder="Last Name">	
				</div>
				<div class="form-group">
					<label>Email Address</label>
					<input type="email" name="email" placeholder="Email Address">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" placeholder="Password">
				</div>
				<div class="form-group">
					<label>Confirm Password</label>
					<input type="password" name="confirm_password" placeholder="Confirm Password">	
				</div>
				<input type="submit" class="btn btn-primary" value="Register">
			</form>
		</div>
	</div>

</body>
</html>