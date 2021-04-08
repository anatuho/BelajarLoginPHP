<?php
session_start();
require_once('db_connect.php');
$database = new Database();

if (!isset($_SESSION['is_login'])) {
   header('location: login.php');
   die;
}
?>

<h1>Hello </h1>
<a href="logout.php">Logout</a>