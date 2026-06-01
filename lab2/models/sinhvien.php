<?php
class SinhVien
{
    private $mssv;
    private $hoten;
    private $gioitinh;
    private $ngaysinh;
    private $diemtb;

    // Constructor: Hỗ trợ cả khởi tạo mặc định (Default) và có tham số (Parameterized)
    public function __construct($mssv = "", $hoten = "", $gioitinh = "", $ngaysinh = "", $diemtb = 0)
    {
        $this->mssv = $mssv;
        $this->hoten = $hoten;
        $this->gioitinh = $gioitinh;
        $this->ngaysinh = $ngaysinh;
        $this->diemtb = $diemtb;
    }

    // Getters
    public function getMssv() { return $this->mssv; }
    public function getHoten() { return $this->hoten; }
    public function getGioitinh() { return $this->gioitinh; }
    public function getNgaysinh() { return $this->ngaysinh; }
    public function getDiemtb() { return $this->diemtb; }

    // Setters
    public function setMssv($mssv) { $this->mssv = $mssv; }
    public function setHoten($hoten) { $this->hoten = $hoten; }
    public function setGioitinh($gioitinh) { $this->gioitinh = $gioitinh; }
    public function setNgaysinh($ngaysinh) { $this->ngaysinh = $ngaysinh; }
    public function setDiemtb($diemtb) { $this->diemtb = $diemtb; }

    // Phương thức hiển thị thông tin
    public function HienThiThongTin()
    {
        return "MSSV: " . $this->mssv . " | Họ tên: " . $this->hoten . " | Giới tính: " . $this->gioitinh . " | Ngày sinh: " . $this->ngaysinh . " | Điểm TB: " . $this->diemtb;
    }
}

// Khởi tạo session để lưu mảng sinh viên (giúp dữ liệu tồn tại sau khi submit form)
session_start();

if (!isset($_SESSION['mangSinhVien'])) {
    $_SESSION['mangSinhVien'] = array();
}

// Xử lý khi người dùng gửi form
if (isset($_POST['btnSubmit'])) {
    // Sử dụng Parameterized constructor để tạo đối tượng mới
    $sv = new SinhVien(
        $_POST['mssv'],
        $_POST['hoten'],
        $_POST['gioitinh'],
        $_POST['ngaysinh'],
        $_POST['diemtb']
    );
    
    // Thêm đối tượng vào mảng sinh viên
    $_SESSION['mangSinhVien'][] = $sv;
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Quản lý Sinh Viên</title>
</head>
<body>
    <h1>Nhập thông tin sinh viên</h1>
    <form method="POST">
        Mã sinh viên: <input type="text" name="mssv" required><br><br>
        Họ và tên: <input type="text" name="hoten" required><br><br>
        Giới tính: 
        <input type="radio" name="gioitinh" value="Nam" checked> Nam
        <input type="radio" name="gioitinh" value="Nữ"> Nữ<br><br>
        Ngày sinh: <input type="date" name="ngaysinh" required><br><br>
        Điểm trung bình: <input type="number" step="0.1" name="diemtb" required><br><br>
        <button type="submit" name="btnSubmit">Thêm vào danh sách</button>
    </form>

    <hr>
    <h2>Danh sách sinh viên đã lưu</h2>
    <ul>
        <?php foreach ($_SESSION['mangSinhVien'] as $item): ?>
            <li><?php echo $item->HienThiThongTin(); ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>