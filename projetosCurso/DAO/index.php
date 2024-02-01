<?php

require_once("config.php"); # obtem arquivos de classes

$sql = new Sql(); # pega classe php

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);

?>