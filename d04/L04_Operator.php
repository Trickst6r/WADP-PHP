<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Operator</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <h2>Operator</h2>
            <hr>
            <?php
            $x = 57;
            $y = 26;
            echo '<h3> Phép toán số học</h3>';
            echo "<p> $x / $y =" . ($x / $y) . "<p>";
            echo "<p> intdiv($x / $y) = " . intdiv($x, $y) . "<p>";
            
            echo "<p> $x % $y =" . ($x % $y) . "<p>";
            
            echo'<h3>Phép toán luận lý nhị phân (bitwse) </h3>';
            echo "<p> $x & $y =" . ($x & $y) . "<p>";
            echo "<p> $x | $y =" . ($x | $y) . "<p>";
            echo "<p> $x ^ $y =" . ($x ^ $y) . "<p> <br>"; //Luận lý XOR
            
            $n=3;
            echo'<h3>Phép toán dịch chuyển (shift bitwise) </h3>';
            echo "<p> $x << $n =" . ($x << $n) . "<p>";
            echo "<p> $x >> $n =" . ($x >> $n) . "<p>";
            ?> 
            <!--
            57 = 0011 1001 ( bieu dien nhi phan 57 )
            26 = 0001 1010 ( bien dien nhi phan 16)
            --------------------------------------------
            24 =    0001 1000 (bitwise AND) 2^4 + 2^3 = 16+8
            
            
            57 = 0011 1001 ( bieu dien nhi phan 57 )
            26 = 0001 1010 ( bien dien nhi phan 16)
            ---------------------------------------
            59 =    0011 1011 (bitwise OR) 2^5+2^4+2^3+2^1+2^0
            
            
            57 = 0011 1001 ( bieu dien nhi phan 57 )
            26 = 0001 1010 ( bien dien nhi phan 16)
            ------------------------------
            35 = 0010 0011 (bitwise XOR ) 2^5 + 2^1 + + 2 ^ 0
            
            
            57 = 0011 1001 (biểu diễn nhị phân 57)
            (001)1100 1000 (shift left 3 bits) 2^7 + 2^6 + 2^3=456,
            tuong duong vs phep nhân 57 * 2^3 = 57 *8
            
            57 = 0011 1001 (biểu diễn nhị phân 57)
            0000 0111(001) (shift right 3 bits) 2^7 + 2^6 + 2^3=456, tương đương với phép chia
            57 / 2^3 = 57/8 = 7 dư 1
            
            -->
        </div>

    </body>
</html>
