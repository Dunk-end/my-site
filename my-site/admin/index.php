<?php

    require_once '../connect.php';

    $type = $_POST['type'];
    $login = trim($_POST['login']);

    $mysqli->query("UPDATE `users` SET `type` = '$type' WHERE `login` = '$login'");


?>

<form method="POST">
    <label for="login">
        <span>Имя пользователя</span>
        <input type="text" id="login" name="login" placeholder="Имя пользователя">
    </label>
    <label for="type">
        <span>Тип</span>
        <input type="number" min="0" max="1" id="type" name="type" placeholder="Тип пользователя">
    </label>
    <input type="submit" value="Изменить">
</form>

<a href="../admin.php">Назад</a>