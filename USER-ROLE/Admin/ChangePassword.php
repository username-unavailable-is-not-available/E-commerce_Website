<?php require('../Manager/Validation/changePass.php'); ?>
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
        <div style="text-align: left"> <input type="submit" name="submit" value="submit"> <a href="Dashboard.php">Go Back</a></div>
    </form>
</body>

</html>