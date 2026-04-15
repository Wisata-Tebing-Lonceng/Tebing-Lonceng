<?php
session_start();
require 'koneksi.php';

$is_ajax = isset($_SERVER['HTTP_X_REQUESTED_WITH'])
    && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';

if (!isset($_SESSION['user_id'])) {
    if ($is_ajax) {
        header('Content-Type: application/json');
        http_response_code(401);
        echo json_encode(['success' => false, 'message' => 'Silakan login terlebih dahulu.']);
    } else {
        header("Location: index.php#reviews");
    }
    exit;
}

$user_id = $_SESSION['user_id'];
$nama    = $_SESSION['user_nama'];
$kesan   = trim($_POST['kesan'] ?? '');

if (empty($kesan)) {
    if ($is_ajax) {
        header('Content-Type: application/json');
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => 'Ulasan tidak boleh kosong.']);
    } else {
        header("Location: index.php#reviews");
    }
    exit;
}

$stmt = $conn->prepare("INSERT INTO reviews (user_id, nama, kesan) VALUES (?, ?, ?)");
$stmt->bind_param("iss", $user_id, $nama, $kesan);
$stmt->execute();
$stmt->close();

if ($is_ajax) {
    header('Content-Type: application/json');
    echo json_encode([
        'success' => true,
        'review'  => [
            'nama'  => htmlspecialchars($nama),
            'kesan' => htmlspecialchars($kesan),
        ]
    ]);
} else {
    header("Location: index.php#reviews");
}
exit;
?>