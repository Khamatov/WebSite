<?php

$db_host = "localhost"; 
$db_user = "root"; // Логин БД
$db_password = "root"; // Пароль БД
$db_base = 'mybase'; // Имя БД

$mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);


if ($mysqli->connect_error) {
    die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}

?>