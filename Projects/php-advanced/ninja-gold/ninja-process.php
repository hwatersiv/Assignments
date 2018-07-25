<?php
date_default_timezone_set('UTC');
session_start();

if (isset($_POST['reset']) && $_POST['reset'] == 'reset' )
{
	session_destroy();
}

if (!isset($_SESSION['gold_earned']))
{
	$_SESSION['gold_earned'] = 0;
}

if (!isset($_SESSION['activity']))
{
	$_SESSION['activity'] = '';
}

$earn_loss = "earned";

if(isset($_POST['building']) && $_POST['building'] == 'farm' )
{
	$gold = rand(10, 20);
	$_SESSION['gold_earned'] += $gold;
	var_dump($_SESSION['gold_earned']);
}
if(isset($_POST['building']) && $_POST['building'] == 'cave' )
{
	$gold = rand(5, 10);
	$_SESSION['gold_earned'] += $gold;
	var_dump($_SESSION['gold_earned']);
}
if(isset($_POST['building']) && $_POST['building'] == 'house' )
{
	$gold = rand(2, 5);
	$_SESSION['gold_earned'] += $gold;
	var_dump($_SESSION['gold_earned']);

}
if(isset($_POST['building']) && $_POST['building'] == 'casino' )
{
	$gold = rand(-50, 50);
	$_SESSION['gold_earned'] += $gold;
	if ($gold < 0)
	{
		$earn_loss = 'lost';
	}
}

$_SESSION['activity'] = "<p>You enter a ".$_POST['building']." and ".$earn_loss." ".abs($gold)." gold."." ".date('D, d M Y H:i:s', time())."</p>".$_SESSION['activity'];

header("Location: ninja-gold.php");
?>