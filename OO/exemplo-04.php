<?php

class Endereco {

    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($a, $b, $c){

        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
    }

    public function __destruct(){

        var_dump("DESTROI");
    }

    public function __toString(){

        return $this->logradouro . ", " . $this->numero . ", " . $this->cidade;
    }
}

$primeiroEndereco = new Endereco("Rua Meh", "123", "Porto");

echo $primeiroEndereco;

?>