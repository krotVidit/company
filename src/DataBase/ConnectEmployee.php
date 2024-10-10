<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dataBase = "company";
$tabl = "employee";

$mysql = new mysqli($serverName, $userName, $password, $dataBase);
$mysql->query("SET NAMES utf8");

if ($mysql->connect_error) {
    die("Ошибка подключения к базе данных: " . $mysql->connect_error);
}
echo "Подключение удалось";