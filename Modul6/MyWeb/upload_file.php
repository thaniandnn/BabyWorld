<!DOCTYPE html>
<html>
<head>
  <title>Upload File Gambar</title>
</head>
<body>
  <h3>Output</h3>

  <!-- Form Upload File Tunggal -->
  <form action="" method="POST" enctype="multipart/form-data" style="margin-bottom: 20px;">
    Pilih Gambar:
    <input type="file" name="file">
    <input type="submit" name="upload_single" value="Unggah">
  </form>

  <!-- Form Upload Banyak File -->
  <form action="" method="POST" enctype="multipart/form-data" style="margin-bottom: 20px;">
    Pilih File:
    <input type="file" name="multi_file[]" multiple>
    <input type="submit" name="upload_multi" value="Unggah">
  </form>

<?php
$targetDir = "uploads/";
$allowedTypes = ['image/jpeg', 'image/png'];

// Buat folder uploads jika belum ada
if (!is_dir($targetDir)) {
    mkdir($targetDir, 0755, true);
}

// ==== UPLOAD FILE TUNGGAL ====
if (isset($_POST['upload_single'])) {
    if ($_FILES['file']['error'] == 0) {
        $file = $_FILES['file'];
        if (in_array($file['type'], $allowedTypes)) {
            $targetFile = $targetDir . basename($file['name']);
            if (move_uploaded_file($file['tmp_name'], $targetFile)) {
                echo "<p>File berhasil diunggah: {$file['name']}</p>";
            } else {
                echo "<p>Gagal mengunggah file.</p>";
            }
        } else {
            echo "<p>Hanya file JPG dan PNG yang diperbolehkan.</p>";
        }
    } else {
        echo "<p>Silakan pilih file terlebih dahulu.</p>";
    }
}

// ==== UPLOAD MULTI FILE ====
if (isset($_POST['upload_multi'])) {
    $files = $_FILES['multi_file'];
    for ($i = 0; $i < count($files['name']); $i++) {
        $fileName = $files['name'][$i];
        $tmpName  = $files['tmp_name'][$i];
        $fileType = $files['type'][$i];

        if ($fileName == '') continue; // skip jika tidak ada file

        if (in_array($fileType, $allowedTypes)) {
            $targetFile = $targetDir . basename($fileName);
            if (move_uploaded_file($tmpName, $targetFile)) {
                echo "<p>Berhasil upload: $fileName</p>";
            } else {
                echo "<p>Gagal upload: $fileName</p>";
            }
        } else {
            echo "<p>Format tidak diizinkan: $fileName</p>";
        }
    }
}

// ==== TAMPILKAN DAFTAR FILE ====
$files = array_diff(scandir($targetDir), ['.', '..']);
if (count($files) == 0) {
    echo "<p>Belum ada file yang diunggah.</p>";
} else {
    echo "<ul>";
    foreach ($files as $f) {
        echo "<li><a href='$targetDir$f' target='_blank'>$f</a> - 
        <a href='hapus.php?file=$f' onclick='return confirm(\"Yakin ingin menghapus $f?\")'>Hapus</a></li>";
    }
    echo "</ul>";
}
?>
</body>
</html>