<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>System Variable</title>
    </head>
    <body>
        <h2>System Variable</h2>
        <hr>
        <?php
        echo "<b>Server Software : </b>" . $_SERVER ['SERVER_SOFTWARE'] . "<br>";
        echo "<b>Server Name : </b>" . $_SERVER ['SERVER_NAME'] . "<br>";
        echo "<b>Server Protocol : </b>" . $_SERVER ['SERVER_PROTOCOL'] . "<br>";
        echo "<b>Server Port : </b>" . $_SERVER ['SERVER_PORT'] . "<br>";
        echo "<b>Browser : </b>" . $_SERVER ['HTTP_USER_AGENT'] . "<br>";
        echo "<b>Media Type: </b>" . $_SERVER ['HTTP_ACCEPT'] . "<br>";
        ?>
    </body>
</html>
