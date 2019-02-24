<?php

namespace Cliente;

class Cadastro extends \Cadastro {

    public function registarVenda(){
        echo "Foi registada um venda ao cliente " . $this->getNome();
    }
}

?>