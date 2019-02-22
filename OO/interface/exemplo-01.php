<?php

interface Veiculo {

    public function acelerar($velocidade);
    public function travar($velocidade);
    public function trocarMarcha($marcha);

}

class Civic implements Veiculo {

    public function acelerar($velocidade){
        echo "O veiculo acelerou até " . $velocidade . "km/h";
    }

    public function travar($velocidade){
        echo "O veiculo travou até " . $velocidade . "km/h";
    }

    public function trocarMarcha($marcha){
        echo "O veiculo mudou para " . $marcha . " mudança";
    }
}

$carro = new Civic();

$carro->trocarMarcha("terceira");

?>