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
        <h2>Static Variable</h2>
        <hr>
        <?php

        function fnCount() {
            static $x = 1;
            echo "<h3>fnCount() : x = $x </h3>";
            $x += 10;
        }

        function fnCount2() {
            static $x = 1;
            echo "<h3>fnCount2() : static x = $x </h3>";
            $x += 10;
        }

        fnCount(); //gọi hàm fnCount lần 1
        fnCount(); //gọi hàm fnCount lần 2
        fnCount(); //gọi hàm fnCount lần 3
        
        echo "<p> **** <br>";
        
        fnCount2(); //gọi hàm fnCount lần 1
        fnCount2(); //gọi hàm fnCount lần 2
        fnCount2(); //gọi hàm fnCount lần 3
        ?>
    </body>
</html>
