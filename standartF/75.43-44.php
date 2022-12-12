<?php
$str = 'html, <b>php</b>, js';
echo strip_tags($str);
echo '<br>';
echo '<br>';
echo strip_tags($str, '<b><i>');
?>