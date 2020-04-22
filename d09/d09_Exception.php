<!DOCTYPE html>
<!--
Demo cau truc bay loi try - catch - finally
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exception</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
	<div class="container">
	    <h2> Without Exception Handling Demo</h2>
	    <hr>
	    <?php

	    function add(int $n1, int $n2) {
		return $n1 + $n2;
	    }

	    try {
		echo add('two', 'three');
	    } catch (Exception $e) {
		echo "Exception: Occured in the program";
	    } finally {
		echo"<h4>KEt thuc TRy- Catch</h4>";
	    }
	    echo "<hr>";
	    echo "<h4>Ket thuc chuong trinh </h4>"
	    ?>
	</div>
    </body>
</html>
