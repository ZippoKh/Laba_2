<?php


require_once '../connection.php';


$id = $_GET["id"];
$name = $_GET["name"];
$login = $_GET["login"];
$pass = $_GET["pass"];
$ip = $_GET["ip"];
$balance = $_GET["balance"];

if (!empty($id) && !empty($name) && !empty($login) && !empty($pass) && !empty($ip) && !empty($balance)){

    $sql = "INSERT INTO client(ID_Client, name, login, password, IP, balance) VALUES(:id,:name,:login,:pass,:ip,:balance)";
    $params = [':id' =>$id, ':name' =>$name, ':login' =>$login, ':pass' =>$pass, ':ip' =>$ip, ':balance' =>$balance];

    $stmt = $dbh->prepare($sql);
    $stmt->execute($params);

    echo 'Данный добавлены';
}else{
    echo 'Ошибка';
}