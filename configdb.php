<?php
$host = "localhost"; 
$user = "root";      // username database
$pass = "";          // password database (kosongin kalau di XAMPP)
$db   = "db_babyworld"; // ganti dengan nama database kamu

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
