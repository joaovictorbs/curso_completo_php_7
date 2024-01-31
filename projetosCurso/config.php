<?php

// cria autoload
spl_autoload_register(function($nameClass){ 
    $dirClass = "class"; # pasta
    $filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php"; # todo o caminho do arquivo

    if (file_exists($filename)) {
        require_once($filename);   
    }
});

?>