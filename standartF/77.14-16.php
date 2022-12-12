<?php
$ng = mktime(0, 0, 0, 1, 1, date('Y') + 1);
$sec = $ng- time();
$days = floor($sec / (60*60*24));
echo "До нового года осталось: $days";
echo'<br>';
echo'<br>';
$date = date_create('2022-11-30');
date_modify($date, '-100 day');
echo date_format($date, 'd.m.Y');
?>