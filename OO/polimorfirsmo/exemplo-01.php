<?php

abstract class Animal {

    public function falar(){
        return "Som";
    }

    public function mover(){
        return "Anda";
    }
}

class Cao extends Animal {

    public function falar(){
        return "Late";
    }
}

class Gato extends Animal {

    public function falar(){
        return "Mia";
    }
}

class Passaro extends Animal {

    public function falar(){
        return "Canta";
    }

    public function mover(){
        return "Voa e " . parent::mover();
    }
}

$gato = new Gato();
echo $gato->falar() . "<br>";
echo $gato->mover() . "<br>";
echo "<hr>";

$pluto = new Cao();
echo $pluto->falar() . "<br>";
echo $pluto->mover() . "<br>";
echo "<hr>";

$tweety = new Passaro();
echo $tweety->falar() . "<br>";
echo $tweety->mover() . "<br>";
?>