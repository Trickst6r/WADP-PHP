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
        <h2>Increase Operator</h2>
        <hr>
        <?php
        $x = 20;
        echo "<h3> x = $x </h3>";
        for ($i = 1; $i <= 5 ; $i++) {
            echo '$i = ' .$i . ', ++x =  '. ++$x . "<br>";
        }
        echo'<hr>';
        
        
        $x = 20;
        echo "<h3> x = $x </h3>";
        for ($i = 1; $i <= 5 ; $i++) {
            echo '$i = ' .$i . ', x ++=  '. $x++ . "<br>";
        }
        echo'<hr>';
        
        $s = "Y";
        echo "<h3> s = $s </h3>";
        for ($i = 1; $i <= 5 ; $i++) {
            echo '$i = ' .$i . ', ++s =  '. ++$s . "<br>";
        }
                
        
        //break: kết thúc vòng lắp
        //continue bỏ qua bước thực hiện bên dưới, để chạy về đầu vòng lặp
        //exit: dừng chương trình, mạnh hơn là dừng vòng lắp
        ?>
    </body>
</html>
