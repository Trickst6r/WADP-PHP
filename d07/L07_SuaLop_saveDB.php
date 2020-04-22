<?php

//kiem tra xem trang [L07_sualop.php] co dc submit chua ?
if (isset($_GET["btnOK"]) == FALSE) {
    //quay ve lai trang danh sach lop
    header("location:L07_DanhsachLop.php");
    exit();
}
//lay het du lieu cua form dieu chinh de luu len database
$id = $_GET["txtID"];
$tg = $_GET["txtTG"];
$ct = $_GET["txtCT"];
$hp = $_GET["txtHP"];
//viet linh update sql
$sql = "update tbLOPHOC set TGNhapHoc='$tg' , ChuongTrinh='$ct' , HocPhi=$hp  where Malop ='$id' ";
//lay connection
include_once '../thuvien/connectDB.php';
//cho chay linh sql
$r = mysqli_query($link, $sql);
if ($r == FALSE) {
    echo "<h3> Loi sai Dieu Chinh Thong Tin Lop Hoc !!!</h3>";
} else {
    //quay ve lai trang danh sach lop
    header("location:L07_DanhsachLop.php");
}
?>
