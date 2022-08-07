<?php

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $select = mysqli_query($conn, "select * from userInfo where username='$username' and password='$password'");

    $row = mysqli_fetch_array($select);

    if (is_array($row)) {
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];
    } else {
        //echo '<script type="text/javascript">';
        //echo 'alert("INVALID")';
        //echo 'window.location.href = "login.html"';
        //echo '</script>';

        echo "???????";
    }
}

if (isset($_SESSION)) {
    //header("Location: login.php");
}
