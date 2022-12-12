<?php
echo time();
echo'<br>';
echo'<br>';
echo mktime(0,0 , 0, 03, 1, 2025);
echo'<br>';
echo'<br>';
echo mktime(0, 0, 0, 12, 31);
echo'<br>';
echo'<br>';
echo (time()-mktime(13, 12, 59, 3, 15, 2000));
?>