<?php
$date = '2025-12-31';
echo date('d.m.Y', strtotime("$date +2 day"));
echo'<br>';
echo date('d.m.Y', strtotime("$date +1 month 3 days"));
echo'<br>';
echo date('d.m.Y', strtotime("$date +1 year"));
?>