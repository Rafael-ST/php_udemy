<?php

    session_id('gnpeg6t2t1fqkhrv9furan8qv4');

    require_once("config.php");

    session_regenerate_id();

    echo session_id();

    echo "<br>";

    var_dump($_SESSION);