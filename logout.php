<?php
// Memulai Session
session_start();
// Menghapus Session
session_unset();
// Menghapus semua session
session_destroy();
// redirect ke halaman login
header('location:login.php');
