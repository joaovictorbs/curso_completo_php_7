<?php

class Pessoa {

    public $nome; # atributo

    public function falar() { # metodo
        return "Meu nome é " . $this->nome; # acessa atributo dentro de classe
    }
}



$joao = new Pessoa;
$joao->nome = "João"; # associa nome a atributo que é publico
echo $joao->falar();

?>