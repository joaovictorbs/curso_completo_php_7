<?php

require_once("config.php");

$usuario = new Usuario(); # metodo construtor aplica valores aos atributos

$usuario->loadById(7);  # recupera dados do usuario

$usuario->delete();

echo $usuario;
?>