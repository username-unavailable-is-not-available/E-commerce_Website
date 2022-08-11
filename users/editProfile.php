<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="../assets/src/css/global.css" />
    <link rel="stylesheet" href="../assets/src/css/partials.css" />
    <link rel="stylesheet" href="../assets/src/css/table.css" />
</head>
<body>
    <?php include '../assets/src/partials/header.dashboard.php'; ?>
    <div>
        <div class="">
        <h3>EDIT PROFILE</h3>
            <form action="">
                <div class="">
                    <span>Name</span>
                    <input type="text" class="alpha">
                </div>
                <div class="">
                    <span>Email</span>
                    <input type="text" class="alpha">
                </div>
                <div class="">
                    <span>Gender</span><br><br>
                    <input type="radio" name="gender">Male
                    <input type="radio" name="gender">Female
                    <input type="radio" name="gender">Other
                </div>
                <div class="">
                    <span>Date of Birth</span>
                    <input type="date" class="alpha">
                </div><br><br>
                <div class="">
                    <input type="submit" name="submit">
                    <input type="reset" name="reset">
                </div>
            </form>
        </div>
    </div>

    <?php include '../assets/src/partials/footer.html'; ?>
</body>
</html>