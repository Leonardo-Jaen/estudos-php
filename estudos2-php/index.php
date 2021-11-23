<?php

use App\Models\Usuario;

use App\Models\Funcionario;

require_once('vendor/autoload.php');

$usuario = new Funcionario;

$usuario->setSenha('cindetesedussaototal');

echo $usuario->getSenha();