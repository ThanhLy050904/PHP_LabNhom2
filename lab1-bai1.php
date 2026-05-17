<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bài 1 - Danh sách sản phẩm</title>
    <style>
        body{
            font-family: Arial;
            background:#f5f5f5;
        }
        .container{
            width:900px;
            margin:auto;
            display:flex;
            gap:20px;
            flex-wrap:wrap;
        }
        .product{
            width:250px;
            background:white;
            padding:15px;
            border-radius:10px;
            box-shadow:0 0 5px gray;
        }
        img{
            width:100%;
            height:180px;
            object-fit:cover;
        }
        .price{
            color:red;
            font-weight:bold;
        }
    </style>
</head>
<body>

<h2>Danh sách sản phẩm</h2>

<?php
$products = [
    [
        "id" => 1,
        "name" => "Hồ Điệp Và Kình Ngư",
        "price" => 104000,
        "image" => "https://cdn1.fahasa.com/media/catalog/product/b/i/bia-2d_ho-diep-va-kinh-ngu_17307.jpg",
        "desc" => "Tiểu thuyết hấp dẫn về tình yêu và cuộc sống."
    ],
    [
        "id" => 2,
        "name" => "Sứ Mệnh Hail Mary - Project Hail Mary",
        "price" => 136000,
        "image" => "https://cdn1.fahasa.com/media/catalog/product/b/_/b_a-1_7_12.jpg",
        "desc" => "Tác phẩm khoa học viễn tưởng nổi tiếng."
    ],
    [
        "id" => 3,
        "name" => "Người Đàn Ông Mang Tên OVE (Tái Bản)",
        "price" => 115200,
        "image" => "https://cdn1.fahasa.com/media/catalog/product/8/9/8934974182375.jpg",
        "desc" => "Câu chuyện cảm động và đầy nhân văn."
    ],
];
?>

<div class="container">
<?php foreach($products as $sp): ?>
    <div class="product">
        <img src="<?= $sp['image'] ?>" alt="<?= $sp['name'] ?>">
        <h3><?= $sp['name'] ?></h3>
        <p class="price"><?= number_format($sp['price']) ?> VNĐ</p>
        <p><?= $sp['desc'] ?></p>
    </div>
<?php endforeach; ?>
</div>

</body>
</html>