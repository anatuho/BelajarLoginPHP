<?php

class Database
{
   // Properti
   public $host = 'localhost',
      $user = 'root',
      $pass = '',
      $db = 'loginBiasa',
      $koneksi;
   // Akhir Properti

   public function __construct()
   {
      // Konek DB
      $this->koneksi = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
   }

   public function register($username, $password, $nama)
   {
      // method Register
      $insert = mysqli_query($this->koneksi, "INSERT INTO user VALUES ('','$username', '$password', '$nama')");
      return $insert;
   }

   public function login($username, $password)
   {
      // method login
      $query = mysqli_query($this->koneksi, "SELECT *  FROM user WHERE username = '$username'");
      $data_user = $query->fetch_array();
      if (password_verify($password, $data_user['password'])) {
         $_SESSION['username'] = $username;
         $_SESSION['is_login'] = true;
         return true;
      }
   }
}
