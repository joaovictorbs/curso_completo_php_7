<?php

class Pessoa {
    public $nome = "Rasmus Lerdorf"; # publico
    protected $idade = 48; # protegido
    private $senha = "123456"; # privado

    public function verDados(){
        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";
    }
}

class Programador extends Pessoa {  # obtem atributos e metodos da classe pessoa
    public function verDados(){
        
        echo get_class($this) . "<br>"; # indica de qual classe está executando

        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";
    }
}

$objeto = new Pessoa();
$programador = new Programador();

$objeto->verDados(); # o metodo é publico
echo "<br>";
$programador->verDados() # nao herda o atributo senha

?>