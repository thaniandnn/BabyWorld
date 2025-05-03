<?php
$conn = new mysqli("localhost", "root", "", "toko_online");

$id = $_GET["id"];
$result = $conn->query("SELECT * FROM produk WHERE id_produk = $id");
$data = $result->fetch_assoc();

$err = $sukses = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = trim($_POST["nama"]);
    $harga = $_POST["harga"];
    $stok = $_POST["stok"];

    if (empty($nama)) {
        $err = "Nama produk tidak boleh kosong.";
    } elseif (!is_numeric($harga) || $harga <= 0) {
        $err = "Harga harus berupa angka positif.";
    } elseif (!is_numeric($stok) || $stok < 0) {
        $err = "Stok harus berupa angka positif.";
    } else {
        $stmt = $conn->prepare("UPDATE produk SET nama_produk=?, harga=?, stok=? WHERE id_produk=?");
        $stmt->bind_param("siii", $nama, $harga, $stok, $id);
        if ($stmt->execute()) {
            $sukses = "Data berhasil diperbarui.";
        } else {
            $err = "Gagal memperbarui data.";
        }
    }
}
?>

<h2>Edit Produk</h2>
<form method="post">
    Nama Produk: <input type="text" name="nama" value="<?= $data['nama_produk'] ?>"><br>
    Harga: <input type="number" name="harga" value="<?= $data['harga'] ?>"><br>
    Stok: <input type="number" name="stok" value="<?= $data['stok'] ?>"><br>
    <button type="submit">Update</button>
</form>
<p style="color:green"><?= $sukses ?></p>
<p style="color:red"><?= $err ?></p>
<a href="index.php">Kembali ke Daftar Produk</a>