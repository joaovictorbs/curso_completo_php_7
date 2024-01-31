<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$conn->beginTransaction(); # inicia transacao / é amarrada a conexao

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE usu_id = ?");

$id = 5;

$stmt->execute(array($id)); # vai identificando em sequencia pelo ?

// $conn->rollBack(); # interrompe a transacao
$conn->commit(); # confirma transacao

echo "Toda a transação ocorreu corretamente!"

?>