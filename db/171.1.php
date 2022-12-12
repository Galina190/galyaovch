<style>
    table {
        border-collapse: collapse;
    }
    th {
        border: 1px solid black;
        text-align: center;
        padding: 10px;
        background-color: #CCCCCC;
    }
    td {
        border: 1px solid black;
        text-align: center;
    }
    tbody>tr:nth-child(odd) {
        background-color: #CCCCFF;
    }
    tbody>tr:nth-child(even) {
        background-color: #CCCCFF;
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

    if (!empty($_POST)) {
        $name = $_POST['name'];
        $login = $_POST['login'];
        $age = $_POST['age'];
        $id_group = $_POST['id_group'];
        $query = sprintf("INSERT INTO `students` (`Name`,`Login`,`Age`, `ID_Group`)VALUES ('%s','%s',%d,%d)", $name,$login,$age,$id_group);
        mysqli_query($link, $query) or die(mysqli_error($link));
    }

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
<br>
<form action="test.php" method="POST">
    <input type="text" name="name" placeholder="Имя"><br>
    <input type="text" name="login" placeholder="Логин"><br>
    <input type="text" name="age" placeholder="Возраст"><br>
    <input type="text" name="id_group" placeholder="№ группы"><br>
    
    <select name="group">
        <?php
            $query = 'SELECT `ID`,`Name` FROM `groups`';
            $result = mysqli_query($link, $query) or die(mysqli_error($link));
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<option>'.$row['Name'].'</option>';
            }
        ?>
    </select><br>
    <input type="submit">
</form>
