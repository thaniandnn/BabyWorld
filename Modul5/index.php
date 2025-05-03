<?php
include 'functions.php';
$produk = getProduk();

$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
$kategori = isset($_GET['kategori']) ? $_GET['kategori'] : '';
$produkFiltered = cariProduk($keyword, $kategori);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1 class="my-4">Manajemen Produk</h1>

    <!-- Form Pencarian & Filter -->
    <form class="row mb-4" method="get">
        <div class="col-md-3">
            <input type="text" class="form-control" name="keyword" value="<?= $keyword ?>" placeholder="Cari Produk">
        </div>
        <div class="col-md-3">
            <select name="kategori" class="form-control">
                <option value="">Semua Kategori</option>
                <option value="Elektronik" <?= $kategori == 'Elektronik' ? 'selected' : '' ?>>Elektronik</option>
                <option value="Fashion" <?= $kategori == 'Fashion' ? 'selected' : '' ?>>Fashion</option>
                <option value="Rumah Tangga" <?= $kategori == 'Rumah Tangga' ? 'selected' : '' ?>>Rumah Tangga</option>
            </select>
        </div>
        <div class="col-md-3">
            <button type="submit" class="btn btn-primary">Cari</button>
        </div>
    </form>

    <!-- Tabel Produk -->
    <table class=abel Produk -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produkFiltered as $index => $p): ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= $p['nama'] ?></td>
                    <td><?= $p['kategori'] ?></td>
                    <td>Rp <?= number_format($p['harga'], 0, ',', '.') ?></td>
                    <td><?= $p['stok'] ?></td>
                    <td>
                        <a href="edit.php?id=<?= $p['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="delete.php?id=<?= $p['id'] ?>" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Tambah Produk -->
    <a href="tambah.php" class="btn btn-success">Tambah Produk</a>
    <a href="reset.php" class="btn btn-danger">Reset Semua Data</a>
</div>

</body>
</html>
