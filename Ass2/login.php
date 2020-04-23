<?php
include_once '../../thuvien/connectDB.php';
?>

<!DOCTYPE html>
<!--
    
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
	<?php
	if (isset($_POST["btnOK"]) == FALSE) {
	    header("location:login.html");
	    exit();
	}
	$id = $_POST["txtID"];
	$pass = $_POST["txtPass"];
	$sql = "select * from tbemployee where empID = '$id' and password='$pass'";

	//thuc hien linh truy van SQL
	$r = mysqli_query($link, $sql);

	//kiem tra xem co dong du lieu duoc tra ve tu cau hinh Select SQL
	if (mysqli_num_rows($r) > 0) {
	    $emp = mysqli_fetch_row($r);
	    if ($emp[4] == 1) {
		header("location:staff.php");
	    } else {
		header("location:admin.php");
	    }
	    echo "<h3>Tài khoản đăng nhập không hợp lệ, vui lòng nhập lại</h3>";
	}
	?>
    </body>
</html>
