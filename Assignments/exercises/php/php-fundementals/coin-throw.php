

	Starting the program
<?php
	$heads = 0;
	$tails = 0;
	$readout = 0;

	for ($i=0; $i <= 5000 ; $i++) { 
		$num = rand(0, 1);
		if($num == 0){
			$readout = "head!";
			$heads++;
		}
		else{
			$readout = "tail";
			$tails++;
		}
		?>
		Attempt #<?= $i ?>: Throwing a coin... It's a <?= $readout ?> ... Got <?= $heads ?> head(s) so far and <?= $tails ?> tail(s) so far<br>
<?php
	};
?> Ending the program