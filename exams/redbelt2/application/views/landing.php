<?php 
// echo "<pre>";
// var_dump($this->session->userdata);
// echo "</pre>";

?>


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
		.poked_you{
			border: 1px solid black;
			overflow: auto;
			height: 100px;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-default">
		<h2>Hello <?= $this->session->userdata[0]['name'] ?>!</h2>
		<a href="/pokes/logout">Logout</a>
	</nav>
	<div class="container-fluid">
		<div class="row">
			<h4>Pokes:</h4>
			<div class="poked_you col-md-4">
			<?php foreach ($poked_by as $key => $value) { ?>
				<p><?= $poked_by[$key]['name']?> poked you <?= $poked_by[$key]['times']?> times</p>
			<?php } ?>
			</div>
		</div>
		<div class="row">
			<h4 class="pokes">People you may want to poke:</h4>
			<table id="pokes" class="table table-striped table-bordered">
				<thead>
					<tr>
						<td>Name</td>
						<td>Alias</td>
						<td>Email Address</td>
						<td>Poke History</td>
						<td>Action</td>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($users as $key => $value) { ?>
					<tr>
						<td><?= $users[$key]['name'] ?></td>
						<td><?= $users[$key]['alias'] ?></td>
						<td><?= $users[$key]['email'] ?></td>
						<td><?= $users[$key]['pokes'] ?></td>
						<td><a href="/pokes/add_poke/<?= $users[$key]['id'] ?>"><button class="btn btn-primary">Poke</button></a></td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>