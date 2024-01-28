<?php

function ola() {    # retorna string
    return "Olá mundo!<br>";
}

echo ola();
$frase = ola();
echo strlen($frase);

echo "<br>";

function salario() {
    return 946.00;
}

echo "José recebeu 3 salários: ".number_format(salario() * 3, 2, ',', '.');

?>