<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (usu_login, usu_senha) VALUES (:login, :password) "); # PDO reconhece parametros
$login = 'José';
$password = '1234567890';

$stmt->bindParam(":login", $login);
$stmt->bindParam(":password", $password);

$stmt->execute();

?>