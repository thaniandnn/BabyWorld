<?php
include 'koneksi.php';

// Menerima data pencarian
$cari = isset($_GET['cari']) ? strtolower(trim($_GET['cari'])) : '';
$filter_kategori = isset($_GET['filter_kategori']) ? $_GET['filter_kategori'] : '';

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Produk</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid black; padding: 8px; text-align: center; }
    </style>
</head>
<body>

<h2>Daftar Produk</h2>

<form method="get" action="">
    <input type="text" name="cari" placeholder="Cari nama produk" value="<?= htmlspecialchars($cari) ?>">
    <select name="filter_kategori">
        <option value="">Semua Kategori</option>
        <option value="Elektronik" <?= ($filter_kategori == 'Elektronik') ? 'selected' : '' ?>>Elektronik</option>
        <option value="Fashion" <?= ($filter_kategori == 'Fashion') ? 'selected' : '' ?>>Fashion</option>
        <option value="Rumah Tangga" <?= ($filter_kategori == 'Rumah Tangga') ? 'selected' : '' ?>>Rumah Tangga</option>
    </select>
    <button type="submit">Cari</button>
    <a href="index.php">Reset</a>
</form>

<br>
<a href="tambah.php">Tambah Produk</a> | 
<a href="reset.php" onclick="return confirm('Yakin mau reset semua produk?')">Reset Semua</a>

<table>
    <tr>
        <th>No</th>
        <th>Nama Produk</th>
        <th>Kategori</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>
    <?php
    $no = 1;
    $total_produk = 0;
    $total_stok = 0;
    $produk_filtered = [];

    foreach ($_SESSION['produk'] as $key => $produk) {
        if (($cari == '' || strpos(strtolower($produk['nama']), $cari) !== false) &&
            ($filter_kategori == '' || $produk['kategori'] == $filter_kategori)) {
            $produk_filtered[$key] = $produk;
        }
    }

    if (count($produk_filtered) > 0) {
        foreach ($produk_filtered as $key => $produk) {
            echo "<tr>
                    <td>{$no}</td>
                    <td>{$produk['nama']}</td>
                    <td>{$produk['kategori']}</td>
                    <td>Rp " . number_format($produk['harga'], 0, ',', '.') . "</td>
                    <td>{$produk['stok']}</td>
                    <td>
                        <a href='edit.php?id={$key}'>Edit</a> | 
                        <a href='hapus.php?id={$key}' onclick='return confirm(\"Yakin hapus produk?\")'>Hapus</a>
                    </td>
                  </tr>";
            $no++;
            $total_produk++;
            $total_stok += $produk['stok'];
        }
    } else {
        echo "<tr><td colspan='6'>Tidak ada produk ditemukan.</td></tr>";
    }
    ?>
</table>

<h3>Statistik</h3>
<p>Total Produk: <?= $total_produk ?></p>
<p>Total Stok: <?= $total_stok ?></p>

<?php
// Produk stok paling sedikit
if (!empty($_SESSION['produk'])) {
    $stok_terkecil = min(array_column($_SESSION['produk'], 'stok'));
    foreach ($_SESSION['produk'] as $produk) {
        if ($produk['stok'] == $stok_terkecil) {
            echo "<p>Produk Stok Paling Sedikit: {$produk['nama']} ({$produk['stok']} stok)</p>";
            break;
        }
    }
}
?>

</body>
</html>
