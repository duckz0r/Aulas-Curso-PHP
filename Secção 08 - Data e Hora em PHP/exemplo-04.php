<?php

echo date_default_timezone_get() . "<br>";
date_default_timezone_set("Europe/Lisbon");

$dt = new DateTime();

$periodo = new DateInterval("P15D"); //define um periodo de 15 dias à data

echo $dt->format("d/m/Y H:i:s") . "<br>";

$dt->add($periodo); //adiciona o $periodo

echo $dt->format("d/m/Y H:i:s");

?>