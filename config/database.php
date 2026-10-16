<?php
$host = 'localhost';
$db   = 'mvc_mystore';
$user = 'root';
$pass = '';

$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

$pdo = new PDO($dsn, $user, $pass);
$pdo->setAttribute(
    PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION
);