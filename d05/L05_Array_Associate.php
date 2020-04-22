<!DOCTYPE html>
<!--
Tao mang bang ham array() -  mang Associate  - mang ket hop, co key la chuoi dat trong dau nháy đôi
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>array</title>
    </head>
    <body>
        <h2>Array Demo</h2>
        <hr>
        <p>Tao mang ket hop bang ham Array()</p>
        <?php
        
        error_reporting(0); //tắt thông báo lỗi
        $a = array("SV01"=>"Thu", "SV02"=>"Dung","SV03"=>"Kim","SV04"=> "Nhan","SV05"=> "Nghia","SV06"=> "Tam","SV07"=> "Be Ba");
        
        echo '<h3>Danh sach sinh vien</h3>';
        echo '<pre>';
        print_r($a);
        echo '</pre>';
        
        $dem = count($a); // Tong so sinh vien
        echo '<h3>Danh sach sinh vien</h3>';
        for ($i = 0; $i < $dem; $i++) {
            $item = each($a); //lac hau - khong nen dung
            echo "Maso: $" . $item[key] . ", ";
            echo "ten: " . $item[value] . "<br>";
        }
        ?>
    </body>
</html>
