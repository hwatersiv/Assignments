<?php
  
  function print_lists($arr){
    echo "<ul>";
    foreach ($arr as $value) {
      echo "<li>".$value."</li>";
    }
    echo "</ul>";
  }

   $A = array(2,3,'hello');

   print_lists($A);
?>