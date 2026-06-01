<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bài 2 - Form</title>
</head>
<body>

<h2>Nhập sản phẩm</h2>

<form action="xuly.php" method="POST">
    Tên sản phẩm:
    <input type="text" name="name"><br><br>

    Giá:
    <input type="number" name="price"><br><br>

    Mô tả:
    <input type="text" name="desc"><br><br>

    <button type="submit">Gửi</button>
</form>

<hr>

<h2>Form đăng nhập</h2>

<form action="xuly.php" method="POST">
    Username:
    <input type="text" name="username"><br><br>

    Password:
    <input type="password" name="password"><br><br>

    <button type="submit" name="login">Đăng nhập</button>
</form>

</body>
</html>