<?php
include_once '../thuvien/connectDB.php';
?>


<!DOCTYPE html>
<!--
Kiem tra tai khoan dang nhap trong trang (L06_Login.html) co hop le khong?
Bang cach doi chieu bo du lieu nhap voi cac mau tin bang [tbUser].
Neu com thong bao thanh cong, nguoc lai thong bao that 
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //kiem tra trang [L06_login.html] da duoc chay chua
        if (isset($_POST["btnOK"]) == FALSE) {
            header("location:L06_Login.html");
            exit();
        }
        $tenDN = $_POST["txtUser"];
        $mkDN = $_POST["txtPass"];
        $sql = "select * from tbUser where user='$tenDN' and password='$mkDN'";
       
        //thuc hien linh truy van SQL
        $r = mysqli_query($link, $sql);
        
        //kiem tra xem co dong du lieu dc tra ve tu cau linh Select SQL ?
        if (mysqli_num_rows($r) > 0) {
            echo "<h2 style='color:green'>Chuc mung, ban da dang nhap thanh cong !</h2>";
        } else {
            echo "<h3 style='color:red'>TK dang nhap ko hop le. Vui long dang nhap lai !</h3>";
        }
        ?>
    </body>
</html>
