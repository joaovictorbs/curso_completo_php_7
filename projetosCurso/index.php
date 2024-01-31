<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE usu_id = :id");
$id   = 2;

$stmt->bindParam(":id", $id);

$stmt->execute();

?>