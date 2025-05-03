<?php
include 'koneksi.php';

if (!isset($_GET['id']) || !isset($_SESSION['produk'][$_GET['id']])) {
    header("Location: index.php");
    exit;
}

$id = $_GET['id'];
$produk = $_SESSION['produk'][$id];

$errors = [];

if (isset($_POST['update'])) {
    $nama = trim($_POST['nama']);
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    if ($nama == '') $errors['nama'] = "Nama wajib diisi";
    if (!is_numeric($harga) || $harga <= 0) $errors['harga'] = "Harga harus angka positif";
    if (!is_numeric($stok) || $stok <= 0) $errors['stok'] = "Stok harus angka positif";

    if (empty($errors)) {
        $_SESSION['produk'][$id] = [
            'nama' => $nama,
            'kategori' => $kategori,
            'harga' => $harga,
            'stok' => $stok
        ];
        header("Location: index.php");
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Produk</title>
</head>
<body>

<h2>Edit Produk</h2>

<form method="post" action="">
    Nama Produk: <br>
    <input type="text" name="nama" value="<?= htmlspecialchars($produk['nama']) ?>"><br>
    <?= isset($errors['nama']) ? "<small style='color:red'>{$errors['nama']}</small><br>" : '' ?>

    Kategori: <br>
    <select name="kategori">
        <option value="Elektronik" <?= ($produk['kategori'] == 'Elektronik') ? 'selected' : '' ?>>Elektronik</option>
        <option value="Fashion" <?= ($produk['kategori'] == 'Fashion') ? 'selected' : '' ?>>Fashion</option>
        <option value="Rumah Tangga" <?= ($produk['kategori'] == 'Rumah Tangga') ? 'selected' : '' ?>>Rumah Tangga</option>
    </select><br><br>

    Harga: <br>
    <input type="text" name="harga" value="<?= htmlspecialchars($produk['harga']) ?>"><br>
    <?= isset($errors['harga']) ? "<small style='color:red'>{$errors['harga']}</small><br>" : '' ?>

    Stok: <br>
    <input type="text" name="stok" value="<?= htmlspecialchars($produk['stok']) ?>"><br>
    <?= isset($errors['stok']) ? "<small style='color:red'>{$errors['stok']}</small><br>" : '' ?>

    <br>
    <button type="submit" name="update">Simpan</button>
</form>

<br>
<a href="index.php">Kembali</a>

</body>
</html>
