<?php
	$arr = [];
	$k=1;
	for ($i = 0; $i < 2; $i++) {
		for ($j = 0; $j < 2; $j++) {
		for ($a = 0; $a < 2; $a++) {
			$arr[$i][$j][$a] =$k;
            $k++; 
		}
	}
}
	var_dump($arr);
?>