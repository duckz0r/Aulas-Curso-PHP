<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Silvestre");
$cad->setEmail("1140948@isep.ipp.pt");
$cad->setPassword("pass");

$cad->registarVenda();

?>