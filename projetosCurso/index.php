<?php

$meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];

foreach($meses as $mes) {  #para cada mes no array meses
    echo $mes . "<br>";
}

echo "<br><br>";

foreach($meses as $index => $mes) {  #indice do array
    echo "Indice " . $index . "<br>";
    echo "Mes " . $mes . "<br>";
}

echo "<br><br>";
?>

<form>

    <input type="text" name="nome">
    <input type="date" name="nascimento">
    <input type="submit" name="Ok">

</form>

<?php

if (isset($_GET)) {                         #se for um formulario muito grande, cria foreach
    foreach ($_GET as $key => $value) {
        echo "Nome do campo: " .$key;
        echo "<br>";
        echo "Valor do campo: " .$value;

        echo "<hr>";
    }
}
?>