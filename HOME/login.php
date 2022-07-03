<?php require('../USER-ROLE/Manager/Validation/loginValidation.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../USER-ROLE/Manager/Styles/style.css">
</head>
<body>
    <?php include('../USER-ROLE/Manager/Partials/header.php'); ?>

    <div>
    <h2>LOGIN</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <div class="myFormat">
            Username <input class="myINformat" type="text" name="username" value="<?php echo $username; ?>"><br>
            <span style="font-size: 14px;" class="error"><?php echo $usernameError; ?></span>
        </div>
        <div class="myFormat">
            Password <input class="myINformat" type="password" name="password" value="<?php echo $password; ?>"><br>
            <span style="font-size: 14px;" class="error"><?php echo $passwordError; ?></span>
        </div>
        <div class="others">
            <input type="checkbox" value="XYZ">
            <span>Remember Me</span>
        </div><br>
        <div class="others"> <input type="submit" name="submit" id="submit"> <a href="forgotPassword.php">Forgot Password?</a></div>
    </form>
    </div>

    <?php include('../USER-ROLE/Manager/Partials/footer.php'); ?>
</body>
</html>