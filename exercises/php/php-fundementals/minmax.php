<?php

$sample = array( 135, 2.4, 2.67, 1.23, 332, 2, 1.02);

function get_max_and_min($sample){

	$max = null;
	$min = null;

	foreach ($sample as $value) {
		if($max == null){
			$max = $value;
		}
		elseif ($min == null) {
			$min = $value;
		}
		elseif($value > $max){
			$max = $value;
		}elseif ($value < $min) {
			$min = $value;
		};
	}
	$min_max = array('max' => $max, 'min' => $min);
	return $min_max;
}
$output = get_max_and_min($sample);
var_dump($output);

?>
