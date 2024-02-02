<?php

$filename = "usuarios.csv";

if(file_exists($filename)) { # verifica existencia do arquivo
    $file = fopen($filename, "r"); # informa leitura
  
    $headers = explode(",", fgets($file)); # captura linha por linha
  
    $data = array();

    while ($row = fgets($file)) { # verifica se existem mais linhas
        
        $rowData = explode(",", $row);
        $linha = array();

        for ($i = 0; $i < count($headers); $i++) { # verifica cada coluna do header
            $linha[$headers[$i]] = $rowData[$i]; # busca pelo valor associando a chave que é o header
        }
        
        array_push($data, $linha); # array chave e valor

    }

    fclose($file);

    echo json_encode($data);
}


$filename = "images/teste.png";

$base64 = base64_encode(file_get_contents($filename)); # pega informacao do arquivo e codifica em base64

$fileinfo = new finfo(FILEINFO_MIME_TYPE); # recupera tipo de arquivo

$mimetype = $fileinfo->file($filename);

$base64encode = "data:" . $mimetype . ";base64," . $base64;

?>
<br><br>
<a href="<?=$base64encode?>" target="_blank"> Link Para Imagem </a>
<br><br>
<img src="<?=$base64encode?>">
<br><br>