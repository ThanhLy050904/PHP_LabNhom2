<?php foreach($products as $product): ?>
    <div>
        <h3><?= $product['name'] ?></h3>
        <p>Giá: <?= $product['price'] ?> VNĐ</p>
    </div>
<?php endforeach; ?>