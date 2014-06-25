<?php
session_start();

var_dump($_SESSION);

if(isset($_SESSION['counter'])) {
	$_SESSION = array();
}
header("Location: index.php");
?>

