<?php

function incluirClasses($nomeClasse) {
    if (file_exists($nomeClasse . ".php") === true) { # verifica se o arquivo existe
        require_once($nomeClasse . ".php");
    }
    
}

spl_autoload_register('incluirClasses'); # funcao autoload, recebe nome da classe chamada
spl_autoload_register(function($nomeClasse) {
    if (file_exists("abstracts" . DIRECTORY_SEPARATOR . $nomeClasse . ".php") === true) {
        require_once("abstracts" . DIRECTORY_SEPARATOR . $nomeClasse . ".php");
    }
});

$carro = new DelRey();
$carro->acelerar(80);

?>