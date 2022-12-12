<?php
echo strpos('abc abc abc', 'b');
echo '<br>';
echo '<br>';
echo strrpos('abc abc abc', 'b');
echo '<br>';
echo '<br>';
echo strpos('abc abc abc', 'b',3);
echo '<br>';
echo '<br>';
echo strpos('aaa aaa aaa aaa aaa', ' ', 4);
echo '<br>';
echo '<br>';
if(strrpos('http://code.mu/','http://')===0) 
	{echo '+';}
	else echo '-';
?>