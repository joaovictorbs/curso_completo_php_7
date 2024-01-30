<?php

interface Veiculo { # cria interface
    public function acelerar($velocidade); # precisa ter metodo acelerar 
    public function frear($velocidade); 
    public function trocarMarcha($marcha); 
}

class Civic implements Veiculo { # a classe precisa implementar a interface veiculo
    public function acelerar($velocidade) # o nome da variavel nao precisa ser o mesmo, somente o do metodo
    {
        echo "O veículo acelerou até ". $velocidade . " km/h";
    }
    
    public function frear($velocidade)
    {
        echo "O veículo freou até ". $velocidade . " km/h";
    }
    
    public function trocarMarcha($marcha)
    {
        echo "O veículo engatou para a marcha ". $marcha; 
    }
}

$carro = new Civic;
$carro->trocarMarcha("3");
?>