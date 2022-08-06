<?php

$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$password = $_POST['password'];

require 'connect.php';
$connection->close();