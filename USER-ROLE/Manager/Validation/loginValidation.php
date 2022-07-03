<?php
$usernameError = $passwordError = "";
$username = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["username"])) {
        $usernameError = "User Name is required";
    } elseif (strlen($_POST["username"]) < 2) {
        $usernameError = "Username must be atleast 2 characters length";
    } else {
        $username = $_POST["username"];
        if (!preg_match("/^[a-zA-Z0-9-_ ]+$/", $username)) {
            $usernameError = "Special characters are not allowed";
        }
    }

    if (empty($_POST["password"])) {
        $passwordError = "Password is required";
    } elseif (strlen($_POST["password"]) < 8) {
        $passwordError = "Password must be 8 characters long";
    } else {
        $password = $_POST["password"];
        if (!preg_match("/\W/", $password)) {
            $passwordError = "Should have atleast one special character";
        }
    }
}
