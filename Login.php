<?php
session_start();
if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true) {
    header('Location: home.php');
    exit;
}

$error = "";
if (isset($_POST['btn_login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];


    if ($username === 'admin' && $password === '123456') {
        $_SESSION['is_logged_in'] = true;
        $_SESSION['username'] = $username;
        header('Location: home.php');
        exit;
    } else {
        $error = "Đăng nhập thất bại! Sai tài khoản hoặc mật khẩu.";
    }
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng Nhập</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center" style="height: 100vh;">
<div class="card shadow-sm p-4" style="width: 380px;">
    <h4 class="text-center fw-bold mb-4">ĐĂNG NHẬP</h4>
    
    <?php if(!empty($error)): ?>
        <div class="alert alert-danger p-2 small text-center"><?= $error ?></div>
    <?php endif; ?>

    <form action="" method="POST">
        <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" name="username" class="form-control" required placeholder="admin">
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required placeholder="123456">
        </div>
        <button type="submit" name="btn_login" class="btn btn-primary w-100">Đăng nhập</button>
    </form>
</div>
</body>
</html>