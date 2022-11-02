<?php
	$a = 190;
	$b = 3;
	$rest = $a % $b;
	
	if ($rest === 0) {
		echo 'делится на 3';
	} else {
		echo 'делится на 3 с остатком ' . $rest;
	}
?>