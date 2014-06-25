

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Courses</title>
	<style>
		input{
			display: block;
		}
		.table{
			border: 1px solid blue;
			width: 80%;
			height: 300px;
		}
		td{
			padding: 10px;
		}
	</style>
</head>
<body>
	<h2>Add a new course</h2>
	<form action="/courses/add_course" method="post">
		<label>Name:</label><input type="text" name="name">
		<label>Description:</label><input type="textarea" name="description">
		<input type="submit" name="Add">
	</form>
	<h2><?= $this->session->userdata('message') ?></h2>
	<div class="table">
		<h2>Courses</h2>
		<table>
			<thead>
				<tr>
					<td>Name</td>
					<td>Description</td>
					<td>Created at</td>
				</tr>
			</thead>
			<tbody>
			<!--you call the key to the array you stored the data in  check the controller line 10 -->
				<?php foreach ($courses as $course)
				{ ?>
				<tr>
					<td><?= $course['name'] ?></td>
					<td><?= $course['description'] ?></td>
					<td><?= $course['created_at'] ?></td>
					<td><?= $course['id'] ?></td>
					<td>
						<a href="/courses/destroy/<?= $course['id'] ?>">Remove</a>
					</td>
				</tr>
				<?php 
				} ?>
				
			</tbody>
		</table>
	</div>
</body>
</html>