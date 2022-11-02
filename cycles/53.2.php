<?php
$arr = [1, 2, 3, -6,  4, 77, -8, 23];
$sum = 0;
foreach ($arr as $elem) {
    if ($elem > 0 ) {
            $sum += $elem;
            echo $sum;
    break;
}
}
?>