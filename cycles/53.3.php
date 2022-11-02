<?php
$arr = [1, 2, 3, -6,  4, 77, -8, 23];
$sum = 0;
foreach ($arr as $key => $elem) {
    if ($elem == 3 ) {
            $sum += $elem;
            echo $key;
    break;
}
}
?>