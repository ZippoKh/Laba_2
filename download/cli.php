<?php

$dsn = "mysql:host=localhost; dbname=var8";
$user = 'root';
$pass = '';
try {
    $dbh = new PDO($dsn,$user,$pass);
    $client = "SELECT client.name FROM client";
    $out[] = array();
    unset($out[0]);

    foreach ($dbh->query($client) as $row) {
        $out[] .= $row['name'];
    }
} catch (PDOException $e) {
    echo "Ошибка";
}