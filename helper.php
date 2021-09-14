<?php

    define ('HOST', 'localhost');
    define ('USER', 'root');
    define ('PASS', '');
    define ('DB', 'film_list');

    $db_connect = mysqli_connect(HOST, USER, PASS, DB) or die ('Unable to connect');

    header('Content-Type: application/json');

?>