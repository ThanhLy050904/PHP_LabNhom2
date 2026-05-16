<?php
session_start();
if (!isset($_SESSION['is_logged_in']) || !$_SESSION['is_logged_in']) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang Chủ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5 text-center">
    <div class="card shadow-sm p-5 d-inline-block" style="min-width: 400px;">
        <h3 class="text-success fw-bold mb-3">Chào mừng, <?= $_SESSION['username'] ?>! 👋</h3>
        <p class="text-secondary">Bạn đã đăng nhập hệ thống thành công bằng Session.</p>
        <hr>
        <a href="logout.php" class="btn btn-danger btn-sm px-4">Đăng xuất</a>
    </div>
</div>
</body>
</html>