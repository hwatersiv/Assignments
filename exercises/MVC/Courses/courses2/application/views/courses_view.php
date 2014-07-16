<?php 

//var_dump($courses);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Courses</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<h2 class="col-md-12">Add A New Course</h2>
			<form action="/courses/create" method="post" class="form-group">
				<label class="col-md-1">Name</label>
				<input type="text" name="course" class="col-md-4 form-control">
				<label class="col-md-1">Description</label>
				<textarea name="description" class="col-md-4 form-control" cols="30" rows="10"></textarea>
				<input type="submit" class="btn btn-success form-control" value="Add">
			</form>
			<h2 class="col-md-12">Courses</h2>
			<table class="table table-striped">
				<thead>
					<tr>
						<td>Course Name</td>
						<td>Description</td>
						<td>Date Added</td>
						<td>Action</td>
					</tr>
				</thead>
				<tbody>
				<?php 
					foreach ($courses as $key)
					{ ?>
					<tr>
						<td><?= $key['name'] ?></td>
						<td><?= $key['description'] ?></td>
						<td><?= $key['created_at'] ?></td>
						<td><a href="/courses/destroy/<?= $key['id'] ?>">Remove</a></td>
					</tr>
				<?php
					} ?>	
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>