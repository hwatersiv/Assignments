<?php 
session_start();
require_once('connection.php');

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>fun</title>
</head>
<body>
	<?php 
		if(isset($_SESSION['error']))
		{
			foreach ($_SESSION['error'] as $message)
			{
				echo "<p>".$message."</p>";
			}
		}
		else if(isset($_SESSION['success']))
		{
			echo '<p>'.$_SESSION['success'].'</p>';
		}
	?>
	<form action="process.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="action" value="intrests">
		<div>
			<label for="color">What is tyour favorite color?</label>
			<input type="text" name="color" placeholder="put your color here">
		</div>
		<div>
			<label for="color">What is your favorite type of music?</label>
			<select name="music">
				<?php
				$query = "SELECT id, name FROM music";
				$result = mysqli_query($connection, $query);
				$row = mysqli_fetch_assoc($result);

				while($row = mysqli_fetch_assoc($result))
				{
				?>
					<option value="<?= $row['id']?>"><?= $row['name'] ?></option>
				<?php
				}
				?>
			</select>
		</div>
		<div>
			<label for="color">Choose File:</label>
			<input type="file" name="file">
		</div>
		<div>
			<input type="submit" value="submit">
		</div>
	</form>
</body>
</html>