<?php

// TIPOS BASICOS DE DADOS
$nome = "Silvestre";
$site = 'www.pop-addiction.com'; //STRING

$ano = 1993; //INT
$salario = 140.50; //FLOAT
$bloqueado = false; //BOOLEANO
//////////////////////////////////

// TIPOS COMPOSTOS DE DADOS
$frutas = array("abacaxi", "laranja", "manga"); //ARRAY

//echo $frutas[2];

$nascimento = new DateTime(); //OBJECTO

//var_dump($nascimento);
/////////////////////////////////

// TIPOS ESPECIAIS DE DADOS
$arquivo = fopen("exemplo-03.php", "r"); //RESOURCE
//var_dump($arquivo);

$nulo = null; //NULO
?>

