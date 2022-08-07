<?php 
//require 'session/sessionStart.php';

require 'database/connect.php';

if (isset($_POST['submit'])){
  session_start();

  if ($_POST['username'] == '' || $_POST['password'] == ''){
    echo '<script>';
    echo 'alert("Fields Can not be Empty!");'; 
    echo '</script>';
  } else {
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];

    header('Location: users/dashboard.html');
  }
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="assets/src/css/global.css" />
    <link rel="stylesheet" href="assets/src/css/table.css" />
  </head>
  <body>
    <h1>Login</h1>

    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
      <div class="container">
        <table>
          <tr>
            <th>Username</th>
            <td>
              <input type="text" name="username" />
            </td>
          </tr>
          <tr>
            <th>Password</th>
            <td>
              <input type="text" name="password" />
            </td>
          </tr>
        </table>
      </div>
      <div class="centerLink">
        <a href="forgotPass.html" class="link">Forgot Password?</a>
      </div>
      <div class="container">
        <button>
          <input type="submit" name="submit" value="Login" />
        </button>
      </div>
      <div class="centerLink">
        <p>
          Not Registered?
          <a class="link" href="registration.html">Sign up</a>
        </p>
      </div>
    </form>
  </body>

  </html>