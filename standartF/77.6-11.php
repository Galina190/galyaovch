<?php
echo date('Y-m-d H:i:s');
echo'<br>';
echo'<br>';
echo date('Y-m-d');
echo'<br>';
echo date('d.m.Y');
echo'<br>';
echo date('d.m.y H:i:s');
echo'<br>';
echo'<br>';
echo date('d.m.Y', mktime(0, 0, 0, 2, 12, 2025));
echo'<br>';
echo'<br>';
$week =['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'];
$day = date('w');
echo $week[$day].'<br>';
$day1 = date('w', mktime(0, 0, 0, 6, 6, 2006));
echo $week[$day1];
echo'<br>';
echo'<br>';
$months = array('', 'Янв', 'Фев', 'Мар', 'Апр', 'Май', 'Июн', 'Июл', 'Авг', 'Сен', 'Окт', 'Нов', 'Дек');
$m = date('n');
echo $months[$m];
echo'<br>';
echo'<br>';
echo date('t');
?>