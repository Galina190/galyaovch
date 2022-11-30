<?php
	$arr = [];
	$k=2;
	for ($i = 0; $i < 4; $i++) {
		for ($j = 0; $j < 3; $j++) {
			$arr[$i][$j] =$k;
            $k++; 
		}
	}

	var_dump($arr);
?>