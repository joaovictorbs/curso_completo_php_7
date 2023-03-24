<?php

$nome = "Hcode";                    //operador de atribuicao | =

echo $nome . " mais alguma coisa";  //operador de string | .

$nome .= " Treinamento";            //operador composto | acrescenta informacao
echo "<br />";
echo $nome;
echo "<br />";



$valorTotal = 0;

$valorTotal += 100;                 //operador de atribuicao com adicao
$valorTotal -=  60;                 //operador de atribuicao com substracao
$valorTotal *= 80;                  //operador de atribuicao com multiplicacao 
$valorTotal /= 1;                   //operador de atribuicao com divisao
$valorTotal %= 9;                   //operador de atribuicao com modulos

echo $valorTotal; echo "<br />";

$a = 2;
$b = 14;
echo $a + $b; echo "<br />";
echo $a - $b; echo "<br />";
echo $a * $b; echo "<br />";
echo $a / $b; echo "<br />";
echo $a % $b; echo "<br />";
echo $a ** $b;                       //elevado ao quadrado

echo "<br />";

var_dump($a == $b); echo "<br />";   //operador de comparacao de valor
var_dump($a != $b); echo "<br />";   //operador de diferente
var_dump($a > $b); echo "<br />";    //operador de maior
var_dump($a < $b); echo "<br />";    //operador de menor
var_dump($a >= $b); echo "<br />";   //operador de maior ou igual
var_dump($a <= $b); echo "<br />";   //operador de menor ou igual


$t1 = 1;
$t2 = '1';
var_dump($t1 === $t2); echo "<br />";   //operador de comparacao de tipo | identicos
var_dump($t1 !== $t2); echo "<br />";   //operador de comparacao de tipo diferente



$c = 50;
$d = 35;

var_dump($c <=> $d);   //spaceship | se o primeiro for maior retorna 1, se for igual retorna 0 e se o primeiro for menor retorna -1
echo "<br />";



$e = NULL;
$f = NULL;
$g = 10;

echo $e ?? $f ?? $g;   //null-coalescing | se primeiro for nulo mostra o segundo, se segundo for nulo mostra terceeiro, ate encontrar um
echo "<br />";




$h = 10;

echo $h++; echo "<br />";                  //operador de pos-incremento | valor de $h e soma mais um depois
echo $h;
echo "<br />";


echo ++$h; echo "<br />";                  //operador de pré-incremento | valor de $h e soma mais um antes
echo $h;
echo "<br />";

//--

echo $h--; echo "<br />";                  //operador de pos-incremento | valor de $h e subtrai mais um depois
echo $h;
echo "<br />";


echo --$h; echo "<br />";                  //operador de pré-incremento | valor de $h e subtrai mais um antes
echo $h;
echo "<br />";






$resultado = (10 + 3) / 2;                   //regra matematica de prioridade
echo $resultado;
echo "<br />";


$resultado = (10 + 3) / 2 > 5 && 10 + 5 < 3;          //e maior que 5 e 10 + 5 e menor que 3 | retorna true ou falso
var_dump($resultado);
echo "<br />";

$resultado = (10 + 3) / 2 > 5 || 10 + 5 < 3;          //e maior que 5 ou 10 + 5 e menor que 3 | retorna true ou falso
var_dump($resultado);
echo "<br />";


?>
