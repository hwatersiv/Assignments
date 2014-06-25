<?php 
session_start();
//var_dump($_SESSION);
var_dump($_POST);


if(isset($_POST['action']) && $_POST['action'] == "message")
{
	post_message($_POST);
}
if(isset($_POST['action']) && $_POST['action'] == "comment")
{
	post_comment($_POST);
}

//-------------------------- Post a message --------------------------------------------
function post_message($post)
{
	require_once("reg-connection.php");
	if (empty($post['message']))
	{
		$_SESSION['error']['message'] = "You cannot post a blank message.";
	}
	if(!empty($post['message']))
	{
		//$query = "SELECT * FROM messages";
		$query = "INSERT INTO messages (message, user_id, created_at, updated_at) VALUES('{$post['message']}', '{$_SESSION['user_id']}', NOW(), NOW())";
		$result = mysqli_query($connection, $query);

		//header("Location: reg-success.php");
	}
}

//-------------------------  Post a comment  ---------------------------------------------
function post_comment($post)
{
	require_once("reg-connection.php");
	if(empty($post['comment']))
	{
		$_SESSION['error']['comment'] = "You cannot post a blank comment.";
	}
	if(!empty($post['comment']))
	{
		$query = "INSERT INTO comments (comment, message_id, user_id, created_at, updated_at) VALUES('{$post['comment']}','{$post['message_id']}','{$_SESSION['user_id']}', NOW(), NOW())";
		mysqli_query($connection, $query);

		

	}
}
?>