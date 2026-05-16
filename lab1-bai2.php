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

if(!empty($_POST) && $_SERVER['REQUEST_METHOD'] == "POST"){

    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_POST['image'];

    $newProduct = [

        "id" => count($_SESSION['products']) + 1,
        "name" => $name,
        "price" => $price,
        "image" => $image

    ];

    $_SESSION['products'][] = $newProduct;

}

?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bài 2</title>
</head>
<body>

    <h1>Thêm sản phẩm</h1>

    <form action="" method="POST">
       <p>Tên sản phẩm</p>
        <input type="text" name="name">
        <br><br>
        <p>Giá sản phẩm</p>
        <input type="number" name="price">
        <br><br>
        <p>Hình ảnh</p>
        <input type="text" name="image">
        <br><br>
        <button type="submit">
            Thêm sản phẩm
        </button>
    </form>
    <hr>
    <h1>Danh sách sản phẩm</h1>
    <?php
    foreach($_SESSION['products'] as $pro){
    ?>
        <div>
            <img src="<?php echo $pro['image']; ?>" width="150">
            <h3>
                <?php echo $pro['name']; ?>
            </h3>
            <p>
                Giá:
                <?php echo number_format($pro['price']); ?> VNĐ
            </p>
            <hr>
        </div>
    <?php
    }
    ?>
</body>
</html>