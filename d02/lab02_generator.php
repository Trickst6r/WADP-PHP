<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Generator</title>
    </head>
    <body>
        <h2>Generator PHP</h2>
        <hr>
        <?php
        srand();
        
        function taoSoNgauNhien($n){
            for( $i = 0; $i < $n; $i++){
                $r =  rand(10, 100); //Tạo số ngẫu nhiên (10-100)
                yield $r;
            }
            return 0;
        }
        
        $ds = taoSoNgauNhien(10);
       echo '<h3>10 so ngau nhien</h3>';
        echo '<ol>';
        foreach ($ds as $item){
            echo"<li> $item </li>";
        }
        echo "</ol>";
        echo '<b> Giá trị return: ' . $ds->getReturn(). '<br>';
        ?>
    </body>
</html>
