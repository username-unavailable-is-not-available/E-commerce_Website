<?php
$error = $message = "";

if (isset($_POST["submit"])) {
    if (empty($_POST["name"])) {
        $error = "Name can not be empty";
    } else if (empty($_POST["email"])) {
        $error = "Email can not be empty";
    } else if (empty($_POST["username"])) {
        $error = "Username can not be empty";
    } else if (empty($_POST["gender"])) {
        $error = "Gender can not be empty";
    } else if (empty($_POST["password"])) {
        $error = "Password can not be empty";
    } else {
        if (file_exists('../../../DATA/Data/data.json')) {
            $current_data = file_get_contents('../../../DATA/Data/data.json');
            $array_data = json_decode($current_data, true);
            $new_data = array(
                "name"             => $_POST["name"],
                "email"           => $_POST["email"],
                "username"       => $_POST["username"],
                "gender"        => $_POST["gender"],
                "password"     => $_POST["password"]
            );
            $array_data[] = $new_data;
            $final_data = json_encode($array_data);
            if (file_put_contents('../../../DATA/Data/data.json', $final_data)) {
                $message = "Append Successfully";
            }
        } else {
            $error = 'JSON File does not exist';
        }
    }
}
