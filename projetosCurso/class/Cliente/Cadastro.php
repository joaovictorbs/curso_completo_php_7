<?php

# namespace da pasta Cliente
namespace Cliente;

#classe herda classe cadastro da raiz
class Cadastro extends \Cadastro {
    public function registraVenda() {
        echo "Foi registrada uma venda para o cliente ".$this->getNome();
    }
}

?>