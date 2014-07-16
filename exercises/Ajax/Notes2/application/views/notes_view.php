<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Notes</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script>
		$(document).on('submit', 'form', function () {
			$.post(
				$(this).attr('action'),
				$(this).serialize(),
				function (new_note) {
					$('#container').append(
					"<div class='row'>"
					+	"<h3 class='col-md-1'>" + new_note.note.title + "</h3>"
					+	"<a href='/notes/delete/" + new_note.id + "' class='col-md-12 delete'>Delete</a>"
					+	"<form action='/notes/update/" + new_note.id + "' method='post'>"
					+		"<textarea name='description' class='col-md-3 description' rows='7'>" + new_note.note.description + "</textarea>"
					+	"</form>"
					+"</div>"
					);
				},
				"json"
			)
			return false;
		});
		$('.description').on('focusout', function (event) {
			//alert("hi");
			$(this).parent().submit();
			event.preventDefault();
		});

		$(document).on('click', '.delete', function () {
			var self = $(this);
			$.post(
				self.attr('href'),
				function () {
					self.parent().remove()
				}
			)
			return false;
		});

	</script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="navbar navbar-default">
				<h2>Notes</h2>
			</div>
		</div>
		<div class="row" id="container">
		</div>
		<?php
			foreach ($notes as $key)
			{ ?>
			<div class="row">
				<h3 class="col-md-1"><?= $key['title'] ?></h3>
				<a href="/notes/delete/<?= $key['id'] ?>" class="col-md-12 delete">Delete</a>
				<form action="/notes/update/<?= $key['id'] ?>" method="post">
					<textarea name="description" class="col-md-3 description" rows="7"><?= $key['description'] ?></textarea>
				</form>
			</div>
		<?php
			} ?>
		<div class='row'>
			<form action="/notes/add"  method="post" class='form-group'>
				<input type="text" class="form-control" name="title">
				<textarea name="description" class="col-md-3 form-control" rows="7"></textarea>
				<input type="submit" class="btn btn-primary form-control" value="Add Note">
			</form>
		</div>
	</div>
</body>
</html>   