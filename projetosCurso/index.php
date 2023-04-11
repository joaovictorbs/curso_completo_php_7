<?php

$nome = "Hcode";
$nome2 = 'Treinamentoos';

echo "ABC $nome"; echo "<br>";
echo 'ABC $nome'; echo "<br>";


$nome = "JOAO barbosa";
echo strtoupper($nome);echo "<br>"; //funcao que deixa strings em maisculo
echo strtolower($nome);echo "<br>"; //funcao que deixa strings em minusculo

echo ucfirst($nome);echo "<br>";    //deixa primeira letra de cada palavra maiscula
echo ucwords($nome);echo "<br>";    //deixa somente a primeira palavra em maiscula


$empresa = "Hcode";
$empresa = str_replace("o", "0", $empresa);  //troca uma informacao por outra | informamos o que queremos trocar, pelo que, e qual variável
$empresa = str_replace("e", "3", $empresa);  
echo $empresa;echo "<br>";


$frase = "A repetição é a mãe da retenção";
$palavra = "mãe";
$q = strpos($frase, "mãe");                 //buscamos o indice de uma informacao dentro da variavel 
var_dump($q);

echo "<br>";

$texto = substr($frase, 0, $q);             //comeca a capturar informacao a partir de determinado indice
var_dump($texto);

echo "<br>";

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));
var_dump($texto2);

?>
