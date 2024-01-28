<?php

function ola($texto, $periodo = "Bom dia") {    # define parametro obrigatorio / define valor padrao
    return "$periodo<br>Olá $texto!<br><br>";
}

function teste() {
    return func_get_args(); # exibe os parametros recebidos
}

echo ola("teste");
echo ola("João", "Boa noite");
echo ola("teste");

var_dump(teste("texto", 123));


?>