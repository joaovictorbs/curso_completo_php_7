<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$stmt = $conn->prepare("UPDATE tb_usuarios SET usu_login = :login, usu_senha = :password WHERE usu_id = :id");
$login      = 'Almir';
$password   = '0987654321';
$id         = 3;

$stmt->bindParam(":login", $login);
$stmt->bindParam(":password", $password);
$stmt->bindParam(":id", $id);

$stmt->execute();


?>