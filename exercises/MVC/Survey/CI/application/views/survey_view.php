<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Survey</title>
	<style>
		input{
			display: block;
		}
		select{
			display: block;
		}
		label{
			display: block;
		}
	</style>
</head>
<body>
	<div>
		<form action="surveys/submit_survey" method="post">
			<label for="name">Your Name:</label><input type="text" name="name">
			<label for="location">Dojo Location:</label><select name="location" id="">
				<option value="mountain_view">Mountain View</option>
				<option value="seattle">Seattle</option>
			</select>
			<label for="language">Favorite Language:</label><select name="language" id="">
				<option value="javascript">Javascript</option>
				<option value="ruby">Ruby</option>
				<option value="python">Python</option>
				<option value="php">PHP</option>
			</select>
			<label for="comment">Comments (optional):</label><textarea name="comment" id="" cols="30" rows="10"></textarea>
			<input type="submit" value="Submit">
		</form>
	</div>
</body>
</html>