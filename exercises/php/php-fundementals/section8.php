<?php
  
  $x = array();

  for ($i = 1; $i <= 200000 ; $i++) { 
    if($i % 2 != 0){
      array_push($x, $i);
    }
  };
  
  var_dump($x);
?>