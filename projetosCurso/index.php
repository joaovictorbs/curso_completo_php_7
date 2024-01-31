<?php

$conn = new mysqli("localhost", "root", "", "dbphp7"); # classe banco mysql / passa servidor, usuario, senha e banco

if ($conn->connect_error) { # verifica se ocorreu algum erro na conexao
    echo "Error " . $conn->connect_error;
} 

# INSERT DE TESTE
/*
$stmt = $conn->prepare("INSERT INTO tb_usuarios (usu_login, usu_senha) VALUES (?, ?)"); # prepara comando que queremos enviar no banco / ? é para receber os valores

$stmt->bind_param("ss", $login, $pass); # espera os tipos de dados do ? / s de string para o primeiro e segundo

$login  = "user";
$pass   = "12345";

$stmt->execute(); # realiza o comando 

$login  = "root";
$pass   = "testeSenha";

$stmt->execute(); # realiza outro insert
*/

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY usu_login"); # realiza comando direto no banco

$data = array();

// while ($row = $result->fetch_array()) { # retorna dados se existir / o while é enquanto tem resultado armazena em row
while ($row = $result->fetch_assoc()) { # assoc retorna somente os valores do array
    array_push($data, $row);   # array_push adiciona dados no array
}

echo json_encode($data); # transforma em JSON


?>