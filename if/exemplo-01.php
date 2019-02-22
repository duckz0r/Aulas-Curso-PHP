<?php

$qualASuaIdade = 70;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if($qualASuaIdade < $idadeCrianca){
    echo "Criança";
} else if ($qualASuaIdade > $idadeMelhor) {
    echo "Idoso";
} else {
    echo "Adulto";
}

?>