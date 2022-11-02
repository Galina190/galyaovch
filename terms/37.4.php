<?php
$age = 29;
$age .='';
if ($age < 0 or $age > 99) {
    echo 'Ваше число либо меньше 0, либо больше 99';
} 
else {
    $a = $age[0]+$age[1];
    echo $a;
}
?>