<?php

define("SERVIDOR", "127.0.0.1"); #nome e valor da constante
define("BANCO_DADOS", [
    '127.0.0.1',
    'root',
    'password',
    'teste'
]); #constante em array


echo SERVIDOR;
echo "<br>";
print_r(BANCO_DADOS);
echo "<br>";
echo(PHP_VERSION);  #constante padrão php
echo "<br>";
echo(DIRECTORY_SEPARATOR);  #barra /
?>