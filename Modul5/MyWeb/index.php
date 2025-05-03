<?php
$conn = new mysqli("localhost", "root", "", "toko_online");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM produk");
?>

<h2>Daftar Produk</h2>
<a href="tambah_produk.php">Tambah Produk</a>
<table border="1" cellpadding="10">
    <tr>
        <th>ID</th><th>Nama Produk</th><th>Harga</th><th>Stok</th><th>Aksi</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()) : ?>
    <tr>
        <td><?= $row['id_produk'] ?></td>
        <td><?= $row['nama_produk'] ?></td>
        <td><?= $row['harga'] ?></td>
        <td><?= $row['stok'] ?></td>
        <td>
            <a href="edit_produk.php?id=<?= $row['id_produk'] ?>">Edit</a> |
			<a href="hapus_produk.php?id=<?= $row['id_produk'] ?>"onclick="console.log(this.href); return confirm('Yakin ingin menghapus produk ini?')">Hapus</a>
    </tr>
    <?php endwhile; ?>
</table>
