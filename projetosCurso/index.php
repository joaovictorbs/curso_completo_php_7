<?php
//                              comentario de linha
/*                              comentario de blocos  */

$anoNascimento = 2002;          //camelCase
$nome = 'João';
$sobrenome = 'Claudio'; 
//$1nome = '';                  erro por conta do numero no inicio
$_nome = '';                    //underline é um caractere especial permitido
//$this                         variavel interna, nao pode ser usada para simples associacao

$nomeCompleto = $nome . " " . $sobrenome;       //usamos . para concatenacao 
echo $nomeCompleto;
echo "<br />";
// exit;                        paralisa execucao do php


$nomeFinal = 'Marcelo';
echo $nomeFinal;
echo "<br />";                  //quebra linha

// unset($nomeFinal, $nome1);   retira variavel da memoria

if (isset($nomeFinal)) {         //verifica se variavel existe
    echo $nomeFinal;
}

?>
