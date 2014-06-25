<?php
session_start();

if(isset($_SESSION['success']))
{
	foreach ($_SESSION['success'] as $name => $message)
	{ ?>
		<p><?= $message ?></p>
	<?php
	}
}

?>