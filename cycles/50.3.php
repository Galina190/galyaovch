<?php
    $arr = [-1, -2, 3, 6, 7];
    $sum = 0;

    foreach($arr as $elem)
    if($elem > 0)
    $sum+= $elem;
    print($sum);
?>