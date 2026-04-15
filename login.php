<?php
session_start();
require 'koneksi.php';

$email    = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';

if (empty($email) || empty($password)) {
    $_SESSION['auth_error'] = "Email dan password wajib diisi.";
    header("Location: index.php#reviews");
    exit;
}

$stmt = $conn->prepare("SELECT id, nama, password FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->bind_result($id, $nama, $hash);
$stmt->fetch();
$stmt->close();

if ($id) {
    // Email sudah ada → login
    if ($hash && password_verify($password, $hash)) {
        $_SESSION['user_id']      = $id;
        $_SESSION['user_nama']    = $nama;
        $_SESSION['user_email']   = $email;
        $_SESSION['login_method'] = 'email';
    } else {
        $_SESSION['auth_error'] = "Password salah.";
    }
} else {
    // Email belum ada → daftar otomatis + login
    if (strlen($password) < 6) {
        $_SESSION['auth_error'] = "Password minimal 6 karakter.";
        header("Location: index.php#reviews");
        exit;
    }
    $nama = ucfirst(explode('@', $email)[0]);
    $hash = password_hash($password, PASSWORD_BCRYPT);
    $stmt = $conn->prepare("INSERT INTO users (nama, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nama, $email, $hash);
    $stmt->execute();
    $_SESSION['user_id']      = $conn->insert_id;
    $_SESSION['user_nama']    = $nama;
    $_SESSION['user_email']   = $email;
    $_SESSION['login_method'] = 'email';
    $stmt->close();
}

header("Location: index.php#reviews");
exit;
?>