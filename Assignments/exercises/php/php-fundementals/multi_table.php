<style type="text/css">
	tr:nth-child(odd){
		background-color: grey;
	}
</style>

<table>
	<tbody>
		<tr class="bold">
<?php 
		for ($i=1; $i <= 9; $i++) 
		{ 
			for ($j=1; $j <= 9; $j++) 
			{ ?>
				<td><?= $i * $j ;?></td>
<?php		}
			?></tr><br />
<?php
		}?>
			
	</tbody>
</table>