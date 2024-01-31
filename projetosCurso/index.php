<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", ""); # identificamos o tipo de banco, nome do banco e o host

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