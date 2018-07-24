<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Notes</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script>

		$(document).ready(function () {
			$(document).on('submit', 'form', function() {

				$.post(
					$(this).attr('action'),
					$(this).serialize(),
					function (data) {
						alert(data);
						$('#container').append(
							"<div class='row'>"
							+	"<div class='note'>"
							+		"<h5 class='col-md-12'>" + data.title + "</h5>"
							+		"<a href='/notes/delete/" + data.id + "' class='col-md-12 delete'>Delete</a>"
							+		"<form class='" + data.id + "'action='/notes/update/" + data.id + "' method='post'>"
							+			"<textarea name='description' class='col-md-3 description' rows='6'>" + data.description + "</textarea>"
							+		"</form>"
							+	"</div>"
							+"</div>"
						);
					},
					"json"
				);
				return false;
			});

			$(document).on('keypress', '.description', function () {
				$(this).parent().submit();
			});

			$(document).on('click','a.delete', function () {
				alert('hi');
				var self = $(this);
				$.post(
					$(this).attr('href'),
					function () {
						self.parent().parent().remove();
					}
				)
				return false;
			})
		});

	</script>
	<style>
		.row{
			border-bottom: 1px solid silver;
		}

		.description{
			margin: 0;
			display: block;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="navbar">
				<h3>Notes</h3>
			</div>
		</div>
		<div id="container">
		</div>
		<?php
			foreach ($notes as $attr)
			{ ?>
			<div class="row">
				<div class="note">
					<h5 class="col-md-12"><?= $attr['title'] ?></h5>
					<a href="/notes/delete/<?= $attr['id'] ?>" class="col-md-12 delete">Delete</a>
					<form action="/notes/update/<?= $attr['id'] ?>" method="post">
						<textarea name="description" class="col-md-3 description" rows="6"><?= $attr['description'] ?></textarea>
					</form>
				</div>
			</div>
		<?php		
			} ?>
		<div class="row">
			<form action="/notes/add_note/" method="post" class="form-group">
				<input type="text" name="title" class="form-control col-md-4" placeholder="Insert note title here...">
				<button class="btn btn-primary form-control col-md-4">Add Note</button>
			</form>
		</div>
	</div>
</body>
</html>