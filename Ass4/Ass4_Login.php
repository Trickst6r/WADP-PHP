<?php
session_start();
include_once '../../thuvien/connectDB.php';
// kiểm tra xem trang login.html] đã được thấy chưa?
if(isset($_POST["btnOK"])==FALSE){ // không ghi gì hết mặt định ==TRUE
    //chưa chạy trang html -> chuyển về trang html
    header("location:Ass4_Login.html");
    exit();
}

$username = $_POST["txtID"];
$password = $_POST["txtPass"];

if ($username=="airAD" && $password=="001100") {
    $_SESSION["id"]="airAD";
    header("location: Ass4_FlightControl.php");
    exit;
}
else{
    echo "<h2>Tài khoản đăng nhập không hợp lệ! </h2>";
    echo "<p>Vui lòng <a href='Ass4_Login.html'>đăng nhập</a> lại.</p>";
}
?>