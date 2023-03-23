<?php

$nome = (int)$_GET["a"];      //variavel pre-definida | superglobais  | array de chaves
$idade = (int)$_GET["b"];

var_dump($nome); 
echo "<br />";
var_dump($idade); 
echo "<br />";

$ip = $_SERVER["REMOTE_ADDR"];        //captura IP
$script = $_SERVER["SCRIPT_NAME"];     // captura nome arquivo

echo $ip;
echo "<br />";
echo $script;

?>
