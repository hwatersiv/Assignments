<?php
  
  $users = array();
  $users['first_name'] = "Michael";
  $users['last_name'] = "Choi";
  
  echo "<thead>";
  echo "There are ".count($users)." keys in this array: ";
  foreach ($users as $key => $value) {
      echo "<td>".$key." </td>";    
  };
  echo "<br>";
  foreach ($users as $key => $value) {
    echo "<td> The value in the key ".$key." is ".$users[$key]."</td><br>";
  }
  echo "</thead>";
  
?>