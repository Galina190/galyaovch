<?php
	$a = 10;
	$b = 3;
	$rest = $a % $b;
	
	if ($rest === 0) {
		echo 'чётное число';
	} else {
		echo 'делится с остатком ' . $rest;
	}
?>