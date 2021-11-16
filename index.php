<?php


require_once('config.php');


$usuarios = $pdio->query('SELECT FROM usuarios')->fetchALL();

var_dump($usuarios);