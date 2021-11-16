<?php


require_once('config.php');


$usuarios = $pdo->query('SELECT * FROM usuarios')->fetchALL();

var_dump($usuarios);