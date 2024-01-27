<?php

$pessoas = [];
array_push($pessoas, array(
    'nome' => 'João',          #chave e valor
    'idade' => 21
));      #array push adiciona informacao a array

array_push($pessoas, array(
    'nome' => 'Eduardo',
    'idade' => 24
));

echo json_encode($pessoas); #transforma em JSON

echo "<br><br>";

$json = '[{"nome":"Jo\u00e3o","idade":21},{"nome":"Eduardo","idade":24}]';
$data = json_decode($json, true);   #transforma JSON em Array

var_dump($data);
?>