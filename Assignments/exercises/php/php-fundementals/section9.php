<?php
  

  for ($i = 1; $i <= 2000 ; $i++) { 
    echo "Number is ".$i." ";
    if($i % 2 != 0){
      echo "This number is an odd number<br>";
    }
    elseif ($i % 2 == 0) {
      echo "This number is an even number<br>";
    }
  };
  
?>