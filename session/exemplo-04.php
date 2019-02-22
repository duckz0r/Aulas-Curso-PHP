<?php

session_id('10gsk1mngu3pvbr8mf95e0pp7ts');

require_once ("config.php");

echo session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>