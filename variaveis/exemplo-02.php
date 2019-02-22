<?php

/* DADOS BÁSICOS
int, string, float, boolean
*/

$anoNascimento = 1993;

$nome = "Tiago";
$sobrenome = "Silvestre";

$nomeCompleto = $nome. " " . $sobrenome;

echo $nomeCompleto;

exit;

echo "<br/>";

//unset($nomeCompleto);

if(isset($nomeCompleto)){
    echo $nomeCompleto;
}


?>

