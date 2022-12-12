<?php
echo strlen('html css php');
echo '<br>';
echo '<br>';
$password='hjvgncdgbbvfgh';
$w=strlen($password);
if ($w > 5 and $w <10) {
	echo ('пароль подходит');
}
else{
	echo ('нужно придумать другой пароль');
}
?>