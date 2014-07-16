<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Survey</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>
	<div class='container'>
		<div class='row'>
			<div class="form-group">
				<form action="/surveys/results" method="post">
					<input type="hidden" name="action" value="submit">
					<label>Your Name:</label>
					<input type="text" name="name">
					<label>Dojo Location:</label>
					<select name="location">
						<option value="mountain_view">Mountain View</option>
						<option value="seattle">Seattle</option>
					</select>
					<label>Language:</label>
					<select name="language">
						<option value="php">PHP</option>
						<option value="javascript">Javascript</option>
						<option value="python">Python</option>
						<option value="ruby">Ruby</option>
					</select>
					<label>Comment (optional):</label>
					<textarea name="comment" cols="30" rows="10"></textarea>
					<button class="btn btn-succeed" type="submit">Submit</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>