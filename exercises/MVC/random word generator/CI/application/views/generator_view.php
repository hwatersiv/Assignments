<?= var_dump($this->session->all_userdata()) ?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Random Word Generator</title>
	<style>
		h4{
			text-align: center
		}
		h1{
			border: 2px solid black;
			padding: 15px;
			text-align: center;
		}
		input{
			margin-left: 50%;
			margin-right: 50%;
		}
	</style>
</head>
<body>
	<h4>Random Word (attempt #<?= $this->session->userdata('counter') ?>)</h4>
	<h1><?= $this->session->userdata('word') ?></h1>
	<form action="generators/get_word">
	<input type="submit" value="Generate">
	</form>
</body>
</html>