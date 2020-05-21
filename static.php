<?php
header('Content-Type: text/xml');
header("Cache-Control: no-cache, must-revalidate");

$dsn = "mysql:host=localhost; dbname=var8";
$user = 'root';
$pass = '';
try {
    $dbh = new PDO($dsn, $user, $pass);

    $start = $_GET["start"];
    $stop = $_GET["stop"];

    $date = "SELECT client.* FROM seanse,client WHERE client.ID_Client = seanse.FID_Client and seanse.start = '". $start ."' and seanse.stop = '". $stop ."'";
    echo '<?xml version="1.0" encoding="utf8" ?>';
    echo "<root>";
    foreach ($dbh->query($date) as $row) {
        echo '<name>'. $row['name'] .'</name>';
    }
    echo "</root>";
} catch (PDOException $e) {
    echo "Ошибка";
}