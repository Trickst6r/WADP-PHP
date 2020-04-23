<?php
include_once '../../thuvien/connectDB.php';

if (isset($_GET["btnSearch"]) == FALSE) {
    header("location:viewBook.php");
    exit();
}

$min = $_GET["txtMin"];
$max = $_GET["txtMax"];



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
        <title>Book List</title>  
        <link href="../css/table.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <h2>Book List</h2>
            <span>
                <a href="insertBook.php">Create New</a> <br><br>
            </span>

            <form action="SearchBook.php">
                <h3 style="margin-left: 12%;margin-bottom: 2%">
                    Price
                    <span style="color:green">From $ </span>
                    <input style="margin-left:3%;width: 130px;height: 25px;text-align: center;font-weight: 700;font-size:17px" class="ipNum" type="number" name="txtMin" id="txtMin"> 
                    <span style="color:green">To $ </span> 
                    <input style="margin-left:3%;width: 130px;height: 25px;text-align: center;font-weight: 700;font-size:17px" class="ipNum" type="number" name="txtMax" id="txtMax"> 
                    <input style="margin-left:7%;width: 80px;height: 25px;text-align: center;background-color: pink;color:rgb(126, 126, 235);font-weight: 700;font-size:17px" type="submit" name="btnSearch" value="Search" >
                </h3>
            </form>

            <hr>

            <table class="table tab-content ">
                <thead>
                    <tr>
                        <th>BookID</th>
                        <th>Book Name</th>
                        <th>Price</th>
                        <th>Author</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "select * from tbbook2";
                    if (!empty($min) && !empty($max)) {
                        $sql = "select * from tbbook2 where price between $min and $max";
                    }
                    else if(!empty($min) && empty($max)){
                        $sql="select * from tbbook2 where price >= $min";
                    }
                    else if(empty($min) && !empty($max)){
                        $sql="select * from tbbook2 where price <= $max";
                    }
                    $r = mysqli_query($link, $sql);
                    echo "$sql";
                    $a_book = mysqli_fetch_all($r);
                    foreach ($a_book as $item) {
                        echo '<tr>';
                        echo "<td> $item[0] </td>";
                        echo "<td> $item[1] </td>";
                        echo "<td> $item[2] </td>";
                        echo "<td> $item[3] </td>";
                        echo "<td>";
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>



        </div>
    </body>
</html>
