<?php

function test($callback) {
    //Processo lento

    $callback();
}

test(function(){    #anonima 
    echo "Terminou";
});

echo "<br><br>";

$fn = function($a){ #anonima
    var_dump($a);
};

$fn("Olá!");

?>