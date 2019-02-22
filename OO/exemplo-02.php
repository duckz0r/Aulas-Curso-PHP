<?php

class Carro {

    private $modelo;
    private $motor;
    private $ano;

    public function getModelo() {

        return $this->modelo;
    }

    public function setModelo($mod){

        $this->modelo = $mod;
    }

    public function getMotor():float {

        return $this->motor;
    }

    public function setMotor($mot){

        $this->motor = $mot;
    }

    public function getAno():int {

        return $this->ano;
    }

    public function setAno($a){

        $this->ano = $a;
    }

    public function mostrar(){

        return array(
            "Modelo"=>$this->getModelo(),
            "Motor"=>$this->getMotor(),
            "Ano"=>$this->getAno()
        );
    }
}

$gol = new Carro();
$gol->setModelo("Fiesta");
$gol->setMotor("1200");
$gol->setAno("1993");

var_dump($gol->mostrar());

?>