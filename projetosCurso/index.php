<?php

require_once("config.php");

# usa a classe cadastro dentro da pasta cliente
use Cliente\Cadastro;

$cad = new Cadastro;

$cad->setNome("João");
$cad->setEmail("joao@teste.com.br");
$cad->setSenha("123456");

$cad->registraVenda();

?>