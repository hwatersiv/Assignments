<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Random Word Generator</title>
</head>
<body>
	<h3>Random Word (attempt #<?= $this->session->flashdata('count') ?>)</h3>
	<h1><?= $this->session->flashdata('random'); ?></h1>
	<form action="/randoms/generate" method="post">
		<input type="hidden" value="generate">
		<input type="submit" value="Generate">
	</form>
</body>
</html>