<?php
//Настройки для подключения БД
$host = 'localhost';
$db = 'diy_store';
$username = "root";
$password = "1";
$charset = 'utf8mb4';

// Строка настроек для подключения к БД через PDO 
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

//массив доп.параметров
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

//Пробуем подключиться к БД - cоздаем объект PDO ("подключение")
try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Ошибка подключения: " . $e->getMessage());
}