<?php

require_once("config.php");

$usuario = new Usuario;

# busca um usuarios
// $usuario->loadById(3);

# valida login
$usuario->login("user", "12345");

# busca lista de usuarios
$lista = Usuario::getList();

# busca lista de usuarios por login
$listaLogin = Usuario::search('user');


echo $usuario; # chama o toString
echo "<br><br>";
echo json_encode($lista); # retorna lista de usuarios
echo "<br><br>";
echo json_encode($listaLogin); # retorna lista de usuarios pelo login
?>