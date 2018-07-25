<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Main</title>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<style>
		#header{
			margin: 30px 0px;
		}
		#register-sec{
			border: 2px solid black;
			width: 40%;
			display: inline-block;
			padding: 10px;
		}
		#login-sec{
			border: 2px solid black;
			width: 40%;
			display: inline-block;
			margin-left: 10%;
			vertical-align: top;
			padding: 10px;
		}
			.form-group label{
				text-align: left;
				margin-left: 20px;
				display: inline-block;
			}
			.form-group input{
				float: right;
				margin-right: 20px;
				display: inline-block;
			}
			#btn{
				float: right;
			}

	</style>
	<script>
		$.fn.datepicker.defaults.format = "mm/dd/yyyy";
		$('.datepicker').datepicker({
		    startDate: '-3d'
		})
	</script>
</head>
<body>
	<div class="container">
		<div id="header">
			<h2>Welcome!</h2>
		</div>
		<div id="register-sec" class="row">Register
			<form role="form" class="form-horizontal" id="register" action="/statics/reg_validation" name="action" value="register" method="post">
				<?= $this->session->flashdata('reg_errors'); ?>
				<?= "<br /><p>".$this->session->flashdata('success')."</p>" ?>
				<div class="form-group">
					<label>Name:</label>
					<input type="text" name="name" placeholder="Name">
				</div>
				<div class="form-group">
					<label>Alias:</label>
					<input type="text" name="alias" placeholder="Alias">
				</div>
				<div class="form-group">
					<label>Email:</label>
					<input type="email" name="email" placeholder="Email Address">
				</div>
				<div class="form-group">
					<label>Password:</label>
					<input type="password" name="password" placeholder="Password">
				</div>
				<p>*Password should be at least 8 characters</p>
				<div class="form-group">
					<label>Confirm Password:</label>
					<input type="password" name="confirm_password" placeholder="Confirm Password">	
				</div>
				<div class="form-group">
					<label>Date of Birth:</label>
					<input class="datepicker" data-date-format="mm/dd/yyyy">
				</div>
				<input type="submit" id="btn" class="btn btn-primary" value="Register">
			</form>
		</div>
		<div id="login-sec" class="row">Login
			<form role="form" class="form-horizontal" id="login" action="/statics/login_validation" name="action" value="login" method="post">
				<?= $this->session->flashdata('log_errors'); ?>
				<div class="form-group">
					<label>Email:</label>
					<input type="email" name="email" placeholder="Email Address">
				</div>
				<div class="form-group">
					<label>Password:</label>
					<input type="password" name="password" placeholder="Password">
				</div>
				<input type="submit" id="btn" class="btn btn-primary" value="Login">
			</form>
		</div>
	</div>
</body>
</html>