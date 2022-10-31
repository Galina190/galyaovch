<style>
table {
    border-collapse: collapse;
}
th {
    border: 1px solid black;
    }
td {
    border: 1px solid black;
}
</style>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Имя</th>
            <th>Логин</th>
            <th>Возраст</th>
            <th>ID_группы</th>
        </tr>
    </thead>
<tabody>
<?php
	$host = 'db'; // имя хоста
	$user = 'root';      // имя пользователя
	$pass = '1234';          // пароль
	$name = 'test';      // имя базы данных
	
	$link = mysqli_connect($host, $user, $pass, $name);

    $query = 'SELECT `NAME`, `LOGIN`, `ID`, `AGE`, `ID_GRUP` FROM `Students`';
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
    while ($row =  mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>'.$row['ID'].'</td>';
        echo '<td>'.$row['NAME'].'</td>';
        echo '<td>'.$row['LOGIN'].'</td>';
        echo '<td>'.$row['AGE'].'</td>';
        echo '<td>'.$row['ID_GRUP'].'</td>';
        echo '</tr>'; 
    }
?>
</tabody>
</table>