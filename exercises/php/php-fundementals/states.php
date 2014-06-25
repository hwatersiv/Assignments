  
<?php
$states = array('CA', 'WA', 'VA', 'UT', 'AZ');
 	

echo "<select>";
 	foreach ($states as $value) {
?>

  <option value=<?=strtolower($value)?>><?=$value?></option>
<?php
}
echo "</select>";
?>

<?php
	$states = array('CA', 'WA', 'VA', 'UT', 'AZ');
	echo "<select>";
	for ($i=0; $i < count($states) ; $i++) { 

?>
<option value=<?=strtolower($states[$i])?>><?=$states[$i]?></option>

<?php
}
	echo "</select>";
?>

<?php
$states = array('CA', 'WA', 'VA', 'UT', 'AZ');
 	
array_push($states, 'NJ', 'NY', 'DE');
echo "<select>";

 	foreach ($states as $value) {
?>

  <option value=<?=strtolower($value)?>><?=$value?></option>
<?php
}
echo "</select>";
?>