<?php

require_once("config.php");


/* Cria novo arquivo
$file = fopen("log.txt", "w+"); # cria arquivo / caminho | vai ser write e criar arquivo novo
$file = fopen("log.txt", "a+"); # adiciona informacao ao arquivo

fwrite($file, date("Y-m-d H:i:s") . "\r\n"); # escreve no arquivo

fclose($file); # fecha manipulador

echo "Arquivo criado com sucesso!";
*/

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY usu_login");

$headers = array();

foreach ($usuarios[0] as $key => $value) {
    array_push($headers, ucfirst($key));    # colunas para csv
}

$file = fopen("usuarios.csv", "w+");

fwrite($file, implode(",", $headers) . "\r\n"); # cabecalho

foreach ($usuarios as $row) {
    $data = array();

    foreach ($row as $key => $value) {
        array_push($data, $value);
    } // End foreach de coluna

    fwrite($file, implode(",", $data) . "\r\n"); # dados das colunas
} // End foreach de linha


fclose($file);

?>