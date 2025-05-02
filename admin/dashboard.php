<?php
session_start();

// Cek apakah sudah login dan role-nya admin
if (!isset($_SESSION['email']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login-register.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="../assets/css/style.css"> <!-- opsional -->
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 40px;
            background-color: #f0f0f0;
        }
        .admin-box {
            background-color: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            max-width: 600px;
            margin: auto;
            text-align: center;
        }
        h1 {
            color: #F72D73;
        }
    </style>
</head>
<body>

<div class="admin-box">
    <h1>Halo Admin, <?= $_SESSION['name']; ?> 👋</h1>
    <p>Selamat datang di dashboard admin BabyWorld.</p>

    <div style="margin-top: 20px;">
        <a href="../logout.php" style="color: red; text-decoration: none;">Logout</a>
    </div>
</div>

</body>
</html>
