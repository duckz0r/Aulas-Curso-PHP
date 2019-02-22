<?php

$meses = array(
    "Janeiro", "Fevereiro", "Março", "Abril",
    "Maio", "Junho", "Julho", "Agosto",
    "Setembro", "Outrubro", "Novembro", "Dezembro"
);

foreach ($meses as $index => $mes) {
    
    echo "Indice: " . $index;
    echo "(O mês é: " . $mes . ")<br>";
}

?>