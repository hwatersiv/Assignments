<?php 
echo "<pre>";
var_dump($this->session->userdata('your_gold'));
echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ninja Gold</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<style>
	
		.building{
			border: 1px solid black;
			padding: 20px;
		}

		.activity{
			border: 1px solid black;
			height: 200px;
			overflow: auto;
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
			<h2>Your Gold: <?= $this->session->userdata('your_gold') ?></h2>
			<div class="building col-md-2">
				<h2>Farm</h2>
				<h4>(earns/takes 0-50 gold)</h4>
				<form action="/ninjas/process_money" method="post">
					<input type="hidden" name="building" value="farm">
					<input type="submit" value="Find Gold!">
				</form>
			</div>
			<div class="building col-md-2 col-md-offset-1">
				<h2>Cave</h2>
				<h4>(earns/takes 0-50 gold)</h4>
				<form action="/ninjas/process_money" method="post">
					<input type="hidden" name="building" value="cave">
					<input type="submit" value="Find Gold!">
				</form>
			</div>
			<div class="building col-md-2 col-md-offset-1">
				<h2>House</h2>
				<h4>(earns/takes 0-50 gold)</h4>
				<form action="/ninjas/process_money" method="post">
					<input type="hidden" name="building" value="house">
					<input type="submit" value="Find Gold!">
				</form>
			</div>
			<div class="building col-md-2 col-md-offset-1">
				<h2>Casino</h2>
				<h4>(earns/takes 0-50 gold)</h4>
				<form action="/ninjas/process_money" method="post">
					<input type="hidden" name="building" value="casino">
					<input type="submit" value="Find Gold!">
				</form>
			</div>
			<h4 class="col-md-3">Activity</h4>
			<div class="activity col-md-11">
				<?php 
					foreach ($table as $value)
					{ ?>
						<?= $value['message']." ".$value['created_at']."</p>" ?>
				<?php 
					}
				 ?>
			</div>
			<a class="col-md-6" href="/ninjas/clear"><button>Restart</button></a>
		</div>
	</div>
</body>
</html>