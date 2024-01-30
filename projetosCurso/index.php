<?php

class Carro {

    private $modelo; # atributo privado
    
    private $motor;
    
    private $ano;

    public function getModelo() { # recupera atributo modelo
        return $this->modelo;
    }
    
    public function setModelo($modelo) { # define informacao atributo modelo
        $this->modelo = $modelo;
    }

    public function getMotor():float { # define tipo float
        return $this->motor;
    }
    
    public function setMotor($motor) {
        $this->motor = $motor;
    }

    public function getAno():int { #define tipo int
        return $this->ano;
    }
    
    public function setAno($ano) {
        $this->ano = $ano;
    }



    public function exibe() { # metodo que retorna array de informacoes
        return [
                "modelo"=>$this->getModelo(), 
                "motor"=>$this->getMotor(),
                "ano"=>$this->getAno()
            ];
    }
}



$uno = new Carro;
$uno->setModelo("Fiat"); # associa dado ao atributo pelo metodo, já que o atributo é privado
$uno->setMotor(1.0);
$uno->setAno(1983);

var_dump($uno->exibe());

?>