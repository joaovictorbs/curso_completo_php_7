<?php

$frutas = array("laranja", "abacaxi", "melancia");

print_r($frutas);   #exibe array em sua estrutura

echo "<br><br>";


$carros[0][0] = "GM";           #todos na posicao 0 sao GM
$carros[0][1] = "Cobalt";
$carros[0][2] = "Onix";
$carros[0][3] = "Camaro";

$carros[1][0] = "Ford";         #todos na posicao 1 sao Ford
$carros[1][1] = "Fiesta";
$carros[1][2] = "Fusion";
$carros[1][3] = "EcoSport";

echo $carros[0][3];
echo "<br>";
echo end($carros[1]);   #o ultimo dessa posicao

echo "<br><br>";


$pessoas = [];
array_push($pessoas, array(
    'nome' => 'João',          #chave e valor
    'idade' => 21
));      #array push adiciona informacao a array

array_push($pessoas, array(
    'nome' => 'Eduardo',
    'idade' => 24
));

print_r($pessoas[0]['nome']);
?>