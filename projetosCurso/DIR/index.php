<?php

$cep = "01310100"; # CEP

$link = "viacep.com.br/ws/$cep/json/"; # consulta cep Via CEP

$ch = curl_init($link); # inicia sessao no cURL

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  # configura opções para sessão do cURL / transferencia e resposta
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  # verifica certificado SSL

$response = curl_exec($ch);

$data = json_decode($response, true); # transforma em array

print_r($data);

echo "<br><br>";

print_r($data['localidade']);

?>