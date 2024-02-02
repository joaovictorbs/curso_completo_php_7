<?php

require_once("config.php");

if (!is_dir("imagesTeste")) mkdir("imagesTeste");

foreach (scandir("imagesTeste") as $item) {
    if(!in_array($item, array(".", ".."))) {
        unlink("imagesTeste/" . $item);
    }
}

echo "Arquivos removidos com sucesso!";

?>