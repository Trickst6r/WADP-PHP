<?php
 declare (strict_types = 1)
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        function cong(int $x,int  $y) {
            echo "$x +$y = " . ($x + $y ) . "<br>";
        }

        $n1 = 5;
        $n2 = 10;
        cong($n1, $n2);

        $n3 = 12.345;
        cong($n1, $n3);

        $n4 = "345";
        cong($n1, $n4);
        ?>
    </body>
</html>
