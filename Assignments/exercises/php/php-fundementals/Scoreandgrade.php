<?php

	for ($i=0; $i <= 100; $i++) { 
		$score = rand(50, 100);
		$grade = 0;

		if($score < 70){
			$grade = "D";
		}
		elseif ($score < 80) {
			$grade = "C";
		}
		elseif ($score < 90) {
			$grade = "B";
		}
		elseif ($score <= 100) {
			$grade = "A";
		}
		?>
	<h1>"Your score is <?= $score ?>/100"</h1>
	<h2>"Youre grade is <?= $grade ?>."</h2>
<?php }
?> 