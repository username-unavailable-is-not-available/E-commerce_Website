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
        <div class="myFormat">
            Username <input class="myINformat" type="text" name="username" id="username">
        </div>
        <div class="myFormat">
            Email <input class="myINformat" type="text" name="email" id="email">
        </div><br>
        <div>
            <input type="submit">
            <a href="login.php">Go Back</a>
        </div>
    </div>

    <?php include('../USER-ROLE/Manager/Partials/footer.php'); ?>
</body>
</html>