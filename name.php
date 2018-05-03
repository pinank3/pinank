<?php
	$name ="Akshay Shah";

	$pattern="/^[A-Za-z][A-Za-z ]{1,}[A-Za-z]$/";

	$res=preg_match(	$pattern, 	$name);

	echo $res;
?>