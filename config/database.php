<?php

    $db_name = "mydb";
    $db_host = "my-mysql-php";
    $db_user = "root";
    $db_pass = "root";
    $db_port = "3306";

    try {
        $pdo = new \PDO(
            "mysql:host=".$db_host.";".
            "port=".$db_port.";".
            "dbname=".$db_name,
            $db_user,
            $db_pass
        );
        echo 'conectado';
    } catch (Exception $e) {
        print $e->getMessage() . "\n";
    }