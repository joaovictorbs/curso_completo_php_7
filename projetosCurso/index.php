<?php

$a = 10;

function trocaValor($a) {
    $a += 50;

    return $a;
}

echo $a. "<br>";
echo trocaValor($a). "<br>";
echo $a. "<br>"; # o que acontece na funcao fica na funcao, o nome da variavel não significa que é a mesma da funcao

echo "<br><br>";

$b = 10;

function trocaValorReferencia(&$b) { # parametro por referencia
    $b += 50;

    return $b;
}

echo $b. "<br>";
echo trocaValorReferencia($b). "<br>";
echo $b. "<br>"; # o valor altera pois passou o valor por referencia
echo trocaValorReferencia($b). "<br>";
echo $b. "<br>"; 

echo "<br><br>";

$pessoa = ['nome' => 'João', 'idade' => 20];

foreach ($pessoa as &$value) {  # o valor passa por referencia
    if (gettype($value) === 'integer') $value += 10;    # gettype verifica tipo do valor
    echo $value. "<br>";
}

?>