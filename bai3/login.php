<?php
session_start();

function isLoggedIn() {
    return isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true;
}

if (isLoggedIn()) {
    header("Location: home.php");
    exit();
}

$error = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if ($username === 'lychithanh' && $password === '123456') {
        $_SESSION['username'] = $username;
        $_SESSION['is_logged_in'] = true;
        header("Location: home.php");
        exit();
    } else {
        $error = "Đăng nhập thất bại!";
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
</head>
<body>
    <h2>Đăng nhập hệ thống</h2>
    <?php if($error) echo "<p style='color:red'>$error</p>"; ?>
    
    <form method="POST">
        Username: <input type="text" name="username" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <button type="submit">Đăng nhập</button>
    </form>
</body>
</html>