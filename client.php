<?php

$dsn = "mysql:host=localhost; dbname=var8";
$user = 'root';
$pass = '';
try {
    $dbh = new PDO($dsn,$user,$pass);

    $client = $_GET["client"];


    $cars = "SELECT seanse.* FROM seanse , client WHERE seanse.FID_Client = client.ID_Client AND client.name = '". $client ."'";

    foreach ($dbh->query($cars) as $row) {
        echo 'Start:' . '&nbsp;' . $row['start'] . '&nbsp;' .'</br>';
        echo 'Stop:' . '&nbsp;' . $row['stop'] . '&nbsp;' .'</br>';
        echo 'In_Traffic:' . '&nbsp;' . $row['in_trafic'] . '&nbsp;' .'</br>';
        echo 'Out_Traffic:' . '&nbsp;' . $row['out_trafic'] . '&nbsp;' .'</br>';
    }
} catch (PDOException $e) {
    echo "Ошибка";
}