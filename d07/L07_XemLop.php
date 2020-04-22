<?php
//kiem tra tham so nay cos duoc chuyen tu trang [L07_DanhsachLop.php] ?
if(isset($_GET["id"])==FALSE){
    // Quay lai trang danh sach lop
    header("location:L07_DanhsachLop.php");
    exit();
}

include_once '../thuvien/connectDB.php';
// Lay ma lop hoc muon xem thong tin chi tiet
$id= $_GET["id"];

// Viet cau lenh SQL, trich mau tin co ma lop hoc trung vowi bien id
$sql = "select  * from tblophoc where MaLop like '$id'";

// Thi hanh lenh truy can tu bien connection
$r = mysqli_query($link, $sql);

if($r == FALSE || mysqli_num_rows($r)==0){
    echo "<h3> Không tồn tại mã lớp học [$id]!!!! </h3>";
    exit();
}

// Lay thong tin cua lop hoc ra
$lop = mysqli_fetch_row($r);




?>

<!DOCTYPE html>
<!--
Xem thong tin cua 1 lop hoc
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Xem thong tin lop hoc</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
	<h2>Thông tin lớp học</h2>
	<hr>
	<?php
	
	echo "<p><b>Ma lop hoc: </b> $lop[0]</p>";
	echo "<p><b>Thoi gian hoc: </b> $lop[1]</p>";
	echo "<p><b>Chuong trinh: </b> $lop[2]</p>";
	echo "<p><b>Hoc Phi: </b> $lop[3]</p>";
	?>
	<hr>
	<a href="L07_DanhsachLop.php">Ve lai trang truoc</a>
	
    </body>
</html>
