<?php

$json = '[{"Nome":"Tiago","Idade":25},{"Nome":"Silvestre","Idade":20}]';

$data = json_decode($json, true);

var_dump($data);

?>