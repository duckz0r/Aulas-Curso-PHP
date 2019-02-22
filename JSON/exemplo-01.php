<?php

$pessoas = array();

array_push($pessoas, array(
    'Nome'=>'Tiago',
    'Idade'=>25
));

array_push($pessoas, array(
    'Nome'=>'Silvestre',
    'Idade'=>20
));

echo json_encode($pessoas);

?>