<?php
$str = ' hfhjmg hhzaf ';
echo trim($str);
echo '<br>';
echo '<br>';
$str = '/php/';
echo trim($str, '/');
echo '<br>';
echo '<br>';
$str = 'слова слова слова.';
echo rtrim($str, '.').'.';
echo '<br>';
echo '<br>';
//36-37
$str = '12345';
echo strrev($str);
echo '<br>';
echo '<br>';
$str = 'level';
$eStr = ($str == strrev($str)) ? 'является' : 'не является';
echo $eStr;
?>