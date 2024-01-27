<?php

session_start(); #inicia sessao

$_SESSION["nome"] = "teste"; #define sessao e atribui valor 

echo $_SESSION["nome"];

session_unset();   #remove variavel de sessao
session_destroy();   #destroi variavel de sessao

echo $_SESSION["nome"];
?>