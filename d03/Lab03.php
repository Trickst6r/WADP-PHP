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
        <h2>Local Variable</h2>
        <hr>
        <?php
        $n1 = 100;
        echo 'n1 = ' . $n1 . '<br>';
        f();
        echo "n1 = $n1 <br>";

        //Khai bao ham f();
        function f() {
            $n2 = 10;
            $n3 = 20;
            $n1 = $n2 * $n3;
            echo "<p> Trong ham f(): <br>";
            echo "f1(): n1 = $n1 </p>";
        }
        ?>
    </body>
</html>