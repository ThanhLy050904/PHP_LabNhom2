<?php
session_start();

echo "<h2>Kết quả xử lý</h2>";

if(isset($_POST['name'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $desc = $_POST['desc'];

    echo "Tên sản phẩm: $name <br>";
    echo "Giá: $price <br>";
    echo "Mô tả: $desc <br>";
}

if(isset($_POST['login'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if($user == "admin" && $pass == "123456"){
        $_SESSION['user'] = $user;
        echo "Đăng nhập thành công!<br>";
        echo "<a href='home.php'>Vào trang chủ</a>";
    }else{
        echo "Sai tài khoản hoặc mật khẩu";
    }
}
?>