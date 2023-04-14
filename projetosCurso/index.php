<?php

$qualSuaIdade = 30;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if($qualSuaIdade < $idadeCrianca){       // se for true
    echo "Criança";
}
elseif($qualSuaIdade < $idadeMaior) {    // se a primeira regra nao for true                       
    echo "Adolescente";
}
elseif($qualSuaIdade < $idadeMelhor){
    echo "Adulto";
}
else {                                   // se nao for true
    echo "Idoso";
}

echo "<br>";

echo ($qualSuaIdade < $idadeMaior) ? "Menor de Idade" : "Maior de Idade"; //operador ternario

?>
