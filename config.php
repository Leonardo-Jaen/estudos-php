<?php

$host = 'mysql';
$dbname = 'teste_pdo';
$username = 'root';
$password = '123456';
$dsn = "mysql:host=$host;dbname=$dbname;";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_PERSISTENT => false,
    PDO::ATTR_EMULATE_PREPARES =>true,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

$pdo = new PDO($dsn, $username, $password, $options);