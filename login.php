<?php
session_start();
require_once('db_connect.php');
$database = new Database();

if (isset($_SESSION['is_login'])) {
  header('location: home.php');
}

if (isset($_POST['tombol_login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  if ($database->login($username, $password)) {
    header('location: home.php');
  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="wrapper">
    <div class="title">
      Please Login</div>
    <form action="" method="post">
      <div class="field">
        <input type="text" name="username" required>
        <label>Username</label>
      </div>
      <div class="field">
        <input type="password" name="password" required>
        <label>Password</label>
      </div>
      <div class="field">
        <input type="submit" value="Login" name="tombol_login">
      </div>
      <div class="signup-link">
        Have an account? <a href="register.php">Register now</a></div>
    </form>
  </div>
</body>

</html>