<?php
	$arr = ['a', 'b', 'c', 'd', 'e'];
	$res = array_replace($arr, [0=>'!', 3=>
		'!!']); 
	var_dump($res);

?>