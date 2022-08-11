<!DOCTYPE html>
<html lang="en">

<head>
   
    <title>Change Password</title>
    <style>
        body {
            background-color: grey;
            padding-left: 25px;
            text-align: left;
        }

        .error {
            color: red;
        }

        div {
            text-align: right;

            width: 420px;
            padding: 10px;
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <?php
    // define variables and set to empty values
    $currentpasswordError = $newpasswordError = $confirmpasswordError = "";
    $currentpassword = $newpassword = $confirmpassword = "";

    $currentpassword = "";

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
    ?>

    <h2>CHANGE PASSWORD</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <div>
            Current Password : <input type="" name="currentpassword" value="<?php echo $currentpassword ?>"><br>
            <span style="font-size: 14px;" class="error"><?php echo $currentpasswordError; ?></span>
        </div>
        <div style="color: green">
            New Password : <input type="password" name="newpassword" value="<?php echo $newpassword ?>"><br>
            <span style="font-size: 14px;" class="error"><?php echo $newpasswordError; ?></span>
        </div>
        <div style="color: green">
            Retype New Password : <input type="password" name="confirmpassword" value="<?php echo $confirmpassword ?>"><br>
            <span style="font-size: 14px;" class="error"><?php echo $confirmpasswordError ?></span>
        </div><br>
        <div style="text-align: left"> <input type="submit" name="submit" value="submit"> <a href="http://localhost/E-commerce_Website/users/Settings.php">Go Back</a></div>
    </form>
</body>

</html>