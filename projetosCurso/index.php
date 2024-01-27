<?php

$diaSemana = date("w");

switch ($diaSemana) {
    case 0:
        echo "Domingo";
        break;  #interrompe o switch
    
    case 1:
        echo "Segunda-Feira";
        break;
    
    case 2:
        echo "Terça-Feira";
        break;
    
    case 3:
        echo "Quarta-Feira";
        break;
    
    case 4:
        echo "Quinta-Feira";
        break;
    
    case 5:
        echo "Sexta-Feira";
        break;
    
    case 6:
        echo "Sábado";
        break;

    default:    #caso nao caia em nenhum caso, entra no default
        echo "Data inválida!";
        break;
}

?>
