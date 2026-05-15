<?php
session_start();

if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = [
        [
            "id" => 1,
            "name" => "Hồ Điệp Và Kình Ngư",
            "price" => 104000,
            "image" => "https://cdn1.fahasa.com/media/catalog/product/b/i/bia-2d_ho-diep-va-kinh-ngu_17307.jpg"
        ],
        [
            "id" => 2,
            "name" => "Sứ Mệnh Hail Mary - Project Hail Mary",
            "price" => 136000,
            "image" => "https://cdn1.fahasa.com/media/catalog/product/b/_/b_a-1_7_12.jpg"
        ]
    ];
}

// Thêm sản phẩm mới
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $newId = count($_SESSION['products']) + 1;
    
    $newProduct = [
        "id"    => $newId,
        "name"  => $_POST['name'],
        "price" => (int)$_POST['price'],
        "image" => $_POST['image']
    ];

    $_SESSION['products'][] = $newProduct;
    $success = "Thêm sản phẩm thành công!";
}

$products = $_SESSION['products'];
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bài 2 - Nhập Sản Phẩm</title>
</head>
<body>

<h1>Nhập Sản Phẩm Mới</h1>

<?php if (isset($success)) echo "<p><b>$success</b></p>"; ?>

<form action="" method="POST">
    <p>
        Tên sách:<br>
        <input type="text" name="name" style="width:400px" required>
    </p>
    
    <p>
        Giá (VNĐ):<br>
        <input type="number" name="price" style="width:400px" required>
    </p>
    
    <p>
        Link ảnh:<br>
        <input type="text" name="image" style="width:400px" required>
    </p>
    
    <button type="submit">Thêm Sản Phẩm</button>
</form>

<hr>

<h2>Danh sách sản phẩm (<?= count($products) ?> cuốn)</h2>

<?php foreach($products as $pro): ?>
    <div style="margin:15px 0; padding:10px; border:1px solid #ccc;">
        <img src="<?= $pro['image'] ?>" width="80" height="100" style="vertical-align:middle">
        <strong><?= $pro['name'] ?></strong><br>
        Giá: <span style="color:red"><?= number_format($pro['price']) ?> ₫</span>
    </div>
<?php endforeach; ?>

</body>
</html>