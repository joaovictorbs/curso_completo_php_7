<?php

for ($i = 0; $i <= 10; $i++) { #declara valor de $i, informa a condição de repeticao e informa o incremento
    echo $i . "<br>";
}

echo "<br><br>";

for ($i = 0; $i <= 1000; $i+=5) { #vai somando 5
    
    if ($i > 200 && $i < 800) continue; #entre 200 e 800 pula / caso if tenha somente uma instrucao, nao precisa do {}


    if ($i === 900) break; #valida valor e tipo de valor

    echo $i . "<br>";
}

echo "<br><br>";

echo "<select>";

for ($i=date("Y"); $i > date("Y")-100; $i--) {
    echo '<option value="'.$i.'">'.$i.'</option>';
}

echo "</select>"

?>
