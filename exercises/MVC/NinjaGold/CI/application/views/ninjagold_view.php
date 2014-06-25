<?php //echo var_dump($this->session->all_userdata());

//$this->session->sess_destroy();
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ninja Gold</title>

	<style>
		div{
			border: 1px solid silver;
			display: inline-block;
			width: 200px;
			height: 200px;
			text-align: center;
		}
		#activities{
			display: block;
			height: 200px;
			width: 100%;
			overflow: auto;
		}
		.color{
			color:< $this->session->userdata('color')?>;
		}
	</style>
</head>
<body>
	<h1>Ninja Gold</h1>
	<label>Your Gold: </label><h2><?= $this->session->userdata('gold') ?></h2>
	<div id="farm">
		<h3>Farm</h3>
		<h4> (earns 10-20 golds)</h4>
		<form action="ninjagold/process_money" method="post">
		<input type="hidden" name="building" value="farm">
		<input type="submit" value="Find Gold!">
		</form>
	</div>
	<div id="cave">
		<h3>Cave</h3>
		<h4> (earns 5-10 golds)</h4>
		<form action="ninjagold/process_money" method="post">
		<input type="hidden" name="building" value="cave">
		<input type="submit" value="Find Gold!">
		</form>
	</div>
	<div id="house">
		<h3>House</h3>
		<h4> (earns 2-5 golds)</h4>
		<form action="ninjagold/process_money" method="post">
		<input type="hidden" name="building" value="house">
		<input type="submit" value="Find Gold!">
		</form>
	</div>
	<div id="casino">
		<h3>Casino!</h3>
		<h4> (earns/takes 0 - 50 golds)</h4>
		<form action="ninjagold/process_money" method="post">
		<input type="hidden" name="building" value="casino">
		<input type="submit" value="Find Gold!">
		</form>
	</div>
	<div id="activities">
		<p class="color"><?= $this->session->userdata('message') ?><p>
	</div>
	<form action="" method="post">
		<input type="hidden" name="reset" value="reset">
		<input type="submit" value="Reset">
	</form>
</body>
</html>