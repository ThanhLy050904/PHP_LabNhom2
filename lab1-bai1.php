<?php

$products = [

    [
        "name" => "Hồ Điệp Và Kình Ngư",
        "price" => 104000,
        "image" => "https://cdn1.fahasa.com/media/catalog/product/b/i/bia-2d_ho-diep-va-kinh-ngu_17307.jpg"
    ],

    [
        "name" => "Sứ Mệnh Hail Mary",
        "price" => 136000,
        "image" => "https://cdn1.fahasa.com/media/catalog/product/b/_/b_a-1_7_12.jpg"
    ],

    [
        "name" => "Người Đàn Ông Mang Tên OVE",
        "price" => 115200,
        "image" => "https://cdn1.fahasa.com/media/catalog/product/8/9/8934974182375.jpg"
    ]

];

?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bài 1</title>
</head>
<body>
    <h1>Danh sách sản phẩm</h1>
    <?php
    foreach($products as $pro){
    ?>
        <div>
            <img src="<?php echo $pro['image']; ?>" width="200">
            <h3>
                <?php echo $pro['name']; ?>
            </h3>
            <p>Giá:                
                <?php echo number_format($pro['price']); ?> VNĐ
            </p>
            <button>
                Mua ngay
            </button>
            <hr>
        </div>
    <?php
    }
    ?>

</body>
</html>