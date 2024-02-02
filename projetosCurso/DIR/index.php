<?php

$link = ""; # url de arquivo para download

$content = file_get_contents($link); # pega conteudo do arquivo

$parse = parse_url($link); # divide url em partes

$basename = basename($parse["path"]); # retorna componente final da url / retorna a url

$file = fopen($basename, "w+"); # cria copia do arquivo no servidor

fwrite($file, $content);

fclose($file);

?>

<img src="<?=$basename?>">