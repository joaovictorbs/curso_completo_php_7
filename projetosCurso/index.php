<?php

$nome = "João";             //string
$nome = 'Roberto';
$ano = 1990;                //int
$salario = 5500.80;         //float
$bloqueado = false;         //boolean

//=============

$frutas = array('banana', 'abacaxi', 19, 7.80, true);   //array
echo $frutas[1];                                        //abacaxi
echo "<br />";

$nascimento = new DateTime();                           //objeto
var_dump($nascimento);
echo "<br />";

//=============

$arquivo = fopen("index.php", "r");     //file open, abre arquivo e apenas lê
var_dump($arquivo);
echo "<br />";

$nulo = null;                           //nulo

?>
