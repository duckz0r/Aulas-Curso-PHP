<?php

class Pessoa {

    public $nome;

    public function falar(){

        return "O meu nome é " . $this->nome;
    }
}

$silvestre = new Pessoa();
$silvestre->nome = "Silvestre";
echo $silvestre->falar();

?>