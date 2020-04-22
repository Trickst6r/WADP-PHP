<?php
include_once '../thuvien/connectDB.php';
?>


<!DOCTYPE html>
<!--
Liet ke danh sach cac bang trong 
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Danh sach cac bang trong DB [1907db]</h2>
        <hr>
        <?php
        $sql = "Show Tables from $dbName";
        $r = mysqli_query($link, $sql);

        $a_tables = mysqli_fetch_all($r);
        foreach ($a_tables as $key => $value) {
            echo $value[0];
        }
        ?>
    </body>
</html>
