<?php 
// echo "<pre>";
// var_dump($table);
// echo"</pre>";?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ninja Gold</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<style>

		.building{
			border: 2px solid black;
			padding: 20px;
		}

		.activities{
			border: 2px solid black;
			overflow: auto;
			height: 200px;
		}

		.green{
			color: green;
		}

		.red{
			color: red;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<h4>Your Gold: </h4><p><?= $this->session->userdata('your_gold') ?></p>
			<div class="building col-md-2">
				<h2>Farm</h2>
				<h4>(earns 10-20 gold)</h4>
				<div class="form-group">
					<form action="ninjas/process_money" method="post">
						<input type="hidden" name="building" value="farm">
						<input type="submit" class="btn btn-primary" value="Find Gold!">
					</form>
				</div>
			</div>
			<div class="building col-md-2 col-md-offset-1">
				<h2>Cave</h2>
				<h4>(earns 5-10 gold)</h4>
				<div class="form-group">
					<form action="ninjas/process_money" method="post">
						<input type="hidden" name="building" value="cave">
						<input type="submit" class="btn btn-primary" value="Find Gold!">
					</form>
				</div>
			</div>
			<div class="building col-md-2 col-md-offset-1">
				<h2>House</h2>
				<h4>(earns 2-5 gold)</h4>
				<div class="form-group">
					<form action="ninjas/process_money" method="post">
						<input type="hidden" name="building" value="house">
						<input type="submit" class="btn btn-primary" value="Find Gold!">
					</form>
				</div>
			</div>
			<div class="building col-md-2 col-md-offset-1">
				<h2>Casino</h2>
				<h4>(earns/takes 0-50 gold)</h4>
				<div class="form-group">
					<form action="ninjas/process_money" method="post">
						<input type="hidden" name="building" value="casino">
						<input type="submit" class="btn btn-primary" value="Find Gold!">
					</form>
				</div>
			</div>
			<h2 class="col-md-3">Activities</h2>
			<div class="activities col-md-11">
				<?php 
					foreach ($table as $value) {
				?>
					<?= $value['message']." ".$value['created_at']."</p>" ?>	
				<?php
					}
				?>
			</div>
		</div>
	</div>
</body>
</html>