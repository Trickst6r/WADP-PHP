<?php
include_once '../../thuvien/connectDB.php';
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Employee List</title>
	<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	
    </head>
    <body>
	<div class="container">
	    <h2>Employee List</h2>

	    <hr>

	    <table class="table tab-content">
		<thead>
		    <tr>
			<th>ID</th>
			<th>Full Name</th>
			<th>Email</th>
		    </tr>
		</thead>
		<tbody>
		    <?php
		    $sql = "select * from tbemployee";
		    $r = mysqli_query($link, $sql);

		    $a_emp = mysqli_fetch_all($r);
		    foreach ($a_emp as $item) {
			echo '<tr>';
			echo "<td> $item[0] </td>";
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
