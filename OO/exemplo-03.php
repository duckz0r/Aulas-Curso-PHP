<?php

class Documento {

    private $numero;
    
    public function getNumero(){

        return $this->numero;
    }

    public function setNumero($numero){

        $resultado = Documento::validarNIF($numero);
        if($resultado === false){

            throw new Exception("NIF inválido");
        }
        $this->numero = $numero;
    }

    public static function validarNIF($nif){

        if(empty($nif)) {
            return false;
        }
     
        $nif = preg_match('/[0-9]/', $nif)?$nif:0;
    
        $nif = str_pad($nif, 11, '0', STR_PAD_LEFT);
         
        
        if (strlen($nif) != 11) {
            echo "length";
            return false;
        }
        
        else if ($nif == '00000000000' || 
            $nif == '11111111111' || 
            $nif == '22222222222' || 
            $nif == '33333333333' || 
            $nif == '44444444444' || 
            $nif == '55555555555' || 
            $nif == '66666666666' || 
            $nif == '77777777777' || 
            $nif == '88888888888' || 
            $nif == '99999999999') {
            return false;
    
         } else {   
             
            for ($t = 9; $t < 11; $t++) {
                 
                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $nif{$c} * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;
                if ($nif{$c} != $d) {
                    return false;
                }
            }
     
            return true;
        }
    }
}

/*
$nif = new Documento();

$nif->setNumero("1234567890");

var_dump($nif->getNumero());
*/

var_dump(Documento::validarNIF("1234567890"));

?>