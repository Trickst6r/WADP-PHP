<?php
//Kiểm tra xem form điều chỉnh trang [admin.php]
  if (isset($_GET["id"]) == FALSE) {
        header("location:admin.php");
        exit();
    }
include_once '../../thuvien/connectDB.php';


 //Lấy  dữ liệu của form điều chỉnh để lưu lên databse
 $id=$_GET["id"]; 

 //update
$sql ="delete from tbemployee where empID = '$id' ;";

// Truy vấn connection
$r= mysqli_query($link, $sql);

if($r==FALSE){
        echo "<h3 style='color:red'>Lỗi sai Xóa thông tin Product</h3>";
        exit();
    }
    else{
    //quay ve lai trang danh sach lop
    header("location:admin.php");
    }
    
?>
