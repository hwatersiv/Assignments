<?php
  $a = array(1, 2, 5, 10, 255, 3);

  $sum = 0;

  for($i = 0; $i < count($a); $i++){
    $sum = $a[$i] + $sum;

  };
  echo $sum;

?>