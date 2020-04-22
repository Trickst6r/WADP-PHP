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
	    <h2>With Error Handling Demo</h2>
	    <hr>
	    <?php
	    error_reporting();

	    function add(int $n1, int $n2) {
		return $n1 + $n2;
	    }

	    try {
		echo add('two', 'three');
	    } catch (Exception $e) {
		echo "Exception: kieu tham so ko hop le";
	    } catch (Error $e) {
		echo'Error: Occured in the program';
	    } finally {
		echo"<h4>KEt thuc TRy- Catch</h4>";
	    }

	    echo"<hr>";
	    echo"<h3> Ket thuc chuong trinh </h3>";
	    ?>
	</div>
    </body>
</html>
