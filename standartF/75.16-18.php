<?php
$str='31.12.2013';
echo str_replace('.', '-', $str);
echo '<br>';
echo '<br>';

echo str_replace(['a', 'b', 'c'], [1, 2, 3], 'abcabc');
echo '<br>';
echo '<br>';

$str='1a2b3c4b5d6e7f8g9h0';
echo str_replace([1,2,3,4,5,6,7,8,9,0], '', $str);
?>