<!DOCTYPE html>
<!--
Thu khai bao ham de qui (ham goi lai chinh no) tinh giai thua cua 1 so nguyen
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Recushion dEmo</h2>
        <hr>
        <?php
        // Định nghĩa hàm tính giai thừa, thep pp bình phương
        function fn_GiaiThua($n){
            $r = 1;
            for ($i = 1; $i <= $n; $i++){
                $r = $r * $i;
            }
            return $r;
        }
        
        // Dinh nghia ham tinh giai thua, theo pp de quy
        function fn_DeQui($n){
            //n1 = n*(n-1)* (n-2) * ... *2*1
            // 0! = 1
            if($n<1){
                return 1;
            }
            return $n* fn_DeQui($n - 1);
        }
        
        
       $n = 5;
       echo "<h3>Bình Thường</h3>";
        $kq = fn_GiaiThua($n);
        echo "<p> n = $n, Giai Thua $n = $kq </p>";
        
        echo "<h3> De Qui </h3>";
        $kq2 = fn_DeQui($n);
        echo "<p> n = $n, Giai thua $n = $kq2 </p>";
        
        ?>
    </body>
</html>
