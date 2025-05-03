<?php
session_start();
include "configdb.php";

if (!isset($_SESSION['email']) || $_SESSION['role'] !== 'user') {
    header("Location: login-register.php");
    exit();
}

$email = $_SESSION['email'];

// Ambil user_id dan data lama user
$userQuery = $conn->query("SELECT * FROM tb_user WHERE email='$email'");
$user = $userQuery->fetch_assoc();
$user_id = $user['id']; // pastikan kolom ini ada di tb_user

function log_change($conn, $user_id, $field, $old_value, $new_value) {
    $stmt = $conn->prepare("INSERT INTO tb_account_log (user_id, field_changed, old_value, new_value) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("isss", $user_id, $field, $old_value, $new_value);
    $stmt->execute();
    $stmt->close();
}

// Ubah nama
if (isset($_POST['action']) && $_POST['action'] === 'update_profile') {
    $new_name = trim($_POST['username']);
    if ($new_name !== $user['name']) {
        log_change($conn, $user_id, 'name', $user['name'], $new_name);
        $stmt = $conn->prepare("UPDATE tb_user SET name=? WHERE id=?");
        $stmt->bind_param("si", $new_name, $user_id);
        $stmt->execute();
        $_SESSION['name'] = $new_name;
    }
    header("Location: accounts.php?success=profile_updated");
    exit();
}

// Ubah alamat
if (isset($_POST['action']) && $_POST['action'] === 'update_address') {
    $new_address = trim($_POST['address']);
    if ($new_address !== $user['address']) {
        log_change($conn, $user_id, 'address', $user['address'], $new_address);
        $stmt = $conn->prepare("UPDATE tb_user SET address=? WHERE id=?");
        $stmt->bind_param("si", $new_address, $user_id);
        $stmt->execute();
    }
    header("Location: accounts.php?success=address_updated");
    exit();
}

// Ganti password
if (isset($_POST['action']) && $_POST['action'] === 'change_password') {
    $current = md5($_POST['current_password']);
    $new     = $_POST['new_password'];
    $confirm = $_POST['confirm_password'];

    if (!password_verify($current, $user['password'])) {
        header("Location: accounts.php?error=wrong_password");
        exit();
    }

    if ($new !== $confirm) {
        header("Location: accounts.php?error=password_mismatch");
        exit();
    }

    $new_hash = password_hash($new, PASSWORD_DEFAULT);
    if ($new_hash !== $user['password']) {
        log_change($conn, $user_id, 'password', '[ENCRYPTED]', '[ENCRYPTED]');
        $stmt = $conn->prepare("UPDATE tb_user SET password=? WHERE id=?");
        $stmt->bind_param("si", $new_hash, $user_id);
        $stmt->execute();
    }
    header("Location: accounts.php?success=password_changed");
    exit();
}

header("Location: accounts.php");
exit();
