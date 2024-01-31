<?php

$conn = new PDO("sqlsrv:database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "root", ""); # tipo de conexao sql server

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY usu_login");

$stmt->execute(); 

$results = $stmt->fetchAll(PDO::FETCH_ASSOC); # verifica todos os registros / retorna somente os valores

foreach ($results as $row) {    #exibe nome de coluna e valor
    foreach ($row as $key => $value) {
        echo "<b>".$key."</b>: ".$value."<br>"; 
    }
    echo "=============================================<br>";
}


?>