<?php
    session_start();
    include_once '../student1215633_HuuNhan/thuvien/connectDB.php';
    
    
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container" style="border: 1px black solid; margin-top: 30px; ">
            <div><span style="font-size: 30px; color: #1970c0;">Danh sách mặt hàng </span><a href="Create.php" style="font-size: 30px; margin-left: 60%; color: #ff0000"><u>Create New</u></a>
            </div>
            <table class="table table-bordered" style="margin-top: 20px; border: 2px #000 solid">
                <thead>
                    <tr style="background-color: #d9d9d9; font-size: 20px">
                        <th style="border: 1px #000 solid">ProductId</th>
                        <th style="border: 1px #000 solid">ProductName</th>
                        <th style="border: 1px #000 solid">UnitPrice</th>
                        <th style="border: 1px #000 solid">Quantity</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "select * from saledb";
                    $r = mysqli_query($link, $sql);

                    $a_lophoc = mysqli_fetch_all($r);

                    foreach ($a_lophoc as $key) {
                        echo '<tr style="background-color: #ccffcc">';
                        echo "<td style='border: 1px #000 solid'> $key[0] </td>";
                        echo "<td style='border: 1px #000 solid'> $key[1] </td>";
                        echo "<td style='border: 1px #000 solid'> $key[2] </td>";
                        echo "<td style='border: 1px #000 solid'> $key[3] </td>";
                        echo "<a href='Details.php?id=$key[0]' style='color:black'><u>Detail</u></a> ";
                        echo '</tr>';
			
                    }
                    ?> 
                </tbody>
            </table>
        </div>
    </body>
</html>