<?php

define('SECRET_IV', pack('a16', 'senha')); # define constante / converte string em 16 bits
define('SECRET', pack('a16', 'senha'));

$data = [
    "nome"=>"Joao"
];

$openssl = openssl_encrypt( # criptografa
    json_encode($data),
    'AES-128-CBC',
    SECRET,
    0,
    SECRET_IV
);

echo $openssl."<br>";

$string = openssl_decrypt($openssl, 'AES-128-CBC', SECRET, 0, SECRET_IV); # descriptografa

var_dump(json_decode($string, true));

?>
