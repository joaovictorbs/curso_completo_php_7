<?php

function exception_handler($exception) {
    echo json_encode(array(
        "code" => $exception->getCode(),
        "message" => $exception->getMessage(),
        "file" => $exception->getFile(),
        "line" => $exception->getLine()
    ));
}

set_exception_handler("exception_handler");

// Tentativa de dividir por zero
echo 100 / 0;

error_reporting(E_ALL & ~E_NOTICE); # mensagens de erro que podem aparecer ou não / mostra erros e nao mostra noticias

$nome = $_GET["nome"];

echo $nome;

?>