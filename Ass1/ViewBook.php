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
        <title>Book List</title>
	<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
	<div class="container">
	    <h2>Book List</h2>
	    <span>
		<a href="insertBook.php">Create new book</a> <br> <br>
	    </span>
	    <form action="SearchBook.php">
		<h3 style="margin-left: 12%;margin-bottom: 2%">
		    Price
		    <span style="color: red">From $</span>
		    <input style="margin-left:3%;width: 130px;height: 25px;text-align: center;font-weight: 500;font-size:17px" class="ipNum" type="number" min="0" name="txtMin" id="txtMin"> 
		    <span style="color: red"> To $</span>
		    <input style="margin-left:3%;width: 130px;height: 25px;text-align: center;font-weight: 500;font-size:17px" class="ipNum" type="number" min="0" name="txtMin" id="txtMin"> 
		    <input style="margin-left:7%;width: 80px;height: 25px;text-align: center;background-color: skyblue;color:white;font-weight: 700;font-size:17px" type="submit" name="btnSearch" value="Search">
		</h3>
	    </form>


	    <table class="table tab-content"
		   <thead>
		    <tr>
			<th>Book ID</th>
			<th>Book Name</th>
			<th>Book Price</th>
			<th>Book Author</th>
		    </tr>

		</thead>
		<tbody>
		    <?php
		    $sql = "select * from tbbook where price";

		    $a = mysqli_query($link, $sql);
		    $a_book = mysqli_fetch_all($a);

		    foreach ($a_book as $item) {
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
