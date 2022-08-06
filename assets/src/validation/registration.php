<?php
$name = $email = $dob = $gender = "";
$nameError = $emailError = $dobError = $genderError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameError = "Cannot be empty";
    } else {
        $name = $_POST["name"];
        if (!preg_match("/^[a-zA-Z ]+$/", $name)) {
            $nameError = "Only letters and periods are allowed";
        } elseif (!preg_match("/(\w+\s\w+)/", $name)) {
            $nameError = "Must be two words long";
        } else {
            if (!preg_match("/^[\pL]/", $name)) {
                $nameError = "Must start with a letter";
            }
        }
    }

    /*if (empty($_POST["username"]) == "POST") {
        $usernameError = "Cannot be empty";
    } else {
        $username = $_POST['username'];
        if (!preg_match("/^[a-zA-z]+$", $username)) {
            $usernameError = "";
        }
    }*/

    if (empty($_POST["email"])) {
        $emailError = "Cannot be empty";
    } else {
        $email = $_POST["email"];
        if (!preg_match("/(\w+)@(\w+){3,}.com/", $email)) {
            $emailError = "Is not valid";
        }
    }

    if (empty($_POST["dob"])) {
        $dobError = "Cannot be empty";
    } else {
        //$dob = $_POST["dob"];
        if (strtotime("1998-12-31") > $_POST["dob"] && strtotime("1953-01-01") < $_POST["dob"]) {
            $dob = $_POST["dob"];
        } else {
            $dobError = "Out of range";
        }
    }

    if (empty($_POST["gender"])) {
        $genderError = "Gender is required";
    } else {
        $gender = $_POST["gender"];
    }
}
