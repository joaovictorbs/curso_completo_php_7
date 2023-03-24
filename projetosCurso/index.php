<?php

$nome = "Glaucio";
$idade = 29;

function teste() {  //comeco escopo funcao
    global $idade;
    echo $nome;
    echo $idade;
}                   //fim escopo funcao

function teste2() {

    $nome = "João";

    echo "<br />";
    echo $nome." agora no teste2. ";
}

teste();
teste2();
?>
