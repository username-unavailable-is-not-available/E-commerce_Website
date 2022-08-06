<?php

$servername = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'E-commerce_Website';

$connection = new mysqli($servername, $user, $pass, $dbname);

if ($connection->connect_error) {
    die("Connection Failed" . $connection->connect_error);
} else {
    $stmt = $connection->prepare("insert into userInfo(name, username, email, gender, password) values(?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $username, $email, $gender, $password);
    $stmt->execute();
    //header("Location: ../registration.html");
    $stmt->close();
    //$connection->close();
}
