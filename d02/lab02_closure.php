<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Closure</title>
    </head>
    <body>
        <h2>Closure Class PHP</h2>
        <hr>
        <?php
        Class Greeting{
            private $word = "Hello, ";
        }
        
        Class Farewell{
        private  $word = "Goodbye. ";
        private  $address="HCM,";
    }
        
        $c = function($name){
            echo "$this->word $name .<br>";
        }; 
        
        $o1 = new Greeting();
        $o2 = new Farewell();
        
        $c->call($o1, "huy");
        $c->call($o2, "Ricardo Milos");
        
        ?>
    </body>
</html>
