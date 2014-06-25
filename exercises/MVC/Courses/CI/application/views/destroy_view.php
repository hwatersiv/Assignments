<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Delete a Course</title>
</head>
<body>
	<?= var_dump($course)?>
	<h1>Are you sure you want to delete the following course?</h1>
	<label>Name:</label><h4> <?= $course['name']?></h4>
	<label>Description</label><h4><?= $course['description']?></h4>
	<input type="submit" value="No">
	<a href="/courses/delete/<?= $course['id'] ?>">Yes! I want to delete this</a>
</body>
</html>