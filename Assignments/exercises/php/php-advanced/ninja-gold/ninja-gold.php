<?php
session_start();

if (!isset($_SESSION['gold_earned']))
{
	$_SESSION['gold_earned'] = 0;
}

if (!isset($_SESSION['activity']))
{
	$_SESSION['activity'] = '';
}

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ninja Golds</title>

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
	</style>
</head>
<body>
	<h1>Ninja Gold</h1>
	<h2>Your Gold: <?= $_SESSION['gold_earned'] ?></h2>
	<div id="farm">
		<h3>Farm</h3>
		<h4> (earns 10-20 golds)</h4>
		<form action="ninja-process.php" method="post">
		<input type="hidden" name="building" value="farm">
		<input type="submit" value="Find Gold!">
		</form>
	</div>
	<div id="cave">
		<h3>Cave</h3>
		<h4> (earns 5-10 golds)</h4>
		<form action="ninja-process.php" method="post">
		<input type="hidden" name="building" value="cave">
		<input type="submit" value="Find Gold!">
		</form>
	</div>
	<div id="house">
		<h3>House</h3>
		<h4> (earns 2-5 golds)</h4>
		<form action="ninja-process.php" method="post">
		<input type="hidden" name="building" value="house">
		<input type="submit" value="Find Gold!">
		</form>
	</div>
	<div id="casino">
		<h3>Casino!</h3>
		<h4> (earns/takes 0 - 50 golds)</h4>
		<form action="ninja-process.php" method="post">
		<input type="hidden" name="building" value="casino">
		<input type="submit" value="Find Gold!">
		</form>
	</div>
	<div id="activities">
		<?= $_SESSION['activity'] ?>
	</div>
	<form action="ninja-process.php" method="post">
		<input type="hidden" name="reset" value="reset">
		<input type="submit" value="Reset">
	</form>
</body>
</html>