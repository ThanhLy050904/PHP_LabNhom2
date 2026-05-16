<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container py-5">
    <div class="row row-cols-1 row-cols-md-2 g-4">
        
        <?php
        $products = [
            [
                "id" => 1,
                "name" => "Laptop Gaming ASUS ROG Strix",
                "price" => 28990000,
                "rating" => 5,
                "desc" => "Chiến thần gaming với cấu hình khủng, màn hình siêu mượt mang lại trải nghiệm đỉnh cao.",
                "image" => "https://khoavang.vn/resources/cache/800xx1/Toan/Other/n6039w_ba9e64f75726406789f478d41e2122c1_1024x1024-1703297870.webp"
            ],
            [
                "id" => 2,
                "name" => "Chuột Không Dây Logitech G Pro X",
                "price" => 2990000,
                "rating" => 5,
                "desc" => "Trọng lượng siêu nhẹ, cảm biến HERO độc quyền cho độ chính xác tuyệt đối trong mọi trận đấu.",
                "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_j8gnMoi4yUa3DqiROAW_fL-irmvg7BGytw&s" 
            ],
            [
                "id" => 3,
                "name" => "Bàn Phím Cơ AKKO 3098B Plus",
                "price" => 1850000,
                "rating" => 4,
                "desc" => "Thiết kế layout độc đáo, keycap PBT chất lượng cao cùng cảm giác gõ cực kỳ êm ái.",
                "image" => "https://cdn2.cellphones.com.vn/x/media/catalog/product/b/a/ban-phim-co-akko-3098b-plus-black-gold-cream-yellow-pro-switch_1.jpg"
            ],
            [
                "id" => 4,
                "name" => "Tai Nghe Chụp Tai Sony WH-1000XM4",
                "price" => 6450000,
                "rating" => 5,
                "desc" => "Công nghệ chống ồn đỉnh cao, âm thanh sắc nét giúp bạn hoàn toàn đắm chìm vào không gian riêng.",
                "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQOnor2ZwkpHK1QLRFnMhFd_CDYKQBuYHj2FQ&s" 
            ]
        ];

        foreach($products as $pro): 
        ?>
        <div class="col">
            <div class="card h-100 shadow-sm d-flex flex-column">
            <img src="<?= $pro['image'] ?>" class="card-img-top" alt="<?= $pro['name'] ?>" style="height: 300px; object-fit: contain; background: #ffffff; padding: 10px;">
                
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold"><?= $pro['name'] ?></h5>
                    
                    <div class="mb-2">
                        <?php 
                        for($i=1; $i<=5; $i++) {
                            echo ($i <= $pro['rating']) ? '⭐' : '☆'; 
                        }
                        ?>
                    </div>

                    <p class="card-text text-secondary flex-grow-1" style="font-size: 0.9rem;">
                        <?= $pro['desc'] ?>
                    </p>

                    <h5 class="text-danger fw-bold mt-2"><?= number_format($pro['price']) ?>đ</h5>
                </div>

                <div class="card-footer bg-transparent border-top-0 pb-3">
                    <div class="row g-2">
                        <div class="col-6">
                            <button class="btn btn-outline-dark btn-sm w-100">Chi tiết</button>
                        </div>
                        <div class="col-6">
                            <button class="btn btn-primary btn-sm w-100">Mua ngay</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>

    </div>
</div>