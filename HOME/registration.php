
<?php include('../USER-ROLE/Manager/JSON/saveData.php'); ?>

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

    <form method="POST">
        <table class="table">
            <tr>
                <th>
                    Name
                    <span class="error"><?php echo $nameError ?></span>
                </th>
                <td>
                    <input type="text" name="name" id="name">
                </td>
            </tr>
            <tr>
                <th>
                    Email
                    <span class="error"><?php echo $emailError ?></span>
                </th>
                <td>
                    <input type="text" name="email" id="email">
                </td>
            </tr>
            <tr>
                <th>
                    Username
                    <span class="error"><?php echo $usernameError ?></span>
                </th>
                <td>
                    <input type="text" name="username" id="username">
                </td>
            </tr>
            <tr>
                <th>
                    Gender
                    <span class="error"><?php echo $genderError ?></span>
                </th>
                <td>
                    Male
                    <input type="radio" name="gender" id="gender" value="Male">

                    Female
                    <input type="radio" name="gender" id="gender" value="Female">

                    Other
                    <input type="radio" name="gender" id="gender" value="Other">
                </td>
            </tr>
            <tr>
                <th>
                    Password
                    <span class="error"><?php echo $passwordError ?></span>
                </th>
                <td>
                    <input type="text" name="password" id="password">
                </td>
            </tr>
            <tr>
                <th>
                    Confirm Password
                    <span class="error"><?php echo $rePassError ?></span>
                </th>
                <td>
                    <input type="text" name="rePass" id="rePass">
                </td>
            </tr>
        </table><br>

        <?php include('../USER-ROLE/Manager/JSON/showmsg.php'); ?>

        <div>
            <input type="submit" name="submit" />
            <input type="reset" name="reset" />            
        </div>
    </form>

    <?php include('../USER-ROLE/Manager/Partials/footer.php'); ?>
</body>

</html>