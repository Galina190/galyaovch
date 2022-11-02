<?php
$arr = [1, 2, 3, 0,  4, 5, -8, 7];
    foreach ($arr as $elem) {
                if ($elem == 0) {
                        echo 'есть';
                        break;
                }
        }
?>