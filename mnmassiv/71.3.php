<?php
	$arr = [];
	
	for ($i = 0; $i < 3; $i++) {
		for ($j = 0; $j < 5; $j++) {
		for ($a = 0; $a < 5; $a++) {
			$arr[$i][$j] = $j + 1; 
		}
	}
    }	
	var_dump($arr);
?>