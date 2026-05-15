<?php
session_start();

function isLoggedIn() {
    return isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true;
}

if (!isLoggedIn()) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang chủ</title>
</head>
<body>
    <h1>Chào mừng <?= htmlspecialchars($_SESSION['username']) ?> !</h1>
    <p>Bạn đã đăng nhập thành công.</p>
    <a href="logout.php">Đăng xuất</a>
</body>
</html>