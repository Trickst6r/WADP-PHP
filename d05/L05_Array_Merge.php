<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Array</title>
    </head>
    <body>
        <h2>Array Merge</h2>
        <hr>
        <?php
        $team1 = ["Huy", "Thu", "Kim", "Huyen"];
        $team2 = ["Duc", "Vuong", "Binh", "Thu"];
        $team3 = ["Tam", "Quynh", "Bao", "Nhan"];

        echo "<h3>Danh sach team 1</h3>";
        echo "<ol>";
        foreach ($team1 as $sv) {
            echo"<li> $sv </li>";
        }
        echo "</ol>";

        //tao 1 mang chua du lieu cua 3 mang
        $studentList = array_merge($team1, $team2, $team3);
        echo "<h3>Danh sach sinh vien</h3>";
        echo "<ol>";
        foreach ($studentList as $sv) {
            echo "<li> $sv </li>";
        }
        echo "</ol>";
        ?>
    </body>
</html>
