<?php

include "dtMahasiswa.php";

$arrProdi = [
    "SI" => "D3 Sistem Informasi",
    "SIA" => "D3 Sistem Informasi Akuntansi",
    "TK" => "D3 Teknik Komputer",
    "RPLA" => "D3 Rekayasa Perangkat Lunak Aplikasi",
    "TT" => "D3 Teknik Telekomunikasi",
    "MP" => "D3 Manajemen Pemasaran",
];

if (isset($_POST["btnSubmit"])) {
    $arrMhs[] = addMhs($_POST["nim"], $_POST["namalengkap"], $_POST['jeniskelamin'], $_POST["programstudi"], $_POST["alamat"]);
}

//$arrMhs[] = [
//    "nim" => $_POST["nim"],
//    "namalengkap" => $_POST["namalengkap"],
//    "jeniskelamin" => $jenisKelamin,
//    "programstudi" => $_POST["programstudi"],
//    "alamat" => $_POST["alamat"],
//];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Mahasiswa</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>no</th>
            <th>NIM</th>
            <th>Nama Lengkap</th>
            <th>Jenis Kelamin</th>
            <th>Program Studi</th>
            <th>Alamat</th>
        </tr>
        <?php foreach ($arrMhs as $key => $mhs) { ?>
            <tr>
                <td><?= $key++ ?></td>
                <td><?= $mhs["nim"] ?></td>
                <td><?= $mhs["namalengkap"] ?></td>
                <td><?= $mhs["jeniskelamin"] == "L" ? "Laki-Laki" : "Perempuan" ?></td>
                <td><?= $arrProdi[$mhs["programstudi"]] ?></td>
                <td><?= $mhs["alamat"] ?></td>
            </tr>
        <?php } ?>
    </table>
    <a href="formRegistrasi.php" >[Tambah Mahasiswa]</a>
</body>

</html>
<?php
//$arrMhs[] = [
//    "nim" => $_POST["nim"],
//    "namalengkap" => $_POST["namalengkap"],
//    "jeniskelamin" => $jenisKelamin,
//    "programstudi" => $arrProdi[$_POST["programstudi"]],
//    "alamat" => $_POST["alamat"],
//];
//
//echo "NIM = " . $_POST["nim"] . "<br>";
//echo "Nama Lengkap = " . $_POST["namalengkap"] . "<br>";
//
//$jenisKelamin = $_POST["jeniskelamin"] == "L" ? "Laki-Laki" : "Perempuan";
//
//echo "Jenis Kelamin = " . $jenisKelamin . "<br>";
//echo "Program Studi = " . $arrProdi[$_POST["programstudi"]] . "<br>";
//echo "Alamat Lengkap = " . $_POST["alamat"] . "<br>";

