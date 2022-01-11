<?php

//Conexión a base de datos mediante PDO

    $host = 'localhost';
    $dbname = 'prueba_test';
    $username = 'root';
    $password = '';
    $dbh = new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $username, $password);

?>