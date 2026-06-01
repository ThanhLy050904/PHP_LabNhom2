<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once "Model/model.php";
require_once "Views/product.php";

$db = new Database('localhost', 'php1_fall2025', 'root', 'mysql');
$connection = $db->connect();

// $insertSQL = "INSERT INTO products (name, slug, price, description, image) VALUES (?, ?, ?, ?, ?)";
// $stmt = $connection->prepare($insertSQL);
// $stmt->execute(["Iphone 19", "iphone-19", 200, "Fake siêu cấp", "https://images2.thanhnien.vn/..."]);
// die();

$product = new Product($connection);
$danhSachSanPham = $product->getAll();

// $sql = "SELECT * FROM products WHERE name = ? AND price > ?";
// $stmt = $connection->prepare($sql);
// $stmt->execute(["Iphone 15 Pro Max", 3000]);
// $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($danhSachSanPham as $a):
?>

    <h1><?= $a['name'] ?></h1>
    <h2><?= $a['price'] ?></h2>
    <img src="<?= $a['image'] ?>" height="250" alt="">
    <h3><?= $a['description'] ?? 'Chưa cập nhật' ?></h3>

<?php
endforeach;
?>