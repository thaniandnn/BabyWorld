<?php
include 'koneksi.php';

if (isset($_GET['id']) && isset($_SESSION['produk'][$_GET['id']])) {
    unset($_SESSION['produk'][$_GET['id']]);
}

header("Location: index.php");
exit;
?>
