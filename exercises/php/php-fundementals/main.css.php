<?php
 header('Content-type: text/css');
function randclr(){
	$rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
	$color = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];
	return $color;
}
?>

h1{

	color: <?= randclr(); ?>;
}

p{

	color: <?= randclr(); ?>;
}