<?php

  function multiply($arr, $factor){

    foreach ($arr as $value) {
      $value = $value * $factor;
      echo $value.", ";
    }
  }

  $A = array(2,4,10,16);

  $B = multiply($A, 5);  
  var_dump($B);
?>