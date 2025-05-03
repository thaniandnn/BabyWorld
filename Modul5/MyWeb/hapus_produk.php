<?php
include "koneksi.php";

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($id <= 0) {
    header("location:index.php?error_msg=ID produk tidak valid!");
    exit;
}

$sql = "DELETE FROM produk WHERE id_produk = $id";
mysqli_query($conn, $sql);

if (mysqli_affected_rows($conn) > 0) {
    header("location:index.php?success_msg=Produk berhasil dihapus.");
} else {
    header("location:index.php?error_msg=Gagal menghapus produk.");
}

mysqli_close($conn);
?>
