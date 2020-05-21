<?php

$dsn = "mysql:host=localhost; dbname=var8";
$user = 'root';
$pass = '';
try {
    $dbh = new PDO($dsn,$user,$pass);
    $client = "SELECT seanse.start FROM seanse";
    $outs[] = array();
    unset($outs[0]);

    foreach ($dbh->query($client) as $row) {
        $outs[] .= $row['start'];
    }
} catch (PDOException $e) {
    echo "Ошибка";
}