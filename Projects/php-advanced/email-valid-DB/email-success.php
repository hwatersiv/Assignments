<?php
session_start();
require_once("connection.php");

if(isset($_SESSION['success']))
{
	foreach ($_SESSION['success'] as $name => $message)
	{ ?>
		<p><?= $message ?></p>
	<?php
	}
}
?>

<h1>Email Addresses Entered</h1>
<?php 
	$query = "SELECT email_address, created_at, updated_at FROM emails.email";
	$result = mysqli_query($connection, $query);

	while($row = mysqli_fetch_assoc($result))
	{?>
		<p><?= $row['email_address'] ?>  <?= $row['created_at'] ?>  <?= $row['updated_at'] ?></p>
		<?php
	};
?>