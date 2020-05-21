<?php

$dsn = "mysql:host=localhost; dbname=var8";
$user = 'root';
$pass = '';
try {
    $dbh = new PDO($dsn,$user,$pass);
    $client = "SELECT seanse.stop FROM seanse";
    $outstop[] = array();
    unset($outstop[0]);

    foreach ($dbh->query($client) as $row) {
        $outstop[] .= $row['stop'];
    }
} catch (PDOException $e) {
    echo "Ошибка";
}