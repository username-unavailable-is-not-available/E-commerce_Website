<?php 

session_start();

if ($_SERVER['QUERY_STRING'] == 'noname'){
  session_unset();
}

$username = $_SESSION['username'];

?>

<div>
  <header class="partBox">
    <h1>
      <a href="http://localhost/E-commerce_Website/users/dashboard.html" class="partLink">
        <span><?php echo $username; ?></span>
      </a>
    </h1>

    <div class="">
      <a class="link" href="http://localhost/E-commerce_Website/login.php">Logout</a>
    </div>
  </header>
</div>
<br />