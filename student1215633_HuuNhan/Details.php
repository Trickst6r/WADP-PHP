<?php 
if (isset($_GET["id"]) == FALSE) {
        header("location:Index.php");
        exit();
    }
include_once '../student1215633_HuuNhan/thuvien/connectDB.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container" style="border: 1px black solid; margin-top: 30px ">
            <table class="table table-bordered" style="margin-top: 30px">
                <thead style="background-color: #4472c4;color: whitesmoke">
                    <tr>
                        <th>Product ID</th>
                        <th>Product Name</th>
                        <th>Unit Price</th>
                        <th>Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                     $id=$_GET["id"];
                    $sql = "select * from SaleDB where ProductID = '$id' ;";
                    $r = mysqli_query($link, $sql);
                    $a_product = mysqli_fetch_all($r);

                    foreach ($a_product as $key) {
                        echo '<tr>';
                        echo "<td style='border: 1px #4472c4 solid'><b> $key[0] </b></td>";
                        echo "<td style='border: 1px #4472c4 solid'> $key[1] </td>";
                        echo "<td style='border: 1px #4472c4 solid'> $key[2] </td>";
                        echo "<td style='border: 1px #4472c4 solid'> $key[3] </td>";
			
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
            <br>
            <a href="Index.php">Back To List</a> <br><br>
        </div>
    </body>
</html>


