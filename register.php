<?php
require_once('db_connect.php');
$database = new Database();

if (isset($_POST['tombol_register'])) {
  $username = $_POST['username'];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
  $nama = $_POST['nama'];

  if ($database->register($username, $password, $nama)) {
    header('Location:login.php');
  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Register</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="wrapper">
    <div class="title">
      Create an Account</div>
    <form action="" method="post">
      <div class="field">
        <input type="text" name="username" required>
        <label>Username</label>
      </div>
      <div class="field">
        <input type="text" name="nama" required>
        <label>Nama</label>
      </div>
      <div class="field">
        <input type="password" name="password" required>
        <label>Password</label>
      </div>
      <div class="field">
        <input type="submit" value="Register" name="tombol_register">
      </div>
      <div class="signup-link">
        Have an account? <a href="login.php">Login now</a></div>
    </form>
  </div>
</body>

</html>