<?php
include_once '../student1215633_HuuNhan/thuvien/connectDB.php';
?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if (isset($_GET["btnOK"]) == FALSE) {
            header("location:Create.html");
            exit();
        }

        $name = $_GET["txtName"];
        $price = $_GET["txtPrice"];
        $quantity = $_GET["txtQuantity"];

        $sql = "INSERT INTO `saledb` (`ProductName`, `UnitPrice`, `Quantity`) VALUES ('$name', '$price', '$quantity');";
        $r = mysqli_query($link, $sql);

        if ($r == TRUE) {
            header("location:Index.php");
            exit();
        }

        echo "<h2>Loi nhap sai </h2>";
        ?>
    </body>
</html>
