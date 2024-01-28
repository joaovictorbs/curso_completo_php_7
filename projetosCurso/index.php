<?php

session_id('7u0d01a1n81s2sneu893nvhust'); # define id de sessao fixo

session_start();

echo session_id(); # funcao id de sessao

echo "<br>";

session_regenerate_id(); # gera um novo id de sessao

echo session_id();
?>