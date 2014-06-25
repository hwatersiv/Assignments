<style type="text/css">
	div{
		width: 80px;
		height: 80px;
		display: inline-block;
	}

	.color1{
		background-color: black;
	}

	.color2{
		background-color: red;
	}
</style>

<?php
	for($i=0; $i < 8; $i++)
	{ 	
		for ($j=0; $j < 8; $j++) 
		{ 	if (($j + $i)% 2 != 0) { ?>
				<div class="color1"></div>
<?php		}elseif (($j + $i)% 2 == 0) { ?>
				<div class="color2"></div>
<?php		}
		} ?>
	<br />
<?php
	} ?>