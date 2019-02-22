<?php

$pessoas = array();

array_push($pessoas, array(
    'Nome'=>'Tiago',
    'Idade'=>'25'
));

array_push($pessoas, array(
    'Nome'=>'Silvestre',
    'Idade'=>'20'
));

print_r($pessoas);
print_r($pessoas[0]);
print_r($pessoas[0]['Nome']);

?>