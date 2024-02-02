<?php

$data = array(
    "empresa"=>"Teste Cookie"
);

setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

echo "OK";

echo  "<br><br>";

if (isset($_COOKIE["NOME_DO_COOKIE"])) { # recupera dados do cookie
    $obj = json_decode($_COOKIE["NOME_DO_COOKIE"]);

    echo $obj->empresa;
}

?>