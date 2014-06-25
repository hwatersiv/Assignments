<?php 
session_start();
require_once("reg-connection.php");
var_dump($_SESSION);


if (isset($_SESSION['success']))
{ ?>
	<p><?= $_SESSION['success']['register'] ?></p>
	<?php
}?>

<div>
	<h1>Profile</h1>
<?php

$q = "SELECT * FROM register.user";

$result = mysqli_query($connection, $q); 

while($row = mysqli_fetch_assoc($result))
{ ?>
	<h3>Name: <?= $row['first_name'] ?> <?= $row['last_name'] ?></h3>
	<h3>Email: <?= $row['email'] ?></h3>
<?php
}?>
</div>