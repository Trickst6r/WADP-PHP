<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        error_reporting();
        function e(){
            echo 'This is e()';
            
        }
        function f(){
            echo 'This is f()';
            return e;
            
        }
        function g(){
            echo 'This is g()';
            return f;
            
        }
        
        g();
        echo '-------------<br>';
        g()();
        echo '--------------<br>';
        g()()();
        echo '---------------<br>';
        ?>
    </body>
</html>
