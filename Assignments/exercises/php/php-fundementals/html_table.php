<?php
	$name = array(
		array('first_name' => "Von", 'last_name' => "Waters"),
		array('first_name' => 'Michael', 'last_name' => 'Choi'),
		array('first_name' => 'John', 'last_name' => 'Supsupin'),
		array('first_name' => 'Mark', 'last_name' => 'Guillen'),
		array('first_name' => 'KB', 'last_name' => 'Tonel') 
	);
?>
<table>
	<thead>
		<tr>
			<td>User#</td>
			<td>First Name</td>
			<td>Last Name</td>
			<td>Full Name</td>
			<td>Full Name in Uppercase</td>
			<td>Length of Name</td>
		</tr>
	</thead>
	<tbody>
<?php 	for ($i=0; $i < count($name); $i++)
		{ ?>			
			<tr>
				<td><?= ($i + 1) ?></td>
				<td><?= $name[$i]['first_name']?></td>
				<td><?= $name[$i]['last_name']?></td>
				<td><?= $name[$i]['first_name']." ".$name[$i]['last_name']?></td>
				<td><?= strtoupper($name[$i]['first_name']." ".$name[$i]['last_name'])?></td>
				<td><?= strlen($name[$i]['first_name'].$name[$i]['last_name'])?></td>
			</tr>
<?php
		} ?>
	</tbody>
</table>