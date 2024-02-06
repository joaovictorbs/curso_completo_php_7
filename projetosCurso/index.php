<?php

$id = (isset($_GET["id"])) ? $_GET["id"] : 1;

if (!is_numeric($id) || strlen($id) > 5) { # nao deve deixar passar mais informacoes que o ID
    exit("Somente valores numéricos");
}

$conn = mysqli_connect("localhost", "root", "", "teste"); # deve ser PDO

$sql = "SELECT * FROM tb_usuarios WHERE usu_id = $id";

$exec = mysqli_query($conn, $sql);

while ($resultado = mysqli_fetch_object($exec)) {
    var_dump($resultado);
}
?>
