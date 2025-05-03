<?php
$conn = new mysqli("localhost", "root", "", "toko_online");

$nama = $harga = $stok = "";
$err = $sukses = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nama = trim($_POST["nama"]);
    $harga = $_POST["harga"];
    $stok = $_POST["stok"];

    if (!is_numeric($id) || $id <= 0) {
        $err = "ID produk harus angka positif.";
    } elseif (empty($nama)) {
        $err = "Nama produk tidak boleh kosong.";
    } elseif (!is_numeric($harga) || $harga <= 0) {
        $err = "Harga harus berupa angka positif.";
    } elseif (!is_numeric($stok) || $stok < 0) {
        $err = "Stok harus berupa angka positif.";
    } else {
        $stmt = $conn->prepare("INSERT INTO produk (id_produk, nama_produk, harga, stok) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("isii", $id, $nama, $harga, $stok);
        if ($stmt->execute()) {
            $sukses = "Produk berhasil ditambahkan.";
            $id = $nama = $harga = $stok = ""; // reset field
        } else {
            $err = "Gagal menambahkan produk. Mungkin ID sudah digunakan.";
        }
    }
}

?>

<h2>Tambah Produk</h2>
<form method="post">
    ID Produk: <input type="text" name="id" value="<?= htmlspecialchars($id ?? '') ?>"><br>
    Nama Produk: <input type="text" name="nama" value="<?= htmlspecialchars($nama) ?>"><br>
    Harga: <input type="text" name="harga" value="<?= htmlspecialchars($harga) ?>"><br>
    Stok: <input type="text" name="stok" value="<?= htmlspecialchars($stok) ?>"><br>
    <button type="submit">Simpan</button>
</form>

<p style="color:green"><?= $sukses ?></p>
<p style="color:red"><?= $err ?></p>
<a href="index.php">Kembali ke Daftar Produk</a>