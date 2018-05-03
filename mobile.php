<?php
	$no =9820098200;

	$pattern="/^[1-9][0-9]{9}$/";

	$res=preg_match(	$pattern, 	$no);

	echo $res;
?>