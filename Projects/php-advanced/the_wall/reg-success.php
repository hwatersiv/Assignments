<?php 
session_start();
require_once("reg-connection.php");
date_default_timezone_set('UTC');
//var_dump($_SESSION);
//var_dump($_POST);
?>
<style>
	#header{
		border: 1px solid black;
	}
	h3{
		display: inline-block;
	}
	#header p{
		margin-left: 50%;
		text-align: right;
		display: inline-block;
	}
	a{
		display: inline-block;
		text-align: right;
	}
	.message{
		display: block;
		margin-top: 10px;
		margin-left: 10%;
	}
	.post{
		margin-left: 80%;
	}
	.comment{
		display: block;
	}
	h4{
		margin-bottom: 0px;
	}
	p{
		margin-top: 0px;
		margin-bottom: 30px;
	}
	
</style>
<div id="header">
	<h3>Coding Dojo Wall</h3>
	<p>Welcome <?= $_SESSION['first_name'] ?>!</p>
	<a href="register.php">Log Out</a>

</div>
<form action="wall.php" method="post">
<input type="hidden" name="action" value="message">
<textarea class="message" type="textarea" cols="60" row="200" name="message"></textarea>
<input class="post" type="submit" value="Post">
</form>
<?php 
	require_once("reg-connection.php");
	$q = "SELECT user.first_name, user.last_name, messages.message, messages.created_at, messages.id
		  FROM user
		  JOIN messages ON user.id = messages.user_id
		  ORDER BY created_at DESC";
		  
	$result = mysqli_query($connection, $q);

	while($row = mysqli_fetch_assoc($result))
	{
		echo "<h4>".$row['first_name']." ".$row['last_name']." ".date('F j, Y', strtotime($row['created_at']))."</h4><br>";
		echo "<p>".$row['message']."</p>";

		$cq = "SELECT comment, comments.user_id, comments.message_id, messages.id
		   FROM comments
		   JOIN messages ON comments.id = messages.id
		   WHERE messages.id = " . $row['id'];
		$cresult = mysqli_query($connection, $cq);
	
		while($c_row = mysqli_fetch_assoc($cresult))
		{
			//echo "<h6>".$row['first_name']." ".$row['last_name']." ".date('F j, Y', strtotime($row['created_at']))."<h6><br>";
			echo "<p class='comment'>".$c_row['comment']."<p>";
		}
?>

		<form action="wall.php" method="post">
		<input type="hidden" name="action" value="comment">
		<input type="hidden" name="message_id" value=<?= "{$row['id']}" ?>>
		<textarea class="comment" type='textarea' cols='50' rows='5' name='comment'></textarea>
		<input type="submit" value="Comment">
		</form>
<?php
	};
?>

