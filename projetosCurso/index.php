<?php

class Endereco {
    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($a, $b, $c) { # metodo construtor / quando chama a classe
        $this->logradouro   = $a;
        $this->numero       = $b;
        $this->cidade       = $c;
    }

    public function __destruct() # metodo desconstruir / quando remove a classe da memoria
    {
        var_dump("Chamou o desconstruir");
    }

    public function __toString()
    {
        return $this->logradouro.", ".$this->numero.", ".$this->cidade;
    }

    public function getLogradouro() {
        return $this->logradouro;
    }
    
    public function setLogradouro($logradouro) {
        $this->logradouro = $logradouro;
    }

    public function getNumero() {
        return $this->numero;
    }
    
    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function getCidade() {
        return $this->cidade;
    }
    
    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }
}

$meuEndereco = new Endereco("Rua Teste da Teste Teste", "123", "Teste");

var_dump($meuEndereco);
echo "<br><br>";
echo($meuEndereco);
echo "<br><br>";
unset($meuEndereco);


?>