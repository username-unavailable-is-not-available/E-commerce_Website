<?php require('../Validation/changePass.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Styles/style.css">
</head>

<body>
    <h2>CHANGE PASSWORD</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <div class="myFormat">
            Current Password <input class="myINformat" type="password" name="currentpassword" value="<?php echo $currentpassword ?>"><br>
            <span style="font-size: 14px;" class="error"><?php echo $currentpasswordError; ?></span>
        </div>
        <div class="myFormat">
            New Password <input class="myINformat" type="password" name="newpassword" value="<?php echo $newpassword ?>"><br>
            <span style="font-size: 14px;" class="error"><?php echo $newpasswordError; ?></span>
        </div>
        <div class="myFormat">
            Retype New Password <input class="myINformat" type="password" name="confirmpassword" value="<?php echo $confirmpassword ?>"><br>
            <span style="font-size: 14px;" class="error"><?php echo $confirmpasswordError ?></span>
        </div><br>
        <div> 
            <input type="submit" name="submit" value="submit">
            <a href="../settings.php">Go Back</a>
        </div>
    </form>
</body>

</html>