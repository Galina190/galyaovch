<?php
	$arr = [];
	$k=1;
	for ($i = 0; $i < 4; $i++) {
		for ($j = 0; $j < 2; $j++) {
			$arr[$i][$j] =$k;
            $k++; 
		}
	}

	var_dump($arr);
?>