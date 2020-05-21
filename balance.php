<?php
header('Content-Type: application/json');

$dsn = "mysql:host=localhost; dbname=var8";
$user = 'root';
$pass = '';
try {
    $dbh = new PDO($dsn, $user, $pass);

    $bal = $_GET["balance"];

    $balances = "SELECT client.* FROM client WHERE client.balance = '". $bal ."'";

    $test = '';
    foreach ($dbh->query($balances) as $row) {
        $test = $row['name'];
    }
    echo json_encode($test);
} catch (PDOException $e) {
    echo "Ошибка";
}