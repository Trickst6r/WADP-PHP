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
        <h2>Generator</h2>
	<?php

	function fnGenerator($start, $end, $incr = 1) {
	    if ($start < $end) {
		//so bat dau <= so ket thuc
		if ($incr <= 0) {
		    throw new LogicException("Buoc nhay phai >0");
		} else {
		    //vong lap sinh ra (generate) day so tang dan cho ct goi
		    for ($i = $start; $i <= $end; $i += $incr) {
			yield $i;
		    }
		}
	    } else {
		//so bat dau > so ket thuc => phai sinh ra day so giam dan
		if ($incr >= 0) {
		    throw new LogicException("Buoc nhay phai < 0");
		} else {
		    //vong lap sinh ra (generate) day so giam dan cho ct goi
		    for ($i = $start; $i >= $end; $i += $incr) {
			yield $i;
		    }
		}
	    }
	}

	echo "<h3>Day so tang 1-20,buoc nhay default</h3>";
	foreach (fnGenerator(1, 20) as $key => $value) {
	    echo "$value ,";
	}

	echo "<h3>Day so tang 1-20 + buoc nhay = 3</h3>";
	foreach (fnGenerator(1, 20, 3) as $key => $value) {
	    echo "$value ,";
	}

	echo "<h3>Day so giam 20-1 + buoc nhay = -3</h3>";
	foreach (fnGenerator(20, 1, -3) as $key => $value) {
	    echo "$value ,";
	}

	echo "<h3>Day so giam 20-1 + buoc nhay = default --> Erro LogicException</h3>";
	foreach (fnGenerator(20, 1) as $key => $value) {
	    echo "$value ,";
	}
	?>
    </body>
</html>