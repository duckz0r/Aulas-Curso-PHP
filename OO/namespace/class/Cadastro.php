<?php

class Cadastro {

    private $nome;
    private $email;
    private $password;

    public function getNome():string{
        return $this->nome;
    }

    public function getEmail():string{
        return $this->email;
    }

    public function getPassword():string{
        return $this->password;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function setPassword($pass){
        $this->password = $pass;
    }

    public function __toString(){
        return json_encode(array(
            "Nome"=>$this->nome,
            "Email"=>$this->email,
            "Password"=>$this->password
        ));
    }

}

?>