<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Lab 1 - Bài 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5" style="max-width: 600px;">
    <div class="card shadow-sm p-4">
        <h4 class="mb-4 text-center fw-bold text-primary">Form nhập</h4>
        
        <form action="" method="POST">
            <div class="mb-3">
                <label class="form-label fw-bold">Tên sản phẩm</label>
                <input type="text" name="name" class="form-control" required placeholder="Ví dụ: Chuột Logitech G Pro">
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Giá tiền (VNĐ)</label>
                <input type="number" name="price" class="form-control" required placeholder="Ví dụ: 2500000">
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Mô tả ngắn</label>
                <textarea name="desc" class="form-control" rows="3" required placeholder="Mô tả sản phẩm..."></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Đường dẫn ảnh (URL)</label>
                <input type="text" name="image" class="form-control" required placeholder="https://example.com/image.jpg">
            </div>
            <button type="submit" name="btn_add" class="btn btn-primary w-100">Lưu sản phẩm</button>
        </form>
    </div>

    <?php
    if (isset($_POST['btn_add'])) {
        // nhận dữ liệu từ cái form ở trên
        $name = $_POST['name'];
        $price = $_POST['price'];
        $desc = $_POST['desc'];
        $image = $_POST['image'];

        // này lưu vào mảng
        $new_product = [
            "id" => rand(1,100),
            "name" => $name,
            "price" => (int)$price,
            "desc" => $desc,
            "image" => $image
        ];

        echo "<pre>";
        print_r($new_product);
        echo "</pre>";
     } ?>
</div>
</body>
</html>