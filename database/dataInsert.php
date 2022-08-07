<?php

$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];

//$gender_map = ['male' => 'm', 'female' => 'f', 'other' => 'o'];
//$gender = $gender_map[$_POST['gender']];
$gender = $_POST['gender'];

$password = $_POST['password'];

require 'connect.php';
$connection->close();