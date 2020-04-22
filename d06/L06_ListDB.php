<?php
    include_once '../thuvien/connectDB.php';
?>


<!DOCTYPE html>


<!--
Liet ke danh sach cac CSDL co trong may chuDB MySQL
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>List DB</title>
    </head>
    <body>
        <h2>Danh sach DB</h2>
        <hr>
        <?php
       $query = "show databases";
       $r = mysqli_query($link, $query);
       
       $a_db = mysqli_fetch_all($r);
       
       echo "<pre>";
       print_r($a_db);
       echo "</pre>";
        ?>
    </body>
</html>
