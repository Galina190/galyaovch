<?php
echo str_shuffle($str);
echo '<br>';
echo '<br>';
$str = 'abcdefghiklmnopqrstvxyz';
$s = str_shuffle($str);
echo substr($s, 0, 6);
?>