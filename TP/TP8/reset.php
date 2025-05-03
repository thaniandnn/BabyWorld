<?php
include 'koneksi.php';

unset($_SESSION['produk']);

header("Location: index.php");
exit;
?>
