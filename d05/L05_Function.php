<!DOCTYPE html>
<!--
Test Phương pháp truyền tham số cho trương trình hàm
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Function demo</h2>
        <hr>
        <?php

        //Hàm f1, nhân đối số x -  trả về giá trị bình phương
        function f1($x) {
            $x = $x * $x; //pow($x, 2)
            echo "Trong ham f1(), x = $x <br>";
        }

        // Ham f2, nhan doi so x (truyen dia chi)
        function f2(&$x) {
            $x = $x * $x; //pow($x, 2)
            echo "Trong ham f2(), x = $x <br><br>";
        }

        // Ham f3, nhan doi so x (default=7)
        function f3($x = 7) {
            $x = $x * $x; //pow($x, 2)
            echo "Trong ham f2(), x = $x <br><br>";
        }

        $n = 5;

        echo "n = $n <br>";
        f1($n);
        echo"***Sau khi goi f1(), n =$n <br>";
        echo "n= $n <br>";
        f2($n);
        echo"***Sau khi goi f2(), n =$n <br><br>";


        $n = 5;
        echo "n = $n <br>";
        echo "****Gọi f3(n) <br>";
        f3($n);
       

        echo "***goi f3() <br>";
        f3();
        ?>
    </body>
</html>
