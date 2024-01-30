<?php

echo date("d/m/Y H:i:s");

echo "<br><br>";

echo time();

echo "<br><br>";

$ts = strtotime("2001-09-11");
$now = strtotime("now");
$week = strtotime("+1 week");

echo date("l, d/m/Y", $ts);
echo "<br><br>";
echo date("l, d/m/Y", $now);
echo "<br><br>";
echo date("l, d/m/Y", $week);

?>