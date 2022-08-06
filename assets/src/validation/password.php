<?php
$currentpasswordError = $newpasswordError = $confirmpasswordError = "";
$currentpassword = $newpassword = $confirmpassword = "";

$currentpassword = "Abc!23";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["newpassword"])) {
        $newpasswordError = "Can not be empty";
    } else {
        $newpassword = $_POST["newpassword"];
        if ($newpassword == $currentpassword) {
            $newpasswordError = "Password can not be same as old password";
        } elseif (!preg_match("/\W/", $newpassword)) {
            $newpasswordError = "Should have atleast one special character";
        }
    }

    if (empty($_POST["confirmpassword"])) {
        $confirmpasswordError = "Can not be empty";
    } else {
        $confirmpassword = $_POST["confirmpassword"];
        if ($confirmpassword != $newpassword) {
            $confirmpasswordError = "Password did not match";
        }
    }
}