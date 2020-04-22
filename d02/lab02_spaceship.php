<!DOCTYPE html>


<!--Toan tu kiem tra gia tri va tra ve gia tỉ 1,0,-1, ;-->



<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $x = 10;
        $y = 3;
        echo "<p> $x <=> $y = " . ($x  <=> $y) . "</p>";
        echo "<p> $y <=> $x = " . ($y  <=> $x) . "</p>";
        
        
        
        $a ="Anh Duc";
        $b = "Tran Hoa";
        echo "<p> $a <=> $b =" . ($a <=> $b) ."</p>";
        
        $n = [1,2,3];
        $m = [1,2,4];
        echo '<br> n =';
        print_r($n);
        echo '<br> m =';
        print_r($m);
        
        echo "<p> $n <=> $m = " . ($n <=> $m) . "</p>";
        echo "<p> $m <=> $n = " . ($m <=> $n) . "</p>";
        ?>
    </body>
</html>
