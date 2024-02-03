<?php

function trataNome($name) {
    if (!$name) {
        throw new Exception("Nenhum nome foi informado.", 1);
    }

    echo ucfirst($name)."<br>";
}

try { # tenta executar
    
    trataNome("joão");
    trataNome("");
}
catch (Exception $e) { # captura erro
 
    echo json_encode(array( # cria json para criar mensagem dinamica
        "message"=>$e->getMessage(),
        "line"=>$e->getLine(),
        "file"=>$e->getFile(),
        "code"=>$e->getCode(),
     ));

}
finally { # opcional / sempre executa por ultimo
    echo "<br>";
    echo "Executou o bloco try";
}

?>