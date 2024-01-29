<?php

function soma(int ...$valores):float {    # declara int / todos os parametros serao array e obtidos de uma vez so / declara retorno como stirng
    return array_sum($valores); # soma conteudo do array
}

echo soma(2, 2, 5);
echo "<br>";
echo soma(1, 4, 6);
echo "<br>";
echo soma(27, 80, 158);
echo "<br>";
var_dump(soma(27, 80, 158));
echo "<br>";

?>