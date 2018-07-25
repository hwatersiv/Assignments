
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Survey result</title>
</head>
<body>
	<h3>Thanks for submitting this form! You have submitted the form <?= $this->session->userdata('counter') ?> times now.</h3>
	<div>
		<h3>Submitted Information</h3>
		<label for="">Name:</label><p><?= $this->session->userdata('name') ?></p>
		<label for="">Dojo Location:</label><p><?= $this->session->userdata('location') ?></p>
		<label for="">Favorite Language:</label><p><?= $this->session->userdata('language') ?></p>
		<label for="">Comment:</label><p><?= $this->session->userdata('comment') ?></p>
		<a href="/"><button>Go Back</button></a>
	</div>
</body>
</html>