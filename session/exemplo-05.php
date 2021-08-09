<?php

    require_once("config.php");

    echo session_save_path();
    echo "<br>";
    var_dump(session_status());
    echo "<br>";


    switch(session_status()){
        
        case PHP_SESSION_DISABLED:
            echo "As sessões estão desabilitades";
            break;
        case PHP_SESSION_NONE:
            echo "As sessões estão habilitadas mas não iniciada";
            break;
        case PHP_SESSION_ACTIVE:
            echo "As sessões estão habilitadas e uma sessão existe";
            break;

    }