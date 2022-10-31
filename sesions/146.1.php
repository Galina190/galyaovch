<?php
	session_start();
	$_SESSION['test1'] = 6;
    $_SESSION['test2'] = 2;

    echo $_SESSION['test1'] .'+'. $_SESSION['test2'];
?>