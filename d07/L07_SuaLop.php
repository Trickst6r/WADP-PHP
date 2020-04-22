<?php
//kiem tra tham so nay cos duoc chuyen tu trang [L07_DanhsachLop.php] ?
if (isset($_GET["id"]) == FALSE) {
    // Quay lai trang danh sach lop
    header("location:L07_DanhsachLop.php");
    exit();
}

include_once '../thuvien/connectDB.php';
// Lay ma lop hoc muon xem thong tin chi tiet
$id = $_GET["id"];

// Viet cau lenh SQL, trich mau tin co ma lop hoc trung vowi bien id
$sql = "select  * from tblophoc where MaLop like '$id'";

// Thi hanh lenh truy can tu bien connection
$r = mysqli_query($link, $sql);

if ($r == FALSE || mysqli_num_rows($r) == 0) {
    echo "<h3> Không tồn tại mã lớp học [$id]!!!! </h3>";
    exit();
}

// Lay thong tin cua lop hoc ra
$lop = mysqli_fetch_row($r);
?>

<!DOCTYPE html>
<!--

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Dieu chinh</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<style>
	    body{
		margin-left: 2em;
	    }
	</style>
    </head>
    <body>

	<div class="container">
	    <h2>Thay doi thong tin lop hoc</h2>
	    <hr>

	    <form action="L07_SuaLop_saveDB.php">
                <p>Ma Lop: <br>
                    <input name="txtID" value="<?php echo $lop[0] ?>" readonly />
                </p>
                <p>Thoi gian nhap hoc: <br>
                    <input name="txtTG" value="<?php echo $lop[1] ?>" required />
                </p>     
                <p>Chuong trinh hoc: <br>
                    <input name="txtCT" value="<?php echo $lop[2] ?>" required />
                </p>   
                <p>Hoc phi: <br>
                    <input name="txtHP" value="<?php echo $lop[3] ?>" required
                           type="number" min="100" max="3000"/>
                </p>                 
                <p>
                    <input type="submit" name="btnOK" value="Submit" />
                    <input type="reset" value="Reset" />
                </p>
            </form>
	</div>
	<?php ?>
    </body>
</html>
