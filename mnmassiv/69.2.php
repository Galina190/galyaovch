<?php
$arr = $arr = [[1, 2], [3, 4], [5, 6]];
$i=0;
$ii=0;
$s=0;
if ($i != 3){
	$s += $arr[$i][$ii];
	$i++;}
	if ($ii != 3){
		$s += $arr[$i][$ii];
	$ii++;
}
echo $s;
?>
