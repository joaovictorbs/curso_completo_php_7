<?php

abstract class Animal {
    public function som() {
        return "Falar";
    }

    public function mover() {
        return "Anda";
    }
}

class cachorro extends Animal {
    public function som(){ # metodo de mesmo nome
        return "Late";
    }
}

class Gato extends Animal {
    public function som() {
        return "Mia";
    }
}

class Passaro extends Animal {
    public function som() {
        return "Canta";
    }
    
    public function mover() {
        return "Voa e " . parent::mover();  # se refere a classe pai
    }
}

$cachorro = new Cachorro();
$gato = new Gato();
$passaro = new Passaro();

echo $cachorro->som() . "<br>";
echo $cachorro->mover() . "<br>";
echo "------------------------------<br>";
echo $gato->som() . "<br>";
echo $gato->mover() . "<br>";
echo "------------------------------<br>";
echo $passaro->som() . "<br>";
echo $passaro->mover() . "<br>";
?>