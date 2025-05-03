<?php
// koneksi ke database
$host = "localhost"; // atau 127.0.0.1
$user = "root";      // user phpmyadmin kamu
$pass = "";          // password phpmyadmin kamu (kosongkan kalau default)
$db   = "db_babyworld"; // <--- INI aku betulin, harus "db_babyworld" sesuai screenshot kamu tadi

$conn = mysqli_connect($host, $user, $pass, $db);

// cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// ambil data dari form
if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // query untuk insert data
    $query = "INSERT INTO tb_user (name, email, password, role) VALUES ('$name', '$email', '$password', 'user')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>
                alert('Registrasi berhasil! Silakan login.');
                window.location.href = 'login-register.php'; 
              </script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// tutup koneksi
mysqli_close($conn);
?>
