<?php
$targetDir = "uploads/";

if (isset($_GET['file'])) {
    $file = basename($_GET['file']); // amankan nama file
    $filePath = $targetDir . $file;

    if (file_exists($filePath)) {
        if (unlink($filePath)) {
            echo "<p>File <strong>$file</strong> berhasil dihapus.</p>";
        } else {
            echo "<p>Gagal menghapus file.</p>";
        }
    } else {
        echo "<p>File tidak ditemukan.</p>";
    }
} else {
    echo "<p>Tidak ada file yang dipilih untuk dihapus.</p>";
}

// Kembali ke halaman utama
echo '<p><a href="file_upload.php">Kembali</a></p>';
?>