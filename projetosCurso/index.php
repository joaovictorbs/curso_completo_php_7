<?php

//include "../inc/index.php";       //como se fosse um arquivo em outra pasta 
//include "index.php";              //chamamos o arquivo que queremos utilizar a funcao
//include "index.php".$_GET[""];    //permite manipulacao de arquivo malicioso
//require "index.php";              //chamamos o arquivo que queremos utilizar a funcao || require verifica se arquivo existe e se funciona antes
//include_once "index.php";         //chama arquivo somente uma vez, evitando chamar duas vezes
require_once "index.php";           //verifica se nao esta chamando arquivos que ja tem um require sendo utilizado dentro dele, evitando chamar duas vezes

$resultado = somar(10, 20);         //chama funcao de outro arquivo para somar

echo $resultado;

?>