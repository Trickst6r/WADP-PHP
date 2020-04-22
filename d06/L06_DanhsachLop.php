<?php
include_once '../thuvien/connectDB.php';
?>

<!DOCTYPE html>
<!--
In ra danh sach cac lop hoc trong bang tbLopHojc
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lop Hoc</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <h2>Danh sach lop hoc</h2>
            <a href="L06_ThemLop.html">Them lop hoc moi</a>
            <hr>
            <<table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Ma lop</th>
                        <th>Thoi gian nhap hoc</th>
                        <th>Chuong trinh</th>
                        <th>Hoc Phi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "select * from tbLopHoc";
                    $r = mysqli_query($link, $sql);
                    $a_lophoc = mysqli_fetch_all($r);

                    foreach ($a_lophoc as $item) {
                        echo '<tr>';
                        echo "<td> $item[0] </td>";
                        echo "<td> $item[1] </td>";
                        echo "<td> $item[2] </td>";
                        echo "<td> $item[3] </td>";
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
