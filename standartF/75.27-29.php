<?php
$date = 'html css php';
$arr = explode(' ', $date);
var_dump($arr);
echo '<br>';
echo '<br>';
$arr = ['html', 'css', 'php'];
echo implode(',', $arr);
echo '<br>';
echo '<br>';
$date = '2022-11-18';
$arr = explode('-', $date);
echo $arr[2].'.'.$arr[1].'.'.$arr[0];
echo '<br>';
echo '<br>';
//30-32
$str = '1234567890';

$arr = str_split($str, 2);
var_dump($arr);
echo '<br>';
echo '<br>';
$arr = str_split($str, 1);
var_dump($arr);
echo '<br>';
echo '<br>';
$arr = str_split($str, 2);
echo implode('-', $arr);
?>