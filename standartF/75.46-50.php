<?php
echo ord('a').'<br>';
echo ord('b').'<br>';
echo ord('c').'<br>';
echo ord(' ');
echo '<br>';
echo '<br>';
echo chr(33);
echo '<br>';
echo '<br>';
$str = chr(rand(65,90));
echo $str;
echo '<br>';
echo '<br>';
$str = '';
$len = 7;
for ($i = 0; $i < $len; $i++)
	$str .= chr(rand(97,122));
echo $str;
?>