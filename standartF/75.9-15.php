<?php
echo substr('html css php', 0, 4).'<br>'.substr('html css php', 5, 3).'<br>'.substr('html css php', 9);
echo '<br>';
echo '<br>';
echo substr('html css php', 0, 3).'<br>'.substr('html css php', -3, 3);
echo '<br>';
echo '<br>';
$str='html css php';
if (strlen($str) > 5){
echo substr($str, 0, 5).'...';
}
else
echo $str;
echo '<br>';
?>