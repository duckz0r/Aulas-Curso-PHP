<?php

require_once ("config.php");

echo session_save_path();

var_dump(session_status());
echo "<br>";

switch (session_status()) {
    case PHP_SESSION_DISABLED:
        echo "sessions unavalable";
        break;

    case PHP_SESSION_NONE:
        echo "no session";
        break;

    case PHP_SESSION_ACTIVE:
        echo "active session";
        break;
}

?>