<?php

$name = "images";

if (!is_dir($name)) { # verifica se é diretorio
    mkdir($name); # cria diretorio
    echo "Diretório: '$name' criado com sucesso!";
}
else {
    rmdir($name); # remove diretorio
    echo "O diretório: '$name' já existe!";
}

$images = scandir($name); # escaneia diretorio
$data = array();

foreach ($images as $img) {
    if (!in_array($img, array(".", ".."))) { # se encontrar os pontos pula
        $filename = "images" . DIRECTORY_SEPARATOR . $img;
        
        $info = pathinfo($filename); # obtem informacoes do arquivo no diretorio

        $info["size"] = filesize($filename); # adiciona tamanho do arquivo em bytes
        
        $info["modified"] = date("d/m/Y H:i:s", filemtime($filename)); # data de modificacao
        
        $info["url"] = "http://localhost/DIR/".str_replace("\\", "/",$filename); # endereco

        array_push($data, $info);
    }
}

echo json_encode($data);



?>