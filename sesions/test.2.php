<?php
	session_start();
	if (isset($_SESSION['name']) && isset) {
		$_SESSION['counter'] = 1; 
	} else {
		$_SESSION['counter']++; 
	}
	echo $_SESSION['counter'];
?>
<a href="146.2.php">Инфо</a>
<from action="146.2.php" method ="GET">
    <input type="text" name="name" placeholder="Имя"><br>
    <input type="text" name="surname" placeholder="Фамилия"><br>
    <input type="subnit" name="" placeholder=""><br>