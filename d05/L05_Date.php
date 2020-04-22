<!DOCTYPE html>
<!--
Test cac ham thoi gian
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Date Demo</h2>
        <hr>
        <?php
        echo 'Today is: ' . date("l") . "<br>"; //chữ L

        //Set lại múi giờ VN
        date_default_timezone_set("Asia/Saigon");

        $currentDate = getdate();

        echo"<pre>";
        print_r($currentDate);
        echo "</pre>";
        
        echo"<h3>Today: </h3>";
        echo $currentDate["weekday"] ."<br>";
        echo $currentDate["month"] ."<br>";
        echo $currentDate["year"] ."<br>";
        
        //ham doi chuoi thanh date
        $s_bd = "20010124";
        $bd = strtotime($s_bd);
        
        $ngay = date("d", $bd);
        $thang = date("M", $bd);
        $nam = date("Y", $bd);
        echo "<p>Sinh nhat Dung: $ngay/$thang/$nam </p>";
        print_r($bd);
        ?>
    </body>
</html>
