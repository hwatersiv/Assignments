
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Survey Results</title>
</head>
<body>
	<div>
		<h3>You have submitted <?= $this->session->userdata('counter'); ?> times</h3>
		<h2>Submitted information</h2>
		<label>Name: </label>
		<p><?= $this->session->userdata('name'); ?></p>
		<label>Dojo Location</label>
		<p><?= $this->session->userdata('location') ?></p>
		<label>Favorite Language:</label>
		<p><?= $this->session->userdata('language') ?></p>
		<label>Comment:</label>
		<p><?= $this->session->userdata('comment') ?></p>
		<a href="/"><button>Go Back</button></a>
	</div>
</body>
</html>