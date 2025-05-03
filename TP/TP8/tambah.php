<?php
include 'koneksi.php';

$errors = [];

if (isset($_POST['tambah'])) {
    $nama = trim($_POST['nama']);
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    if ($nama == '') $errors['nama'] = "Nama wajib diisi";
    if (!is_numeric($harga) || $harga <= 0) $errors['harga'] = "Harga harus angka positif";
    if (!is_numeric($stok) || $stok <= 0) $errors['stok'] = "Stok harus angka positif";

    if (empty($errors)) {
        $_SESSION['produk'][] = [
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
    <title>Tambah Produk</title>
</head>
<body>

<h2>Tambah Produk Baru</h2>

<form method="post" action="">
    Nama Produk: <br>
    <input type="text" name="nama" value="<?= isset($nama) ? htmlspecialchars($nama) : '' ?>"><br>
    <?= isset($errors['nama']) ? "<small style='color:red'>{$errors['nama']}</small><br>" : '' ?>

    Kategori: <br>
    <select name="kategori">
        <option value="Elektronik">Elektronik</option>
        <option value="Fashion">Fashion</option>
        <option value="Rumah Tangga">Rumah Tangga</option>
    </select><br><br>

    Harga: <br>
    <input type="text" name="harga" value="<?= isset($harga) ? htmlspecialchars($harga) : '' ?>"><br>
    <?= isset($errors['harga']) ? "<small style='color:red'>{$errors['harga']}</small><br>" : '' ?>

    Stok: <br>
    <input type="text" name="stok" value="<?= isset($stok) ? htmlspecialchars($stok) : '' ?>"><br>
    <?= isset($errors['stok']) ? "<small style='color:red'>{$errors['stok']}</small><br>" : '' ?>

    <br>
    <button type="submit" name="tambah">Tambah</button>
</form>

<br>
<a href="index.php">Kembali</a>

</body>
</html>
