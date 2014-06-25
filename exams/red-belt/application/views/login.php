<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<style>
		.container-fluid{
			margin-left: 5%;
		}
		.navbar a{
			position: absolute;
			right: 40px;
			top: 20px;
		}
			#friends{
				width: 60%;
			}
				#friends td a{
					margin: 20px;
				}
			#others{
				width: 40%;
			}
			.other-header{
				margin-top: 10%;
			}
	</style>
</head>
<body>
	<nav class="navbar navbar-default">
		<h2>Hello <?= $this->session->userdata[0]['name'] ?>!</h2>
		<a href="">Logout</a>
	</nav>
	<div class="container-fluid">
		<div class="row">
			<h4>Here is a list of your friends:</h4>
			<table id="friends" class="table table-striped table-bordered">
				<thead>
					<tr>
						<td>Alias</td>
						<td>Action</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Gracia</td>
						<td><a href="/statics/show_profile">View Profile</a><a href="">Remove as Friend</a></td>
					</tr>
					<tr>
						<td>Micheal</td>
						<td><a href="/statics/show_profile">View Profile</a><a href="">Remove as Friend</a></td>
					</tr>
					<tr>
						<td>Johnny</td>
						<td><a href="/statics/show_profile">View Profile</a><a href="">Remove as Friend</a></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="row">
			<h4 class="other-header">Other users not on your friend's list:</h4>
			<table id="others" class="table table-striped table-bordered">
				<thead>
					<tr>
						<td>Alias</td>
						<td>Action</td>
					</tr>
				</thead>
				<tbody>
				<?php 
					foreach ($users as $key => $value)
					{?>
					<tr>
						<td><a href="/statics/show_profile/<?= $users[$key]['id'] ?>"><?= $users[$key]['alias'] ?></a></td>
						<td><button type="button" class="btn btn-default">Add as a Friend</button></td>
					</tr>
				<?php		
					}?>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>