<?php
class SinhVien {
    private $mssv;
    private $hoten;
    private $gioitinh;
    private $ngaysinh;
    private $diemtb;


    public function __construct(
        $mssv = "",
        $hoten = "",
        $gioitinh = "",
        $ngaysinh = "",
        $diemtb = 0
    ) {
        $this->mssv = $mssv;
        $this->hoten = $hoten;
        $this->gioitinh = $gioitinh;
        $this->ngaysinh = $ngaysinh;
        $this->diemtb = $diemtb;
    }


    public function getMssv() {
        return $this->mssv;
    }

    public function setMssv($mssv) {
        $this->mssv = $mssv;
    }

    public function getHoten() {
        return $this->hoten;
    }

    public function setHoten($hoten) {
        $this->hoten = $hoten;
    }

    public function getGioitinh() {
        return $this->gioitinh;
    }

    public function setGioitinh($gioitinh) {
        $this->gioitinh = $gioitinh;
    }

    public function getNgaysinh() {
        return $this->ngaysinh;
    }

    public function setNgaysinh($ngaysinh) {
        $this->ngaysinh = $ngaysinh;
    }

    public function getDiemtb() {
        return $this->diemtb;
    }

    public function setDiemtb($diemtb) {
        $this->diemtb = $diemtb;
    }


    public function hienThiThongTin() {
        return "
            <tr>
                <td>{$this->mssv}</td>
                <td>{$this->hoten}</td>
                <td>{$this->gioitinh}</td>
                <td>{$this->ngaysinh}</td>
                <td>{$this->diemtb}</td>
            </tr>
        ";
    }
}


$mangSinhVien = [];


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $sv = new SinhVien(
        $_POST['mssv'],
        $_POST['hoten'],
        $_POST['gioitinh'],
        $_POST['ngaysinh'],
        $_POST['diemtb']
    );

    $mangSinhVien[] = $sv;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Quản lý sinh viên</title>
    <style>
        table{
            border-collapse: collapse;
            width: 100%;
        }
        table, th, td{
            border:1px solid black;
            padding:8px;
        }
    </style>
</head>
<body>

<h2>Nhập thông tin sinh viên</h2>

<form method="POST">
    MSSV:
    <input type="text" name="mssv"><br><br>

    Họ tên:
    <input type="text" name="hoten"><br><br>

    Giới tính:
    <select name="gioitinh">
        <option value="Nam">Nam</option>
        <option value="Nữ">Nữ</option>
    </select>
    <br><br>

    Ngày sinh:
    <input type="date" name="ngaysinh"><br><br>

    Điểm TB:
    <input type="number" step="0.1" name="diemtb"><br><br>

    <button type="submit">Thêm sinh viên</button>
</form>

<h2>Danh sách sinh viên</h2>

<table>
    <tr>
        <th>MSSV</th>
        <th>Họ tên</th>
        <th>Giới tính</th>
        <th>Ngày sinh</th>
        <th>Điểm TB</th>
    </tr>

    <?php
    foreach($mangSinhVien as $sv){
        echo $sv->hienThiThongTin();
    }
    ?>
</table>

</body>
</html>