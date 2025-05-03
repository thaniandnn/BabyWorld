<?php
session_start();

// Inisialisasi array produk kalau belum ada
if (!isset($_SESSION['produk'])) {
    $_SESSION['produk'] = [];
}
?>
