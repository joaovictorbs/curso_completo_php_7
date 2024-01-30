<?php

$dt = new DateTime(); # instancia da classe

$periodo = new DateInterval("P15D"); # pega intervalo 15 dias

echo $dt->format("d/m/Y H:i:s"); # acessa metodo classe

$dt->add($periodo); # adiciona data / soma 15 dias 

echo "<br>";

echo $dt->format("d/m/Y H:i:s"); # acessa metodo classe

?>