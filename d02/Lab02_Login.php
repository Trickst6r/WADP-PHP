<?php

/* 
Lây dữ liệu đăng nhập trên form của trang Lab02_login.html
 */
//Kieerm tra xem trang (labo2_login.html) đã được thấy chưa?
if(isset($_POST["btnOK"])==FALSE){
    
    //Chưa thấy trang Html - > chuển hướng về trang HTMl
    header("location:Lab02_Login.html");
    exit();
}

/*
Lấy dẽ liệu đăng nhập trên form của trang lab02_login.html
 *  */
$username = $_POST["txtLogin"];
$password = $_POST["txtPass"];

echo"<h2>Chào $username, mật khẩu của thí chủ là $password</h2>";

?>
