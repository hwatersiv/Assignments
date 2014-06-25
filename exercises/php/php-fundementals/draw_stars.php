<?php
$x = array(4, "Tom", 1, "Michael", 5, 7, "Jimmy Smith");

foreach ($x as $value) {
	if(is_int($value)){
		for ($i=0; $i < $value; $i++) { 
			echo "*";
		}
	}
	elseif(is_string($value)) {
		for ($i=0; $i < strlen($value); $i++) { 
			$first_char = strtolower($value[0]);
			echo "$first_char";
		}
	}
	echo "<br>";
}



?>