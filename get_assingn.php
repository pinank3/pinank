<?php
//print_r($_GET);
	$x=$_GET['x'];
	$y=$_GET['y']; 

	$add =$x + $y;
	$mul =$x * $y;
	$min =$x - $y;
	$div =$x / $y;

	echo $add;
	echo $mul;
	echo $min;
	echo $div; 

?>