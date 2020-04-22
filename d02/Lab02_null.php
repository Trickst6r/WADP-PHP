<!DOCTYPE html>




<!--Toan tu kiem tra gia tri Null-->





<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $ho = "Lê";
        $ten = "Nhân";
        $ho2 = $hocuaban ?? "Hữu";
        $ten2 = $ho ?? $ten;

        echo "<p>$ho2 $ten</p>";
        ?>
    </body>
</html>
