
<?php


require_once('config.php');


$where = ['id' => 2];

$pdo->prepare("DELETE FROM usuarios WHERE id-:id")->execute($where);

echo "Excluido com sucesso!";