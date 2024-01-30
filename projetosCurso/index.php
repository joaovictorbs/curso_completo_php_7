<?php

interface Veiculo {
    public function acelerar($velocidade);
    public function frear($velocidade); 
    public function trocarMarcha($marcha); 
}

abstract class Automovel implements Veiculo { # define classe abstrata
    public function acelerar($velocidade)
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

class DelRey extends Automovel {
    public function empurrar() {

    }
}

$carro = new DelRey();
$carro->acelerar("200");
$carro = new Automovel(); # nao pode instanciar classe abstrata

?>