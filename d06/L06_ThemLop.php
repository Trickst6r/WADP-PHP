<?php

include_once '../thuvien/connectDB.php';

//kiem tra trnag [L06_ThemLop.html]da duoc chay chua
if (isset($_POST["btnOK"]) == FALSE) {
    header("location:L06_ThemLop.html");
    exit();
}

//lay tat ca cac du lieu nhap trong form them 1 lop hoc moi
$malop = $_POST["txtMa"];
$ct = $_POST["txtCT"];
$tg = $_POST["txtTG"];
$hp = $_POST["txtHP"];

$sql = "insert into tbLopHoc(MaLop, TGNhapHoc, ChuongTrinh, HocPhi)values('$malop', '$tg', '$ct', $hp)";
echo $sql;
//thuc hien lenh SQL
$r = mysqli_query($link, $sql);

if ($r == TRUE) {
    // Thành công mở trang ds lớp học
    header("location:L06_DanhsachLop.php");
    exit();
}
echo "<h3> Loi sai DB: Khong the them lop hoc moi!</h3>";
?>
