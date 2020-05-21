<?php

$dsn = "mysql:host=localhost; dbname=var8";
$user = 'root';
$pass = '';
try {
    $dbh = new PDO($dsn,$user,$pass);
    $client = "SELECT client.balance FROM client WHERE client.balance < 0";
    $balance[] = array();
    unset($balance[0]);

    foreach ($dbh->query($client) as $row) {
        $balance[] .= $row['balance'];
    }
} catch (PDOException $e) {
    echo "Ошибка";
}