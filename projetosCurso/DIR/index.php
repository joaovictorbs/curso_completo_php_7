<form method="POST" enctype="multipart/form-data">  <!-- dados binarios -->

    <input type="file" name="fileUpload">
    <br><br>
    <button type="submit">Send</button>

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $file = $_FILES["fileUpload"]; # pega arquivo do input

    if ($file["error"]) { # verifica se ocorreu algum erro no upload
        throw new Exception("Error: " . $file["error"]);
    }

    $dirUploads = "uploads";

    if (!is_dir($dirUploads)) { # verifica existencia do diretorio
        mkdir($dirUploads); 
    }

    if (move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"])) { # upload do arquivo / informa pasta temporaria e nome do arquivo
        echo "Upload realizado com sucesso!";
    } 
    else {
        throw new Exception("Não foi possível realizar o upload.");
    }

}

?>
